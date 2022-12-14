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
namespace App\Middleware;

use App\Lib\Tools\Log;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Throwable;

class RuntimeConsumingMiddleware implements MiddlewareInterface
{
    /**
     * @throws Throwable
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $startTime = microtime(true);
        try {
            $response = $handler->handle($request);
        } catch (Throwable $exception) {
            throw $exception;
        } finally {
            $time = microtime(true) - $startTime;
            $debug = '接口: ' . $request->getUri()->getPath() . ' 请求耗时: ' . $time . 's，' . '请求参数: ' . json_encode($request->getQueryParams(), JSON_UNESCAPED_UNICODE);
            if ($time > 1) {
                Log::get()->error($debug);
            } else {
                Log::get()->info($debug);
            }
        }

        return $response;
    }
}
