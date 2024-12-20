<?php

use App\Http\Controllers\FraisController;
use App\Http\Controllers\VisiteurController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/visiteur/initpwds', [VisiteurController::class, 'initPasswords']);
Route::post('/visiteur/login', [VisiteurController::class, 'login']);
Route::get('/visiteur/logout', [VisiteurController::class, 'logout']);
Route::get('/visiteur/unauth', [VisiteurController::class, 'unauthorized']);

Route::get('frais/{idFrais}', [FraisController::class, 'listerFrais']);
Route::post('frais/ajout', [FraisController::class, 'ajouterFrais']);
Route::post('frais/modif', [FraisController::class, 'modifierFrais']);
Route::delete('frais/suppr', [FraisController::class, 'supprimerFrais']);
Route::get('frais/liste/{idVisiteur}', [FraisController::class, 'listerFrais']);

