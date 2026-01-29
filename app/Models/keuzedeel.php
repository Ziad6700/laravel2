<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keuzedeel extends Model
{
    protected $table = 'keuzedelen';

    protected $fillable = [
        "naam",
        "description",
        "keuzedeel_code",
    ];
}
