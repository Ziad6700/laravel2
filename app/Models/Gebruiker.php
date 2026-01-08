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
    ];

    protected $hidden = [
        'wachtwoord',
    ];

    public function setWachtwoordAttribute($value){
        $this->attributes['wachtwoord'] = Hash::make($value);
    }

    public function checkPassword($value) : bool{
        return Hash::check($value, $this->wachtwoord);
    }
}
