<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Gebruiker extends Model
{
    protected $table = 'gebruikers';
    
    protected $fillable = [
        "gebruikersnaam",
        "wachtwoord",
        "klas",
        "nummer",
        "rol",
        'keuzendeel_naam',
    ];

    public function setWachtwoordAttribute($value){
        $this->attributes['wachtwoord'] = password_hash($value, PASSWORD_DEFAULT);
    }
    
    protected $hidden = [
        'wachtwoord',
    ];

    public function checkPassword($value) : bool{
        return Hash::check($value, $this->wachtwoord);
    }

    public function keuzendeel()
{
    return $this->belongsTo(keuzedeel::class, 'keuzendeel_naam', 'naam');
}
}
