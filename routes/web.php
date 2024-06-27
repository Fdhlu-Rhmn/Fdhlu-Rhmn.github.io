<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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
Route::get('/beranda', function () {
    return view('pages.beranda');
})->name('beranda');
Route::get('/result-ai', function () {
    return view('pages.result-ai');
})->name('result');
Route::get('/claim-token', function () {
    return view('pages.claim-token');
})->name('claim');

Route::get('/', function () {
    return view('pages.main');
})->name('main');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/machine-learning', function () {
    return view('pages.machine-learning');
})->name('ai');

Route::get('/user-profile', function () {
    return view('pages.user-profile');
})->name('profile');

Route::get('/token-pages', function () {
    return view('pages.token-pages');
})->name('tokens');

Route::get('/donation', function () {
    return view('pages.donation');
})->name('donation');

Route::get('/donation/{donationId}', function ($donationId) {
    return view('pages.donation-transfer', ['donationId' => $donationId]);
})->name('donation-transfer');

Route::group(['middleware' => 'auth'], function () {

});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', function () {
        return view('pages.login');
    })->name('auth.login');
});