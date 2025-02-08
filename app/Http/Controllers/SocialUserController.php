<?php

namespace App\Http\Controllers;

use App\Models\SocialUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;

class SocialUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function register(Request $request)
    {
        $emailExists = SocialUser::where('email', $request->email)->exists();

        if ($emailExists) {
            return response()->json([
                'error' => true,
                'message' => 'Questa email è già registrata.'
            ], 400);  // Status code 400 per errore
        }
        
        // Controlla se password e password_confirmation sono uguali
        if ($request->password !== $request->password_confirmation) {
            return response()->json(['error' => 'Le password non corrispondono.'], 422);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|unique:social_users',
            //confirmed crea in automatico la voce password_confirmation che viene inviata poi dal front-end
            'password' => 'required|min:8|confirmed',
        ]);

        $user = SocialUser::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'verification_token' => $request->email ? Str::random(60) : null,
        ]);

        if ($user->email) {
            Mail::to($user->email)->send(new VerifyEmail($user));
        }

        return response()->json(['message' => 'Registrazione completata con successo!', 'success' => true, 'user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SocialUser $socialUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SocialUser $socialUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SocialUser $socialUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SocialUser $socialUser)
    {
        //
    }
}
