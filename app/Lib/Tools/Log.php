<?php
/**
 * Create By PhpStorm
 * 作者 Bonjour<1051953562@qq.com>
 * 日期 2022/8/9
 * 时间 10:22
 */

namespace App\Lib\Tools;


use Hyperf\Logger\LoggerFactory;
use Hyperf\Utils\ApplicationContext;

class Log
{
    public static function get(string $name = 'default')
    {
        return ApplicationContext::getContainer()->get(LoggerFactory::class)->get($name);
    }

}