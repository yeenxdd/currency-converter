<?php

//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConversionRateController;

Route::get('/', [ConversionRateController::class,'showForm']);
Route::post('/convert', [ConversionRateController::class, 'convert']);
