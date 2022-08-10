<?php
/**
 * Created by PhpStorm
 * User: 龍zero
 * Date: 2022-04-10
 * Time: 16:28.
 */
declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Lib\Enum;

use Hyperf\Constants\AbstractConstants;
use Hyperf\Constants\Annotation\Constants;

/**
 * @Constants
 * Class Code
 */
class Code extends AbstractConstants
{
    /**
     * @Message("code.SUCCESS")
     */
    public const SUCCESS = 0;

    /**
     * @Message("code.CREATED")
     */
    public const CREATED = 1;

    /**
     * @Message("code.UPDATED")
     */
    public const UPDATED = 2;

    /**
     * @Message("code.DELETED")
     */
    public const DELETED = 3;

    /**
     * @Message(""code.FAIL"")
     */
    public const FAIL = 10200;

    /**
     * @Message("code.UN_AUTHORIZATION")
     */
    public const UN_AUTHORIZATION = 10000;

    /**
     * @Message("code.UN_AUTHENTICATION")
     */
    public const UN_AUTHENTICATION = 10010;

    /**
     * @Message("code.NOT_FOUND")
     */
    public const NOT_FOUND = 10020;

    /**
     * @Message("code.PARAMETER_ERROR")
     */
    public const PARAMETER_ERROR = 10030;

    /**
     * @Message("code.TOKEN_INVALID")
     */
    public const TOKEN_INVALID = 10040;

    /**
     * @Message("code.TOKEN_EXPIRED")
     */
    public const TOKEN_EXPIRED = 10050;

    /**
     * @Message("code.DUPLICATED")
     */
    public const DUPLICATED = 10060;

    /**
     * @Message("code.INTERNAL_SERVER_ERROR")
     */
    public const INTERNAL_SERVER_ERROR = 9999;

    /**
     * @Message("code.FORBIDDEN")
     */
    public const FORBIDDEN = 10070;

    /**
     * @Message("code.METHOD_NOT_ALLOWED")
     */
    public const METHOD_NOT_ALLOWED = 10080;

    /**
     * @Message("code.REFRESH_FAILED")
     */
    public const REFRESH_FAILED = 10100;

    /**
     * @Message("code.FILE_TOO_LARGE")
     */
    public const FILE_TOO_LARGE = 10110;

    /**
     * @Message("code.FILE_TOO_MANY")
     */
    public const FILE_TOO_MANY = 10120;

    /**
     * @Message("code.FILE_EXTENSION")
     */
    public const FILE_EXTENSION = 10130;

    /**
     * @Message("code.REQUEST_LIMIT")
     */
    public const REQUEST_LIMIT = 10140;
}
