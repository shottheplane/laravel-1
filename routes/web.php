<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('test/{id?}',function($id=''){
// 	return 'hello'.$id;
// })->where('id',"[0-9]+");

// Route::resource('/stu',"StuController");


Route::get('/code/captcha/{tmp}', 'LoginController@captcha');

Route::get('/infor',"inforController@infor");

Route::get('/mycar',"mycarController@mycar");

Route::get('/res',"resController@res");

Route::get('/disc',"discController@disc");