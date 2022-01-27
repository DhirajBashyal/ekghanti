<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\EnhancesController;
use App\Http\Controllers\ClientController;
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
    return view('auth\login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('Backend\Content\Dashboard\dashboard');
})->name('dashboard');

Route::get('banner', [App\Http\Controllers\HomeController::class, 'bannerAdmin'])->name('banner');
Route::get('enhances', [App\Http\Controllers\HomeController::class, 'enhancesAdmin'])->name('enhances');
Route::get('client', [App\Http\Controllers\HomeController::class, 'clientAdmin'])->name('client');



//Banner Controller
Route::post('/create-banner',[BannerController::class,'createBanner'])->name('banner.create');
Route::get('/banners',[BannerController::class,'getBanner']);
Route::get('/banners/{id}',[BannerController::class,'getBannerById']);
Route::get('/delete-banner/{id}',[BannerController::class,'deleteBanner']);
Route::get('/edit-banner/{id}',[BannerController::class,'editBanner']);
Route::post('/update-banner',[BannerController::class,'updateBanner'])->name('banner.update');


//Enhances Controller
Route::post('/create-enhances',[EnhancesController::class,'createEnhances'])->name('enhances.create');
Route::get('/enhancess',[EnhancesController::class,'getEnhances']);
Route::get('/enhancess/{id}',[EnhancesController::class,'getEnhancesById']);
Route::get('/delete-enhances/{id}',[EnhancesController::class,'deleteEnhances']);
Route::get('/edit-enhances/{id}',[EnhancesController::class,'editEnhances']);
Route::post('/update-enhances',[EnhancesController::class,'updateEnhances'])->name('enhances.update');



//Client Controller
Route::post('/create-client',[ClientController::class,'createClient'])->name('client.create');
Route::get('/clients',[ClientController::class,'getClient']);
Route::get('/clients/{id}',[ClientController::class,'getClientById']);
Route::get('/delete-client/{id}',[ClientController::class,'deleteClient']);
Route::get('/edit-client/{id}',[ClientController::class,'editClient']);
Route::post('/update-client',[ClientController::class,'updateClient'])->name('client.update');



