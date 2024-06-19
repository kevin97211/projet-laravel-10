<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


 Route::get('/', function () {
     return view('index');
 });


Route::get('/', [ProductController::class, 'index']);