<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function ourwork(){
        return view('ourwork');
    }

    public function services(){
        return view('service');
    }

    public function partner(){
        return view('partner');
    }

    public function contacts(){
        return view('contacts');
    }
}
