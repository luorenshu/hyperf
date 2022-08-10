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
namespace App\Lib\Tools;

use Hyperf\Macroable\Macroable;

/**
 * Class Request.
 * @method uid()
 * @method user(string $key = null)
 */
class Request extends \Hyperf\HttpServer\Request
{
    use Macroable;
}
