<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about($vq, $c){
     $name = 'John';
     return view('About_Us',['myname'=>$name, 'q'=>$vq, 'contact'=>$c]);

    }
}