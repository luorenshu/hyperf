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
namespace App\Controller;

use App\Lib\Tools\Log;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;

/**
 * @Controller
 */
class IndexController extends AbstractController
{
    /**
     * @GetMapping(path="/")
     */
    public function index(): array
    {
        return [
            'method' => $this->request->getMethod(),
            'date' => date('Y-m-d H:i:s'),
        ];
    }

    /**
     * 测试接口.
     * @GetMapping(path="/test")
     */
    public function test(): array
    {
        Log::get()->error('error');
        Log::get()->debug('debug');
        Log::get()->notice('notice');
        Log::get()->warning('warning');
        return successJson('test');
    }
}
