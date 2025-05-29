<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Web\CustomerWebController;

Route::get('/', function () {
    return view('welcome');
});

// Routes pour la gestion des clients
Route::resource('customers', CustomerWebController::class);

// Route de test pour les utilisateurs
Route::get('/test-users', function() {
    return app(UserController::class)->index();
});
