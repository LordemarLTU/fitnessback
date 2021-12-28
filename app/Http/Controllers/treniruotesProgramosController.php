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

    public function update(treniruotes_programa $id)
    {
        request()->validate([
            'darbuotojo_vardas' => 'required',
            'pavadinimas' => 'required',
            'dalyviu_skaicius' => 'required',
            'trukme' => 'required',
        ]);

        $success = $id->update([
            'darbuotojo_vardas' => request('darbuotojo_vardas'),
            'pavadinimas' => request('pavadinimas'),
            'dalyviu_skaicius' => request('dalyviu_skaicius'),
            'trukme' => request('trukme'),
        ]);
        return [
            'success' => $id,
            'success' => $success,
        ];
    }

    public function destroy(treniruotes_programa $delete)
    {
        $success = $delete->delete();


        return [
            'success' => $delete,
            'success' => $success,
        ];
    }
    public function getWithID(treniruotes_programa $message)
    {
        // return messages::where('id', $message)->firstOrFail();

        return treniruotes_programa::query('id', $message)->firstOrFail();
    }
}
