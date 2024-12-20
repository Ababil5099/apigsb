<?php

use App\Http\Controllers\VisiteurController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/visiteur/initpwds', [VisiteurController::class, 'initPasswords']);

Route::post('/api/visiteur/login', [VisiteurController::class, 'initPasswords']);

Route::get('/api/visiteur/logout', [VisiteurController::class, 'initPasswords']);

Route::get('/api/visiteur/unauth', [VisiteurController::class, 'initPasswords']);
