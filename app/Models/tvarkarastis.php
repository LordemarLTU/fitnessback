<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tvarkarastis extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_treniravimosi',
        'laikas',
        'uzsiemimo_tipas',
    ];
}
