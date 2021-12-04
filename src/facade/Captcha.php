<?php

namespace think\captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @method void check(string $code) static  校验验证码
 * @method void check4api(string $code, string $key) static 校验验证码
 * @method void create(string $config = null, bool $api = false) static 生成验证码
 * @method void create4api(string $config = null) static 生成验证码配置信息
 * @package think\captcha\facade
 * @mixin \think\captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \think\captcha\Captcha::class;
    }
}
