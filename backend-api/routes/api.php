<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Log;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route API RESTful pour Customer
Route::apiResource('customers', CustomerController::class);

// Route pour les utilisateurs
Route::get('/users', function() {
    Log::info('Accessing /api/users endpoint');
    return app(UserController::class)->index();
});
