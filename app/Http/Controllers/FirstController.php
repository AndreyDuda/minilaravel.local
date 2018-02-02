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

class FirstController extends Controller
{
    public function show(){


        if(view()->exists('index')){
            /*$articles=DB::SELECT('SELECT * FROM `articles` WHERE id=:id',['id'=>2]);*/
            $articles = Article::all();
            dump($articles);
            return view('index')->withTitle('Hello Word');
        }
        abort(404);

    }
}