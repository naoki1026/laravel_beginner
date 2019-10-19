<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    // public function index(Request $request)
    // {
    //     $data = [
    //         'msg' => 'これはコントローラから渡されたメッセージです。',
    //         'id' => $request -> id
    //     ];
    //     return view('hello.index', $data);
    // }

    public function index (){

        $data = [
            'msg' => 'これはBlade利用したサンプルです。'
        ];

        return view('hello.index', $data);

 }

} 