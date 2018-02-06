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
        $result = $request->session()->get('key','defoult');
        $result1 = $request->session()->put('key','defoult');
        $result1 = $request->session()->forget('key');
        $result1 = $request->session()->flash('message','success');
        $result1 = $request->session()->reflash();

        $result1 = $request->session()->all();


        if ($request->isMethod('post')) {

            $message = [
                'name.required' => 'Ошибка'
            ];
            $validator = Validator::make($request->all(), [
                'name' => 'required'
            ], $message);
            if ($validator->fails()) {
                dump($result);
                 return redirect()->route('contact')->withErrors($validator)->withInput();
            }
            dump($result);
            dump($result1);
            /*dump($validator->errors());*/
            return view('contact',['title'=>'Contacts']);
        }

        /*return view('contact',['title'=>'Contacts']);
    }*/
    }
}

