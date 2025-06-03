<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupportMessageController;

Route::apiResource('users', UserController::class);
Route::apiResource('services', ServiceController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('profiles', ProfileController::class);
Route::apiResource('support', SupportMessageController::class)->only(['store', 'index']);