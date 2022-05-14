<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthMiddleware extends Controller
{
   
    public function customauth(){
        return view('welcopy');
    }

    public function frontEnd(){
       return view('frontEnd');
    }

     public function backEnd(){
       return view('backEnd');
    }
}
