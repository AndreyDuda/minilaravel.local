<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        $header = 'Hello word';
        $message = 'JJF kkkh g jdg hag fkaghfg akdsfhg aksdgf asgfg asdgf kadgs fa';
        return view('page')->with([
            'header' => $header,
            'message' => $message]);
    }
}
