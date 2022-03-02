<?php

use App\Http\Controllers\ControllerAboutUs;
use App\Http\Controllers\ControllerContactUs;
use App\Http\Controllers\ControllerHome;
use App\Http\Controllers\ControllerNews;
use App\Http\Controllers\ControllerProducts;
use App\Http\Controllers\ControllerPrograms;
use Illuminate\Support\Facades\Route;

Route::get("/", [ControllerHome::class, 'index']);

Route::prefix("category")->group(function(){
    Route::get("/marbel-edu-games", [ControllerProducts::class, 'category1']);
    Route::get("/marbel-and-friends-kind-games", [ControllerProducts::class, 'category2']);
    Route::get("/riri-story-books", [ControllerProducts::class, 'category3']);
    Route::get("/kolak-kids-songs", [ControllerProducts::class, 'category4']);
});

Route::get("/news/{params?}", [ControllerNews::class, 'index']);

Route::prefix("program")->group(function(){
    Route::get("/karir", [ControllerPrograms::class, 'karir']);
    Route::get("/magang", [ControllerPrograms::class, 'magang']);
    Route::get("/kunjungan-industri", [ControllerPrograms::class, 'kunjunganIndustri']);
});

Route::get("/about-us", [ControllerAboutUs::class, 'index']);

Route::resource('/contact-us', ControllerContactUs::class, [
    'only' => ['index', 'profile', 'address']
]);

