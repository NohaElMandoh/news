<?php

namespace App\Http\Controllers\Api;


use \Response;
use \Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;

class Auth extends Controller
{
    public function register(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:admins',
            'password' => 'required|confirmed'
        ]);

        if ($validation->fails()) {
            return Response()->json([
                'data' => [
                    'status' => 0,
                    'msg' => 'برجاء ملئ جميع الحقول',
                    'errors' => $validation->errors()
                ]
            ], 200);
        }

        $userToken = str_random(60);
        $request->merge(array('api_token' => $userToken));
        $request->merge(array('password' => bcrypt($request->password)));
        $user = Admin::create($request->all());
        if ($user) {
            $data = [
                'data' => [
                    'status' => 1,
                    'api_token' => $userToken,
                    'msg' => 'تم التسجيل بنجاح',
                    'data' => $user

                ]
            ];
            return Response::json($data, 200);
        } else {
            return Response::json([
                'data' => [
                    'status' => 0,
                    'message' => 'حدث خطأ ، حاول مرة أخرى',
                ]
            ], 200);
        }
    }
}
