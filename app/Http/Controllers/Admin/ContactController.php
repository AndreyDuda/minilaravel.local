<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class ContactController extends Controller
{

    /*protected $request;

   	public function __construct(Request $request) {
    	$this->request = $request;
	}*/


    public function show(Request $request,$id=FALSE) {

        //print_r($request->all());

        //$array = $request->only(['name','site']);
        //$array = $request->except(['name','site']);

        //print_r($array);



        if($request->has('name')) {
            echo '<h1 style="margin-top:100px">'.$request->input('name','Default').'</h1>';
        }


        //echo '<h1 style="margin-top:100px">'.$request->name.'</h1>';


        /*if($request->is('contact')) {
            echo '<h1 style="margin-top:100px">'.$request->path().'</h1>';
        }*/

        //echo '<h1 style="margin-top:100px">'.$request->url().'</h1>';
        //echo '<h1 style="margin-top:100px">'.$request->fullUrl().'</h1>';

        //echo '<h1 style="margin-top:100px">'.$request->method().'</h1>';

        //echo '<h1 style="margin-top:100px">'.$request->query('option').'</h1>';

        //print_r($request->segments());

        if($request->isMethod('post')) {

            ////

            ////validation

            ////

            //$request->flash();
            //$request->old('name');
            //$request->flashOnly('name','site');
            //$request->flashExcept('name','site');

            //return redirect()->route('contact')->withInput();
            //echo '<h1 style="margin-top:100px">'.$request->method().'</h1>';
        }

        return view('contact',['title'=>'Contacts']);
    }

}

