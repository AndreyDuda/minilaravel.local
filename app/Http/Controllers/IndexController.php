<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){



        $header = 'Hello word';
        $message = 'Первая страница на Laravel';
        return view('page')->with([
            'header' => $header,
            'message' => $message
        ]);
    }
}
