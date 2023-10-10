<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;


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

    //start Promotion
    public function contact(){
        return view('frontend.pages.contact');
    }

    public function showPromotions()
    {
        $promotions = Promotion::all();
        return view('frontend.pages.promotion', compact('promotions'));
    }

    public function detailPromotion($id)
    {
        $promotion = Promotion::find($id);

        if (!$promotion) {
            abort(404); // หากไม่พบข้อมูลโปรโมชั่นให้แสดงหน้า 404 Not Found
        }

        return view('frontend.pages.detail-promotion', compact('promotion'));

        //end Promotion
    }

}