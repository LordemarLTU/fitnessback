<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class naudotojas extends Model
{
    use HasFactory;

    protected $fillable = [
        'kliento_nr',
        'vardas',
        'pavarde', 
        'el_pastas',
        'slaptazodis',
    ];
}
