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
            'darbuotojo_vardas' => request('darbuotojo_vardas'),
            'pavadinimas' => request('pavadinimas'),
            'dalyviu_skaicius' => request('dalyviu_skaicius'),
            'trukme' => request('trukme'),
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
            'darbuotojo_vardas' => request('darbuotojo_vardas'),
            'pavadinimas' => request('pavadinimas'),
            'dalyviu_skaicius' => request('dalyviu_skaicius'),
            'trukme' => request('trukme'),
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
