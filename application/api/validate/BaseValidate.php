<?php
/**
 * Created by PhpStorm.
 * User: PinLi
 * Date: 2018/8/11
 * Time: 17:40
 */

namespace app\api\validate;

use think\Exception;
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

        $result = $this->check($params);
        if (!$result){
            $error = $this->error;
            throw new Exception($error);
        }else {
            return true;
        }
    }
}