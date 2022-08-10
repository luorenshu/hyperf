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
return [
    'http' => [
        \App\Middleware\CorsMiddleware::class, // 全局跨域中间件
        \App\Middleware\RuntimeConsumingMiddleware::class, // 全局运行时耗时中间件
    ],
];
