<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\MenuController;
use App\Http\Controllers\backend\BackendController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[FrontendController::class,'index'])->name('frontend.index');
Route::get('/aboutFront',[MenuController::class,'about'])->name('frontend.about');
Route::get('/serviceFront',[MenuController::class,'service'])->name('frontend.service');
Route::get('/featureFront',[MenuController::class,'feature'])->name('frontend.feature');
Route::get('/quoteFront',[MenuController::class,'quote'])->name('frontend.quote');
Route::get('/teamFront',[MenuController::class,'team'])->name('frontend.team');
Route::get('/testomonialFront',[MenuController::class,'testomonial'])->name('frontend.testomonial');
Route::get('/contactFront',[MenuController::class,'contact'])->name('frontend.contact');


//Route::get('/admin',[BackendController::class,'index'])->name('backend.index');