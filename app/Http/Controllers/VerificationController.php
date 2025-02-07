<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialUser;

class VerificationController extends Controller
{
    public function verifyEmail($token)
    {
        // Trova l'utente con il token di verifica
        $user = SocialUser::where('verification_token', $token)->first();
        //se non c'è l'utente restituisci questo messaggio
        if (!$user) {
            return response()->json(['error' => 'Token non valido o già usato.'], 400);
        }

        // Segna l'email come verificata
        $user->email_verified_at = now();
        $user->verification_token = null;
        $user->save();

        return response()->json(['message' => 'Email verificata con successo! Ora puoi accedere.']);
    }
}

