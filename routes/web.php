<?php

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

use Illuminate\Support\Facades\Route;

// ==========Start Subdomain==========
Route::domain('{account}.' . config('app.short_url'))->group(function () {
    Route::get('/', 'SubDomainController@index')
        ->name('subdomain');
    // Route::post('/login', 'Auth\LoginController@login')->name('login');
    Route::post('/login', function () {
        return redirect('/home');
    })->name('login');
    Route::get('/home', function ($id) {
        return view('elearning.home');
    });
});
// ==========END Subdomain==========


Route::prefix('admin')->group(function () {
    Route::get('/login', function () {
        return view('mainadmin');
    })->name('login');
    Route::get('/{any}', function () {
        return view('mainadmin');
    })->where('any', '.*');
});

Route::get('/{lang?}', 'MainPageController@index');

// Mencegah Laravel mengembalikan  response 404 / page not found pada saat browser di-refresh
Route::get('/{any}', function () {
})->where('any', '.*');
