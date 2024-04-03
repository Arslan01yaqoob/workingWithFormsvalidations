<?php

use App\Http\Controllers\workerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/addnew',[workerController::class,'addworker'])->name('addnew');