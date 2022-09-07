<?php

namespace App\Http\Controllers\MTAPI;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function success($data = [])
    {
        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => config('errorcode.code')[200],
            'data' => $data,
        ]);
    }

    public function fail($code, $msg = '', $data = [])
    {
        return response()->json([
            'status' => false,
            'code' => $code,
            'message' => !empty($msg) ? $msg : config('errorcode.code')[(int)$code],
            'data' => $data,
        ]);
    }

}
