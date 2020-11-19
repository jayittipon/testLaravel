<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    function login(){
        return view('login');
    }

    function welcome(){
        return view('welcome');
    }


    function show(){// function
        return view('test')//ส่งค่าไปหน้า test.blade.php
        ->with('name','jay');//ตัวแปร name
    }
}
