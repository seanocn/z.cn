<?php

namespace app\api\model;


class Image extends BaseModel
{
    protected $hidden = ['delete_time','update_time', 'id', 'from'];

    public function getUrlAttr($url,$data)
    {
        return $this->prefixImgUrl($url,$data);
    }
}

