<?php

namespace App\Http\Controllers;

use App\Models\treniruotes_programa;
use Illuminate\Http\Request;

class treniruotesProgramosController extends Controller
{
    public function index()
    {
        return treniruotes_programa::all();
    }

    public function store()
    {
        request()->validate([
            'darbuotojo_vardas' => 'require',
            'pavadinimas' => 'require',
            'dalyviu_skaicius' => 'require',
            'trukme' => 'require',
        ]);

        return treniruotes_programa::create([
            'darbuotojo_vardas' => require('darbuotojo_vardas'),
            'pavadinimas' => require('pavadinimas'),
            'dalyviu_skaicius' => require('dalyviu_skaicius'),
            'trukme' => require('trukme'),
        ]);
    }

    public function update(treniruotes_programa $post)
    {
        request()->validate([
            'darbuotojo_vardas' => 'require',
            'pavadinimas' => 'require',
            'dalyviu_skaicius' => 'require',
            'trukme' => 'require',
        ]);

        $success = $post->update([
            'darbuotojo_vardas' => require('darbuotojo_vardas'),
            'pavadinimas' => require('pavadinimas'),
            'dalyviu_skaicius' => require('dalyviu_skaicius'),
            'trukme' => require('trukme'),
        ]);
    }

    public function destroy(treniruotes_programa $post)
    {
        $success = $post->delete();

        return [
            'success' => $success
        ];
    }
}
