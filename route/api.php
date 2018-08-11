<?php
/**
 * Created by PhpStorm.
 * User: PinLi
 * Date: 2018/8/11
 * Time: 17:13
 */

use think\facade\Route;

//获取banner路由
Route::get('banner/:id', 'api/v1.banner/getBanner');
