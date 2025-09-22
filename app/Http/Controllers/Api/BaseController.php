<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function successResponse($message, $data = [])
    {
        return response()->json([
            'status'  => 'success',
            'message' => $message,
            'data'    => $data,
        ]);
    }
}
