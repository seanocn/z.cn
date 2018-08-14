<?php
/**
 * Created by PhpStorm.
 * User: PinLi
 * Date: 2018/8/14
 * Time: 11:28
 */

namespace app\api\validate;


class IDCollection extends BaseValidate
{
    protected $rule = [
        'ids' => 'require|checkIDs'
    ];

    protected $message = [
        'ids' => 'ids参数必须是以逗号分隔的多个正整数'
    ];

    /**
     * @param $value
     * @return bool
     */
    protected function checkIDs($value)
    {
        $values = explode(',', $value);
        if (empty($values)) {
            return false;
        }
        foreach ($values as $id) {
            if (!$this->isPositiveIntger($id)) {
                return false;
            }
        }
        return true;
    }
}