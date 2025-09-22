<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class AuthController extends BaseController
{
    public function register(Request $request)
    {
       return $this->successResponse('Register Successfully', [
            'id' => 0,
       ]);
    }
}
