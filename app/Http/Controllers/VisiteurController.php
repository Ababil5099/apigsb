<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visiteur;
use Exception;

class VisiteurController extends Controller
{
    public function initPasswords(Request $request): \Illuminate\Http\JsonResponse
    {
        try{
            $hash = bcrypt($request->json('pwd_visiteur'));
            Visiteur::query()->update(['pwd_visiteur'=>$hash]);
            return response()->json(['status_message' => 'mot de passe réinitialisés']);
        }catch (Exception $e) {
            return response()->json(['status_message' => $e->getMessage()], 500);
        }
    }
}
