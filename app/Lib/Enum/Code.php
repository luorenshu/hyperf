<?php
/**
 * Created by PhpStorm
 * User: 龍zero
 * Date: 2022-04-10
 * Time: 16:28
 */
declare(strict_types=1);

namespace App\Lib\Enum;


use Hyperf\Constants\AbstractConstants;
use Hyperf\Constants\Annotation\Constants;

/**
 * @Constants()
 * Class Code
 * @package App\Lib\Enum
 */
class Code extends AbstractConstants
{
    /**
     * @Message("code.SUCCESS")
     */
    const SUCCESS = 0;
    /**
     * @Message("code.CREATED")
     */
    const CREATED = 1;
    /**
     * @Message("code.UPDATED")
     */
    const UPDATED = 2;
    /**
     * @Message("code.DELETED")
     */
    const DELETED = 3;
    /**
     * @Message(""code.FAIL"")
     */
    const FAIL = 10200;
    /**
     * @Message("code.UN_AUTHORIZATION")
     */
    const UN_AUTHORIZATION = 10000;
    /**
     * @Message("code.UN_AUTHENTICATION")
     */
    const UN_AUTHENTICATION = 10010;
    /**
     * @Message("code.NOT_FOUND")
     */
    const NOT_FOUND = 10020;

    /**
     * @Message("code.PARAMETER_ERROR")
     */
    const PARAMETER_ERROR = 10030;
    /**
     * @Message("code.TOKEN_INVALID")
     */
    const TOKEN_INVALID = 10040;
    /**
     * @Message("code.TOKEN_EXPIRED")
     */
    const TOKEN_EXPIRED = 10050;
    /**
     * @Message("code.DUPLICATED")
     */
    const DUPLICATED = 10060;

    /**
     * @Message("code.INTERNAL_SERVER_ERROR")
     */
    const INTERNAL_SERVER_ERROR = 9999;
    /**
     * @Message("code.FORBIDDEN")
     */
    const FORBIDDEN = 10070;
    /**
     * @Message("code.METHOD_NOT_ALLOWED")
     */
    const METHOD_NOT_ALLOWED = 10080;
    /**
     * @Message("code.REFRESH_FAILED")
     */
    const REFRESH_FAILED = 10100;

    /**
     * @Message("code.FILE_TOO_LARGE")
     */
    const FILE_TOO_LARGE = 10110;

    /**
     * @Message("code.FILE_TOO_MANY")
     */
    const FILE_TOO_MANY = 10120;
    /**
     * @Message("code.FILE_EXTENSION")
     */
    const FILE_EXTENSION = 10130;
    /**
     * @Message("code.REQUEST_LIMIT")
     */
    const REQUEST_LIMIT = 10140;

}