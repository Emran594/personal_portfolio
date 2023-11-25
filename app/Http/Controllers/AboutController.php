<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('pages/about');
    }
    
    public function portfolio(){
        return view('pages/portfolio');
    }
    public function services(){
        return view('pages/services');
    }
    public function blog(){
        return view('pages/blog');
    }
    public function contact(){
        return view('pages/contact');
    }
}
