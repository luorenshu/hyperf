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
namespace App\Exception\Handler;

use App\Exception\BusinessException;
use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\ExceptionHandler\ExceptionHandler;
use Hyperf\HttpMessage\Stream\SwooleStream;
use Psr\Http\Message\ResponseInterface;
use Throwable;

class AppExceptionHandler extends ExceptionHandler
{
    /**
     * @var StdoutLoggerInterface
     */
    protected $logger;

    public function __construct(StdoutLoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function handle(Throwable $throwable, ResponseInterface $response): ResponseInterface
    {
        if ($throwable instanceof BusinessException) {
            $data = json_encode([
                'code' => $throwable->getCode(),
                'msg' => $throwable->getMessage(),
                'data' => $throwable->data,
            ], JSON_UNESCAPED_UNICODE);
        } else {
            $data = json_encode([
                'code' => $throwable->getCode(),
                'msg' => '服务器内部错误',
                'debug' => 'Internal Server Error:' . sprintf('%s[%s] in %s', $throwable->getMessage(), $throwable->getLine(), $throwable->getFile()),
            ], JSON_UNESCAPED_UNICODE);
        }

        $this->stopPropagation();
        return $response->withStatus(200)->withAddedHeader('content-type', 'application/json')->withBody(new SwooleStream($data));
    }

    public function isValid(Throwable $throwable): bool
    {
        return true;
    }
}
