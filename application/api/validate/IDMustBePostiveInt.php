<?php
/**
 * Created by PhpStorm.
 * User: PinLi
 * Date: 2018/8/11
 * Time: 17:20
 */

namespace app\api\validate;

class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveIntger'
    ];

    protected function isPositiveIntger($value, $rule = '', $date = '', $field = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        } else {
            return $field.'必须是正整数';
        }
    }
}