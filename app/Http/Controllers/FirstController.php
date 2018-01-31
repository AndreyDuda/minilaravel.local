<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 29.01.2018
 * Time: 20:01
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FirstController extends Controller
{
    public function show(){

        $array=array(
            'title' => 'Lara',
            'data'  => [
                'one'   => 'List 1',
                'two'   => 'List 2',
                'three' => 'List 3',
                'four'  => 'List 4',
                'five'  => 'List 5'
            ],
            'data1' => ['List 1', 'List 2', 'List 3', 'List 4', 'List 5'],
            'bvar'  => true,
            'script' => "<script>alert('Hello')</script>"
        );

        if(view()->exists('index')){
            return view('index',$array);
        }
        abort(404);

    }
}