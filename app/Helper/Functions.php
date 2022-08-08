<?php
/**
 * Create By PhpStorm
 * 作者 Bonjour<1051953562@qq.com>
 * 日期 2022/8/8
 * 时间 14:55
 */

use App\Lib\Tools\Request;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Hyperf\Utils\ApplicationContext;
use Psr\Container\ContainerInterface;

if ( ! function_exists('successJson')) {
    /**
     * 成功返回.
     * @param string $data
     */
    function successJson($data = [], string $msg = '成功', int $code = 200): array
    {
        return ['data' => $data, 'msg' => $msg, 'code' => $code];
    }
}

if ( ! function_exists('errorJson')) {
    /**
     * 错误返回.
     */
    function errorJson(string $msg = '失败', int $code = 400): array
    {
        return ['msg' => $msg, 'code' => $code];
    }
}

if ( ! function_exists('container')) {
    /**
     * 获取容器对象
     * @return ContainerInterface
     */
    function container(): ContainerInterface
    {
        return ApplicationContext::getContainer();
    }
}

if ( ! function_exists('request')) {

    /**
     * 获取请求对象
     * @return Request|mixed
     */
    function request()
    {
        return container()->get(Request::class);
    }
}

if (!function_exists('response')) {
    /**
     * 获取响应对象
     * @return ResponseInterface
     */
    function response(): ResponseInterface
    {
        return container()->get(ResponseInterface::class);
    }
}