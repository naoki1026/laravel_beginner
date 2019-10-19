<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{

    public function index(){
        return <<<EOF
    
    <html>
    <head>
    <title>Hello/Index</title>
    <style>
    body { font-size: 16pt; color: #999;}
    h1 {font-size: 100pt; test-align:right; color:#eee; margin: -40px; o -50px 0;}
    </style>
    </head>
    <body>
        <h1>Index</h1>
        <p>これは、Helloコントローラーのindexアクションです。</p>
    </body>
    </html>

    EOF;

    }
}
