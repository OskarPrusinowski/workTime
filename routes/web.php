<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Auth::routes();

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth'])->group(function () {

    Route::get('/{any}', function () {
        return view('welcome');
    })->where('any', '.*');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
