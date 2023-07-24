<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PayPalPaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/web-Development', function () {
    return view('webDevelopment');
});

Route::get('/app-Development', function () {
    return view('appDevelopment');
});

Route::get('/graphic-design', function () {
    return view('graphicDesign');
});

Route::get('/search-engine-optimisation', function () {
    return view('searchEngine');
});

Route::get('/email-marketing', function () {
    return view('emailMarketing');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/place-order/{id}', function () {
    return view('placeOrder');
});

Route::get('/product', function () {
    return view('product');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//-------------- paypal ---------------

Route::get('handle-payment', [PayPalPaymentController::class, 'handlePayment'])->name('make.payment');
Route::get('cancel-payment', 'PayPalPaymentController@paymentCancel')->name('cancel.payment');
Route::get('payment-success', 'PayPalPaymentController@paymentSuccess')->name('success.payment');
