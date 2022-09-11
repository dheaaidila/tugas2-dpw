<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function showhome(){
        return view('landing.home');
    }

    function showcollection(){
        return view('landing.collection');
    }

    function showlogin(){
        return view('landing.login');
    }
}
