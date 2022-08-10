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
use App\Lib\Tools\Request;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Hyperf\Utils\ApplicationContext;
use Psr\Container\ContainerInterface;

if (! function_exists('successJson')) {
    /**
     * 成功返回.
     * @param string $data
     */
    function successJson($data = [], string $msg = '成功', int $code = 200): array
    {
        return ['data' => $data, 'msg' => $msg, 'code' => $code];
    }
}

if (! function_exists('errorJson')) {
    /**
     * 错误返回.
     */
    function errorJson(string $msg = '失败', int $code = 400): array
    {
        return ['msg' => $msg, 'code' => $code];
    }
}

if (! function_exists('container')) {
    /**
     * 获取容器对象
     */
    function container(): ContainerInterface
    {
        return ApplicationContext::getContainer();
    }
}

if (! function_exists('request')) {
    /**
     * 获取请求对象
     * @return mixed|Request
     */
    function request()
    {
        return container()->get(Request::class);
    }
}

if (! function_exists('response')) {
    /**
     * 获取响应对象
     */
    function response(): ResponseInterface
    {
        return container()->get(ResponseInterface::class);
    }
}
