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
namespace App\Exception;

namespace App\Exception;

use Hyperf\Server\Exception\ServerException;

/**
 * Class BusinessException.
 */
class BusinessException extends ServerException
{
    public $data = [];

    public function __construct(string $message = '', int $code = 400, $data = [])
    {
        parent::__construct($message, $code);
        $this->data = $data;
    }
}
