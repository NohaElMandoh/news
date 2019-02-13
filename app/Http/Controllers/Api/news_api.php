<?php

namespace App\Http\Controllers\Api;

use \Validator;
use \Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\News;

class news_api extends Controller
{
    public function create_news(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'title' => 'required',
            'desc' => 'required',
            'img' => 'required',
            'category_id' => 'required',

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

       $news =$request->user()->news()-> create($request->all());
        if ($request->hasFile('img')) {
            $path = public_path();
            $destinationPath = $path . '/uploads/items/'; // upload path
            $photo = $request->file('img');
            $extension = $photo->getClientOriginalExtension(); // getting image extension
            $name = time() . '' . rand(11111, 99999) . '.' . $extension; // renameing image
            $photo->move($destinationPath, $name); // uploading file to given path
            $news->update(['img' => 'uploads/items/' . $name]);
        }
        if ($news) {
            $data = [
                'data' => [
                    'status' => 1,
                    'msg' => 'تم التسجيل بنجاح',
                    'data' => $news

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
