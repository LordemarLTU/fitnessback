<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klientas extends Model
{
    use HasFactory;

    protected $fillable = [
        'klientas_nr',
        'zip_kodas',
        'uzsiregistruotos_treniruotes',
        'vardas',
        'pavarde',
        'slaptazodis',
        'el_pastas',
    ];
}