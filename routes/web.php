<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
    $url = "https://newsapi.org/v2/top-headlines?country=eg&categor=%D8%B9%D8%A7%D8%AC%D9%84&apiKey=8a0a879162144345af7b22df76467a8f";
    $json = file_get_contents($url);
    $json_data = json_decode($json, true);

//    ----------politic json---------
    $politic_url = "http://webhose.io/filterWebContent?token=43939f70-364f-4f3c-9c4f-84ac4f5ece38&format=json&ts=1543864001127&sort=crawled&q=thread.country%3AEG%20language%3Aarabic%20site_type%3Anews%20thread.title%3A%D8%B3%D9%8A%D8%A7%D8%B3%D8%A9
";
    $politic_json = file_get_contents($politic_url);
    $firstElement = json_decode($politic_json, true);
//    ------------Sports-----------------
    $sports_url = "https://newsapi.org/v2/top-headlines?country=eg&category=sports&apiKey=8a0a879162144345af7b22df76467a8f";
    $sports_json = file_get_contents($sports_url);

    $sportsElements = json_decode($sports_json, true);

//    -----------Arts-------------
    $arts_url = "http://webhose.io/filterWebContent?token=43939f70-364f-4f3c-9c4f-84ac4f5ece38&format=json&ts=1543864086443&sort=crawled&q=thread.country%3AEG%20language%3Aarabic%20site_type%3Anews%20thread.title%3A%D9%81%D9%86%D9%88%D9%86";
    $arts_json = file_get_contents($arts_url);
    $artsElements = json_decode($arts_json, true);


    return View::make('welcome')->with(compact('json_data','firstElement','sportsElements','artsElements'));

});

// Frontend Routing
// Route::get('/','NewsController@index');
Route::get('news','NewsController@index');
Route::get('news/category/{id}','NewsController@category');
Route::get('news/detail/{id}','NewsController@detail');

// Admin Routing
Route::get('admin','admin\AdminController@index');
Route::post('admin/login_check','admin\AdminController@login_check');
Route::get('admin/add-news','admin\AdminController@add');
Route::post('admin/store-news','admin\AdminController@store_news');
Route::get('admin/edit-news/{id}','admin\AdminController@edit');
Route::post('admin/update-news/{id}','admin\AdminController@update_news');
Route::get('admin/news/delete/{id}','admin\AdminController@delete');

// Category Routing
Route::get('admin/category','admin\CategoryController@index');
Route::get('admin/category/add','admin\CategoryController@add');
Route::post('admin/category/store_category','admin\CategoryController@store_category');
Route::get('admin/category/edit/{id}','admin\CategoryController@edit');
Route::post('admin/category/update_category/{id}','admin\CategoryController@update_category');
Route::get('admin/category/delete/{id}','admin\CategoryController@delete');

Route::get('admin/signin','admin\AdminController@signin');
Route::get('admin/signout','admin\AdminController@signout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
