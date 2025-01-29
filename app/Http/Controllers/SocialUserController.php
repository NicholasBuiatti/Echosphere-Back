<?php

namespace App\Http\Controllers;

use App\Models\SocialUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class SocialUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'nullable|email|unique:social_users',
            'number_phone' => 'nullable|string|max:20|unique:social_users',
            //confirmed crea in automatico la voce password_confirmation che viene inviata poi dal front-end
            'password' => 'required|min:8|confirmed',
        ]);

        // Controlla se password e password_confirmation sono uguali
        if ($request->password !== $request->password_confirmation) {
            return response()->json(['error' => 'Le password non corrispondono.'], 422);
        }

        // Controlla che almeno uno tra email o number_phone sia presente
        if (!$request->filled('email') && !$request->filled('number_phone')) {
            return response()->json(['error' => 'Devi fornire almeno un indirizzo email o un numero di telefono.'], 422);
        }

        $user = SocialUser::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'number_phone' => $request->number_phone,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'Registration succesful', 'user' => $user]);
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
