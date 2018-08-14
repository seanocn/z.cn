<?php
/**
 * Created by PhpStorm.
 * User: PinLi
 * Date: 2018/8/11
 * Time: 17:40
 */

namespace app\api\validate;

use app\lib\exception\ParameterException;
use think\facade\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        //获取http传入的参数
        //对这些参数进行验证
        $requst = Request::instance();
        $params = $requst->param();

        $result = $this->batch()->check($params);
        if (!$result){
            $e = new ParameterException([
                'msg' => $this->error,
            ]);
            throw $e;
        }else {
            return true;
        }
    }

    protected function isPositiveIntger($value, $rule = '', $date = '', $field = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        } else {
            return false;
        }
    }
}