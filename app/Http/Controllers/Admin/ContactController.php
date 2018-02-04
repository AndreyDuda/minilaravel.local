<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Validator;



class ContactController extends Controller
{

    public function store() {


        return view('contact',['title'=>'Contacts']);
    }


    public function show(ContactRequest $request,$id=FALSE)
    {

        if ($request->isMethod('post')) {

            $message = [
                'name.required' => 'Ошибка'
            ];
            $validator = Validator::make($request->all(), [
                'name' => 'required'
            ], $message);
            if ($validator->fails()) {
                dump($validator->errors()->all());
                 return redirect()->route('contact')->withErrors($validator)->withInput();
            }
            /*dump($validator->errors());*/
        }

        /*return view('contact',['title'=>'Contacts']);
    }*/
    }
}

