<?php

use App\Http\Controllers\Activity;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('test',[Activity::class,'index'])->name('test');
