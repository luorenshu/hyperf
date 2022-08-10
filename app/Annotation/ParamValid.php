<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Annotation;

use Hyperf\Di\Annotation\AbstractAnnotation;

/**
 * 简单参数验证
 * @Annotation
 * @Target("METHOD")
 * Class ParamValid
 */
class ParamValid extends AbstractAnnotation
{
    /**
     * 参数值
     * @var string
     */
    public $value;

    /**
     * 内置规则.
     * @var string
     */
    public $rule;
}
