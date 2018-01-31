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

Route::get('/', ['as'=>'home','uses'=>'Admin\IndexController@show']);

/*Route::get('/','IndexController@index');*/
Route::get('/about/','FirstController@show');
/*Route::controller('pages','PagesController');*/

Route::get('/articles/', [
    'uses' => 'Admin\Core@articles',
    'as' => 'articles'
]);
Route::get('/article/{page}', [
    'uses' => 'Admin\Core@article',
    'as' => 'article'
]);
Route::match(['get','post'], '/contact',['uses'=>'Admin\ContactController@show','as'=>'contact']);

/*Route::get('/pages/add','Admin\CoreResourse@add');
Route::resource('/pages/','Admin\CoreResourse',['except'=>['index','show']]);*/

/*Route::controller('/pages','PagesController');*/

/*Route::get('/page/{id}',function($id){
    echo $id;
});
Route::get('/welcome/', function(){
   return view('welcome');
});*/

