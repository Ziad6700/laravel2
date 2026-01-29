<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keuzedeel;
use App\Models\Gebruiker;

class KeuzedeelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session('rol') !== 'admin' && session('rol') !== 'student' ) {
            return redirect('/home')->with('fout', 'Je hebt geen toegang.');
        }
        $keuzedelen = Keuzedeel::all();
        return view('keuzedelen', compact('keuzedelen')); 
    }

    
   public function inschrijven($naam)
{
    $gebruikersnaam = session('username');
    
    $gebruiker = \App\Models\Gebruiker::where('gebruikersnaam', $gebruikersnaam)->first();

    if (!$gebruiker) {
        return redirect()->back()->with('error', 'Sessie verlopen of gebruiker niet gevonden. Log opnieuw in.');
    }

    if ($gebruiker->keuzendeel_naam !== null) {
        return redirect()->back()->with('error', 'Je bent al ingeschreven voor een keuzedeel.');
    }

    $gebruiker->keuzendeel_naam = $naam;
    
    if($gebruiker->save()) {
        return redirect()->back()->with('success', 'Je bent succesvol ingeschreven voor ' . $naam);
    } else {
        return redirect()->back()->with('error', 'Er ging iets mis bij het opslaan in de database.');
    }
}


    public function uitschrijven(Request $request)
{
    $gebruiker = Gebruiker::find(session('user_id'));

    if ($gebruiker) {
        $gebruiker->keuzendeel_naam = null; 
        $gebruiker->save();

        session(['keuzendeel_naam' => null]);

        return redirect()->back()->with('success', 'Je bent succesvol uitgeschreven voor het keuzedeel.');
    }

    return redirect()->back()->with('error', 'Er is iets misgegaan.');
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    if (session('rol') !== 'admin') {
        return redirect('/home')->with('fout', 'Geen toegang.');
    }
    return view('creëren'); 
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'naam' => 'required|unique:keuzedelen,naam|max:255',
        'description' => 'required',
        'keuzedeel_code' => 'required',
    ]);

    Keuzedeel::create([
        'naam' => $request->naam,
        'description' => $request->description,
        'keuzedeel_code' => $request->keuzedeel_code,
    ]);

    return redirect()->route('keuzedelen.index')->with('success', 'Keuzedeel succesvol aangemaakt!');
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
