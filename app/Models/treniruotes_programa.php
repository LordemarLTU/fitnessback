<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class treniruotes_programa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'treniruotes_programa';
    protected $fillable = [
        'id',
        'darbuotojo_vardas',
        'pavadinimas',
        'dalyviu_skaicius',
        'trukme',
    ];
}
