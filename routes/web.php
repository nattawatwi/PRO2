<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
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
Route::get('/pages/news-trend', function () {
    return view('frontend.pages.news-trend');
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

//Promotion
Route::get('/pages/promotion', [FrontendController::class, 'showPromotions']);
Route::get('/pages/promotion/detail-promotion/{id}', [FrontendController::class, 'detailPromotion'])->name('detail-promotion');

