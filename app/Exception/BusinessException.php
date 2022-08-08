<?php

declare(strict_types=1);
/**
 * This file is part of xiaofeibao.
 * @link     https://www.xfb315.com
 */
namespace App\Exception;

namespace App\Exception;

use Hyperf\Server\Exception\ServerException;

class BusinessException extends ServerException
{
    public $data = [];

    public function __construct(string $message = '', int $code = 400, $data = [])
    {
        parent::__construct($message, $code);
        $this->data = $data;
    }

    public function returnError()
    {
        $data = [
            'code' => $this->getCode(),
            'message' => $this->getMessage(),
            'data' => $this->data,
        ];
    }
}
