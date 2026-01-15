<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gebruiker;
use App\Models\User;

class LoginorregisterController extends Controller
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
    public function create()
    {
        return view('registreren');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'gebruikersnaam' => 'required|string|max:255|unique:gebruikers,gebruikersnaam',
            'wachtwoord' => 'required|string|min:6',
            'klas' => 'required|string|size:3',
            'nummer' => 'required|integer|digits:7',
        ]);

        $gebruiker = new Gebruiker();
        $gebruiker->gebruikersnaam = $validated['gebruikersnaam'];
        $gebruiker->wachtwoord = $validated['wachtwoord']; // Automatically hashed by mutator
        $gebruiker->klas = $validated['klas'];
        $gebruiker->nummer = $validated['nummer'];
        $gebruiker->rol = 'student';

        $gebruiker->save();
        
        return redirect('/home')->with('success', 'Registratie succesvol! Je kunt nu inloggen.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
