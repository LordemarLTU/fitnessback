<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zinute extends Model
{
    use HasFactory;
    protected $table = 'zinutes';
    protected $fillable = [
        'zinutes_nr',
        'tekstas',
        'tema',
        'gavejo_vardas',
        'gavejo_pavarde',
    ];
    public $timestamps = false;
}
