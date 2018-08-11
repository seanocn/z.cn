<?php
/**
 * Created by PhpStorm.
 * User: PinLi
 * Date: 2018/8/11
 * Time: 17:00
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePostiveInt;

class Banner
{
    /**
     * 获取指定ID的banner信息
     * @param $url /banner/:id
     * @param $http GET
     * @param $id banner的ID号
     * @param IDMustBePostiveInt $IDMustBePostiveInt
     * @throws \think\Exception
     */
    public function getBanner($id,IDMustBePostiveInt $IDMustBePostiveInt)
    {
        $IDMustBePostiveInt->goCheck();

//        $data = [
//            'id' => $id
//        ];
//        $validate = new IDMustBePostiveInt();
//        $result = $validate->batch()->check($data);
//        if ($result) {
//        }
    }
}