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

Route::get('/', function () {
    return view('index');
});

Route::get('map',function(){
    return view("map");
});

/*管理者メニュ-*/
Route::group(['middleware' => ['auth',"admin"]], function () {
    Route::get('admin',function(){
        return view("admin");
    });
}

$messages = [
    "ん？　もう一回",
    "<a href='http://chiebukuro.yahoo.co.jp/search/?p=｛Q｝'>Yahoo知恵袋でやれクソ雑魚ナメクジ</a>",
];

Route::Post('/question', "AnswerController@answer");

