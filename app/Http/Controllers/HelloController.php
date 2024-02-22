<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        //変更箇所
        $message = "Hello Laravel!!";
        return view('hello',['message' => $message]);
    }
}
