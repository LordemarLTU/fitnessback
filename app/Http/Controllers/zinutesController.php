<?php

namespace App\Http\Controllers;

use App\Models\zinute;
use Illuminate\Http\Request;

class zinutesController extends Controller
{
    public function index()
    {
        return zinute::all();
    }

    public function store()
    {
        request()->validate([
            'darbuotojo_vardas' => 'require',
            'pavadinimas' => 'require',
            'dalyviu_skaicius' => 'require',
            'trukme' => 'require',
        ]);

        return zinute::create([
            'darbuotojo_vardas' => require('darbuotojo_vardas'),
            'pavadinimas' => require('pavadinimas'),
            'dalyviu_skaicius' => require('dalyviu_skaicius'),
            'trukme' => require('trukme'),
        ]);
    }

    public function update(zinute $post)
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

    public function destroy(zinute $post)
    {
        $success = $post->delete();

        return [
            'success' => $success
        ];
    }
}
