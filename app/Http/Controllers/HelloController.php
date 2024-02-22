<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //新規追加のメソッド
    public function index(){
        return "hello, world";
    }
}
