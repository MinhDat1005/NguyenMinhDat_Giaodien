<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ProductController;


Route::get('/',[HomeController::class,'index']);//Trang chu
Route::get('/san-pham',[ProductController::class,'index']);//san pham 
Route::get('/chi-tiet-san-pham/{slug}',[ProductController::class,'product_detail']);//san pham
Route::get('/lien-he',[ContactController::class,'index']);//lien he
