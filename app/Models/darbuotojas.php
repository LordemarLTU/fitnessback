<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class darbuotojas extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'asmens_kodas',
        'vardas',
        'pavarde',
        'slaptazodis',
        'el_pastas',
        'darbo_etatas',
    ];
    public $timestamps = false;
}
