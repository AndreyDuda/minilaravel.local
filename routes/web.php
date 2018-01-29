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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','IndexController@index');
Route::get('/about/{id}','FirstController@show');

Route::get('/articles/', [
    'uses'=>'Admin/Core@articles',
    'as'=>'articles'
]);
Route::get('/article/{id}', [
    'uses'=>'Admin/Core@article',
    'as'=>'article'
]);

/*Route::get('/pages/add','Admin\CoreResourse@add');
Route::resource('/pages/','Admin\CoreResourse',['except'=>['index','show']]);*/

Route::controller('pages','PagesController');

/*Route::get('/page/{id}',function($id){
    echo $id;
});
Route::get('/welcome/', function(){
   return view('welcome');
});*/

