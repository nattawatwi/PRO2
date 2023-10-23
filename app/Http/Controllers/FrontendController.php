<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;
use App\Models\News;
use App\Models\Service;
use App\Models\Trend;
use App\Models\Contact;
use App\Models\Person;
use App\Models\Organization;

class FrontendController extends Controller
{
    //
    public function index(Request $request){
    
        $promotions = Promotion::all(); // ดึงข้อมูลโปรโมชั่น
        return view('frontend.index', compact('promotions'));
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

    //start Trend
    public function showTrend()
    {
        $trends = Trend::all();
        return view('frontend.pages.trend', compact('trends'));
    }

    public function detailTrend($id)
    {
        $trend = Trend::find($id);

        if (!$trend) {
            abort(404); // หากไม่พบข้อมูลโปรโมชั่นให้แสดงหน้า 404 Not Found
        }

        return view('frontend.pages.detail-trend', compact('trend'));
    }




    //start Service
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


    public function showForm()
    {
        return view('/pages/contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'Ct_username' => 'required',
            'Ct_email' => 'required|email',
            'Ct_title' => 'required',
            'Ct_detail' => 'required',
        ]);

        Contact::create([
            'Ct_username' => $request->input('Ct_username'),
            'Ct_email' => $request->input('Ct_email'),
            'Ct_title' => $request->input('Ct_title'),
            'Ct_detail' => $request->input('Ct_detail'),
            'Ct_date' => now(),
        ]);

        return redirect('/pages/contact')->with('success', 'ข้อความของคุณถูกส่งเรียบร้อยแล้ว!');
    }

    public function searchPerson(Request $request)
    {
        $PersonID = $request->input('PersonID');
        $person = Person::where('PersonID', $PersonID)->first();

        if ($person) {
            return view('frontend.pages.search-person', ['person' => $person]);
        } else {
            return view('frontend.pages.search-person', ['error' => 'Person not found']);
        }
    }

    public function searchOrganization(Request $request)
    {
        $OgnID = $request->input('OgnID');
        $organization = Organization::where('OgnID', $OgnID)->first();
    
        if ($organization) {
            return view('frontend.pages.search-Organization', ['organization' => $organization]);
        } else {
            return view('frontend.pages.search-Organization', ['error' => 'Organization not found']);
        }
    }






}