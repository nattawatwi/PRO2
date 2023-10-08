<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index(Request $request){
        return redirect()->route($request->user()->role);
    }
    public function home(){
        return view('frontend.index');
    }   

    public function customer(){
        return view('frontend.pages.customer');
    }
    public function news(){
        return view('frontend.pages.news');
    }
    public function promotion(){
        return view('frontend.pages.promotion');
    }
    public function service(){
        return view('frontend.pages.service');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }
}
