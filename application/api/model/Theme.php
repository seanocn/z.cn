<?php
/**
 * Created by PhpStorm.
 * User: PinLi
 * Date: 2018/8/14
 * Time: 14:19
 */

namespace app\api\model;


class Theme extends BaseModel
{
    protected $hidden = [
        'delete_time',
        'update_time',
        'topic_img_id',
        'head_img_id'
    ];

    public function topicImg()
    {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }

    public function headImg()
    {
        return $this->belongsTo('Image', 'head_img_id', 'id');
    }
}