<?php
/**
 * Created by PhpStorm.
 * User: PinLi
 * Date: 2018/8/13
 * Time: 15:04
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 400;
    public $msg = '请求的Banner不存在';
    public $errorCode = 40000;
}