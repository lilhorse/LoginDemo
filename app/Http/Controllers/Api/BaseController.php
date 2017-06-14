<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Response;
use Loopeer\QuickCms\Http\Controllers\Api\BaseController as ApiBaseController;

class BaseController extends ApiBaseController
{
    protected function responseSuccessWithOffset($data, $page_size, $count, $offset)
    {
        $ret = array (
            'code' => config('quickApi.code.success'),
            'message' => trans('messages.request_success'),
            'offset' => (int)$offset,
            'page_size' => (int)$page_size,
            'total_size' => (int)$count,
            'data' => $data
        );
        return Response::json($ret);
    }
}
