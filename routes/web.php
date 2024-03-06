<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HaiController;
 
Route::get('/VYTECH/{noantrian}/cek', [HaiController::class, 'index']);

Route::get('/vytech', function () {
    return view('welcome');
});
