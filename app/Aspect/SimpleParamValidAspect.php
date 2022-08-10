<?php
/**
 * Created by PhpStorm
 * User: 龍zero
 * Date: 2022-04-10
 * Time: 16:28.
 */

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Aspect;

use App\Annotation\ParamValid;
use App\Exception\BusinessException;
use Hyperf\Di\Annotation\Aspect;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Di\Aop\AbstractAspect;
use Hyperf\Di\Aop\ProceedingJoinPoint;
use Hyperf\Di\Exception\Exception;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\Validation\Event\ValidatorFactoryResolved;

/**
 * 简单参数验证
 * @Aspect
 * Class SimpleParamValidAspect
 */
class SimpleParamValidAspect extends AbstractAspect
{
    public $annotations = [
        ParamValid::class,
    ];

    /**
     * @Inject
     * @var ValidatorFactoryResolved
     */
    protected $validatorFactoryResolved;

    /**
     * @Inject
     * @var RequestInterface
     */
    protected $request;

    /**
     * @throws Exception
     * @return mixed
     */
    public function process(ProceedingJoinPoint $proceedingJoinPoint)
    {
        $validMeta = $proceedingJoinPoint->getAnnotationMetadata()->method[ParamValid::class]->toArray();
        if (empty($validMeta['value']) || (is_array($validMeta['value']) && count($validMeta['value']) != count($validMeta['rule']))) {
            throw new BusinessException('注解格式规范错误！');
        }
        $rules = [];
        if (is_array($validMeta['value'])) {
            foreach ($validMeta['value'] as $key => $value) {
                $rules[$value] = $validMeta['rule'][$key];
            }
        } else {
            $rules[(string) $validMeta['value']] = $validMeta['rule'];
        }
        $requestParams = array_merge($proceedingJoinPoint->arguments['keys'], $this->request->all());
        $validator = $this->validatorFactoryResolved->validatorFactory->make($requestParams, $rules);
        if ($validator->fails()) {
            throw new BusinessException($validator->errors()->first());
        }
        return $proceedingJoinPoint->process();
    }
}
