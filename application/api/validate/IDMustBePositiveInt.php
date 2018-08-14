<?php
/**
 * Created by PhpStorm.
 * User: PinLi
 * Date: 2018/8/11
 * Time: 17:20
 */

namespace app\api\validate;

class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveIntger'
    ];

    protected $message = [
        'id' => 'id必须是正整数'
    ];
}