<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;
use App\Models\News;
use App\Models\service;
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


    //start News
    public function showNews()
    {
        $news = News::all(); // เปลี่ยนจาก New เป็น News
        return view('frontend.pages.news', compact('news'));
    }

    public function detailNews($id)
    {
        $news = News::find($id);
    
        if (!$news) {
            abort(404); // หากไม่พบข้อมูลโปรโมชั่นให้แสดงหน้า 404 Not Found
        }
    
        return view('frontend.pages.detail-news', compact('news'));
    }

    //start News
    public function showServices()
    {
        $services = Service::all();
        return view('frontend.pages.service', compact('services'));
    }


    public function detailService($id)
    {
        $service = Service::find($id); // เปลี่ยนจาก New เป็น Service

        if (!$service) {
            abort(404); // หากไม่พบข้อมูลโปรโมชั่นให้แสดงหน้า 404 Not Found
        }

        return view('frontend.pages.detail-service', compact('service'));
    }


}