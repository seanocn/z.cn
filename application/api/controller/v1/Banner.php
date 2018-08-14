<?php
/**
 * Created by 七月
 * User: 七月
 * Date: 2017/2/15
 * Time: 13:40
 */

namespace app\api\controller\v1;

use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\BannerMissException;
/**
 * Banner资源
 */ 
class Banner
{
    public function getBanner($id)
    {
        (new IDMustBePositiveInt())->goCheck();

        $banner = BannerModel::getBannerById($id);
        if (!$banner ) {
            throw new BannerMissException();
        }
        return json($banner);
    }
}