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
            'darbuotojo_vardas' => 'required',
            'pavadinimas' => 'required',
            'dalyviu_skaicius' => 'required',
            'trukme' => 'required',
        ]);

        return treniruotes_programa::create([
            'darbuotojo_vardas' => request('darbuotojo_vardas'),
            'pavadinimas' => request('pavadinimas'),
            'dalyviu_skaicius' => request('dalyviu_skaicius'),
            'trukme' => request('trukme'),
        ]);
    }

    public function update(treniruotes_programa $put)
    {
        request()->validate([
            'darbuotojo_vardas' => 'require',
            'pavadinimas' => 'require',
            'dalyviu_skaicius' => 'require',
            'trukme' => 'require',
        ]);

        $success = $put->update([
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
