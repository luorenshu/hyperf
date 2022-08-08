<?php

declare(strict_types=1);
/**
 * This file is part of xiaofeibao.
 * @link     https://www.xfb315.com
 */
namespace App\Annotation;

use Hyperf\Di\Annotation\AbstractAnnotation;

/**
 * 简单参数验证
 * @Annotation
 * @Target("METHOD")
 * Class ParamValid
 */
class ParamValid extends AbstractAnnotation
{
    /**
     * 参数值
     * @var string
     */
    public $value;

    /**
     * 内置规则.
     * @var string
     */
    public $rule;
}
