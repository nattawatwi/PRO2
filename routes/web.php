<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Models\Service;
use App\Models\ServiceCT;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Frontend
Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/pages/customer', function () {
    return view('frontend.pages.customer');
});
Route::get('/pages/news', function () {
    return view('frontend.pages.news');
});
Route::get('/pages/trend', function () {
    return view('frontend.pages.trend');
});
Route::get('/pages/promotion', function () {
    return view('frontend.pages.promotion');
});
Route::get('/pages/service', function () {
    return view('frontend.pages.service');
});
Route::get('/pages/servicect', function () {
    return view('frontend.pages.servicect', ['data'=>ServiceCT::all()]);
});
Route::get('/pages/contact', function () {
    return view('frontend.pages.contact');
});


Route::get('/pages/login', function () {
    return view('frontend.pages.login');
});

Route::get('/pages/search-person', function () {
    return view('frontend.pages.search-person');
});

Route::get('/pages/detail-person', function () {
    return view('frontend.pages.detail-person');
});

Route::get('/pages/search-organization', function () {
    return view('frontend.pages.search-organization');
});

Route::get('/pages/detail-organization', function () {
    return view('frontend.pages.detail-organization');
});


//Promotion
Route::get('/pages/promotion', [FrontendController::class, 'showPromotions']);
Route::get('/pages/promotion/detail-promotion/{id}', [FrontendController::class, 'detailPromotion'])->name('detail-promotion');

Route::get('/pages/service', [FrontendController::class, 'showServices']);
Route::get('/pages/service/service-detail/{id}', [FrontendController::class, 'detailService'])->name('service-detail');

Route::get('/pages/news', [FrontendController::class, 'showNews']);
Route::get('/pages/news/news-detail/{id}', [FrontendController::class, 'detailNews'])->name('news-detail');

Route::get('/pages/trend', [FrontendController::class, 'showTrend']);
Route::get('/pages/trend/trend-detail/{id}', [FrontendController::class, 'detailTrend'])->name('trend-detail');

Route::get('/contact', [FrontendController::class, 'showForm']);
Route::post('/contact', [FrontendController::class, 'submitForm']);

Route::post('/pages/detail-person', [FrontendController::class, 'searchPerson'])->name('searchPerson');
Route::post('/pages/detail-organization', [FrontendController::class, 'searchOrganization'])->name('searchOrganization');

Route::get('/pages/detail-organization/{id}', [FrontendController::class, 'searchOrganization_id'])->name('searchOrganization_id');
Route::get('/pages/cctv-detail', [FrontendController::class, 'detailCCTV'])->name('detailCCTV');

Route::get('/', [FrontendController::class, 'index']);
