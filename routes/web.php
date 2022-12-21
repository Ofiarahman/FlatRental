<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\FlatOwnerController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReviewHomeController;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/profile.uploaddetails', function () {
        return view('profile.uploaddetails');
    })->name('profile.uploaddetails');
});

Route::post('/upload-image',[UploadImageController::class,'upload']);
Route::resource("/flatowner", FlatOwnerController::class);
Route::get('ShowImage','App\Http\Controllers\FlatOwnerController@ShowImage');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/flatowneroptions', function () {
    return view('flatowneroptions');
});

Route::get('/tenantoptions', function () {
    return view('tenantoptions');
});

Route::get('/Home.Index','App\Http\Controllers\HomeController@Index');
Route::resource("/review",ReviewController::class);
Route::get('/Review',[ReviewHomeController::class,'HomeIndex']);
Route::post('dataInsert',[ReviewHomeController::class,'DataInsert']);


