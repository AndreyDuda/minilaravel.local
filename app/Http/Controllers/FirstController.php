<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 29.01.2018
 * Time: 20:01
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use DB;
use App\Article;
use App\User;
use App\Country;

class FirstController extends Controller
{
    public function show(){


        if(view()->exists('index')){
            /*$articles=DB::SELECT('SELECT * FROM `articles` WHERE id=:id',['id'=>2]);*/
            /*$articles = Article::all();*/
            /*dump($articles);*/
           /* $User = User::find(1);*/
           /* $country = Country::find(1);*/
            /*dump($User->country);*/
            /*dump($country->user);*/
           /* $user = User::find(1);
            dump($user->article);*/
            return view('index')->withTitle('Hello Word');
        }
        abort(404);

    }
}