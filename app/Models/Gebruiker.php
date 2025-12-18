<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gebruiker extends Model
{
    protected $fillable = [
        "gebruikersnaam",
        "wachtwoord",
        "klas",
        "nummer",
    ];

    public function setWachtwoordAttribute($value){
        $this->attributes['wachtwoord'] = password_hash($value, PASSWORD_DEFAULT);
    }

    public function checkPassword($value) : bool{
        //todo;
    }
}
