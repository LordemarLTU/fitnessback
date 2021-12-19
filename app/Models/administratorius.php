<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class administratorius extends Model
{
    use HasFactory;

    protected $fillable = [
        'administratoriaus_nr',
        'vardas',
        'pavarde',
        'slaptazodis',
    ];
}
