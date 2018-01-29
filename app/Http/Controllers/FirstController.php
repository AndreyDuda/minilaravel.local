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
    public function show($id){
        echo __METHOD__;
        echo $id;
    }
}