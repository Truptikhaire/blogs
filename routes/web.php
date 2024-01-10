<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/list',         [BlogController::class, 'index']);
        Route::get('/create',       [BlogController::class, 'create']);
        Route::post('/store',       [BlogController::class, 'store']);
        Route::get('/edit/{id}',    [BlogController::class, 'edit']);
        Route::post('/update',      [BlogController::class, 'update']);
    });
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
