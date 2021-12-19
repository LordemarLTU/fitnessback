<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registracija_i_treniruote extends Model
{
    use HasFactory;

    protected $fillable = [
        'registracijos_nr',
        'vardas',
        'pavarde',
        'el_pastas',
    ];
}
