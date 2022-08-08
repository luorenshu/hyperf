<?php
/**
 * Create By PhpStorm
 * 作者 Bonjour<1051953562@qq.com>
 * 日期 2022/8/8
 * 时间 17:45
 */

namespace App\Lib\Tools;


use Hyperf\Macroable\Macroable;

/**
 * Class Request
 * @package App\Lib\Tools
 * @method uid()
 * @method user(string $key = null)
 */
class Request extends \Hyperf\HttpServer\Request
{
    use Macroable;
}