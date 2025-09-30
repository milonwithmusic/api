<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::apiResource('/Products', 'ProductController'); 

Route::group(['prefix'=>'products'],function(){
Route::apiResource('/{product}/reviews','ReviewController');
});
