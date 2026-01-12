<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gebruiker;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Show the login form.
     */
    public function show()
    {
        return view('login');
    }

    /**
     * Handle login request.
     */
    public function login(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Zoek gebruiker op gebruikersnaam
        $gebruiker = Gebruiker::where('gebruikersnaam', $validated['username'])->first();

        // Controleer of gebruiker bestaat en wachtwoord klopt
        if ($gebruiker && Hash::check($validated['password'], $gebruiker->wachtwoord)) {
            // Sla gebruiker op in session
            session([
                'user_id' => $gebruiker->id,
                'username' => $gebruiker->gebruikersnaam,
                'klas' => $gebruiker->klas,
                'nummer' => $gebruiker->nummer,
                'logged_in' => true
            ]);

            return redirect('/home')->with('success', 'Login succesvol! Welkom ' . $gebruiker->gebruikersnaam);
        }

        // Login mislukt
        return back()->withErrors([
            'username' => 'De ingevoerde gegevens zijn onjuist.',
        ])->withInput($request->only('username'));
    }

    /**
     * Handle logout request.
     */
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/home')->with('success', 'Je bent uitgelogd.');
    }
}

