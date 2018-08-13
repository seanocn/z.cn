<?php
/**
 * Created by PhpStorm.
 * User: PinLi
 * Date: 2018/8/13
 * Time: 16:29
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;
}