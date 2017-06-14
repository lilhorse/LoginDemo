<?php

namespace App\Models\Api;

use Loopeer\QuickCms\Models\Api\ApiBaseModel;
use Loopeer\QuickCms\Services\Utils\QiniuUtil;

class BaseModel extends ApiBaseModel
{
    public function getImageAttribute($value)
    {
        $image = $value;
        $prefix = explode('://', $value)[0];
        if ($prefix != 'http' && $prefix != 'https') {
            $image = QiniuUtil::buildQiniuUrl($value);
        }
        return $image;
    }
}
