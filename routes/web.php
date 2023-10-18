<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AuthController;
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
Route::get('/pages/contact', function () {
    return view('frontend.pages.contact');
});


Route::get('/pages/login', function () {
    return view('frontend.pages.login');
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


