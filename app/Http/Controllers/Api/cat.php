<?php

namespace App\Http\Controllers\Api;

use App\models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class cat extends Controller
{
    //
    public function categories()
    {
        $categories = Category::all();
        return responseJson(1,'تم التحميل',$categories);
    }
    public function add_categories(Request $request)
    {
        $validation = validator()->make($request->all(), [
            'name' => 'required',

        ]);

        if ($validation->fails()) {
            $data = $validation->errors();
            return responseJson(0,$validation->errors()->first(),$data);
        }
         Category::create($request->all());
        return responseJson(1,'تم اضافه القسم');
    }

}
