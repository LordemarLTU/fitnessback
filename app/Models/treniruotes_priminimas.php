<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class treniruotes_priminimas extends Model
{
    use HasFactory;

    protected $fillable = [
        'priminimo_nr',
        'priminimo_tekstas',
        'kliento_pastas',
    ];
}
