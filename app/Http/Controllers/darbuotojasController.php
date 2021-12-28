<?php

namespace App\Http\Controllers;

use App\Models\darbuotojas;
use Illuminate\Http\Request;

class darbuotojasController extends Controller
{
    public function index()
    {
        return darbuotojas::all();
    }

    public function store()
    {
        request()->validate([
            'asmens_kodas' => 'required',
            'vardas' => 'required',
            'pavarde' => 'required',
            'slaptazodis' => 'required',
            'el_pastas' => 'required',
            'darbo_etatas' => 'required',
        ]);

        return darbuotojas::create([
            'asmens_kodas' => request('asmens_kodas'),
            'vardas' => request('vardas'),
            'pavarde' => request('pavarde'),
            'slaptazodis' => request('slaptazodis'),
            'el_pastas' => request('el_pastas'),
            'darbo_etatas' => request('darbo_etatas'),
        ]);
    }

    public function update(darbuotojas $id)
    {
        request()->validate([
            'asmens_kodas' => 'required',
            'vardas' => 'required',
            'pavarde' => 'required',
            'slaptazodis' => 'required',
            'el_pastas' => 'required',
            'darbo_etatas' => 'required',
        ]);

        $success = $id->update([
            'asmens_kodas' => request('asmens_kodas'),
            'vardas' => request('vardas'),
            'pavarde' => request('pavarde'),
            'slaptazodis' => request('slaptazodis'),
            'el_pastas' => request('el_pastas'),
            'darbo_etatas' => request('darbo_etatas'),
        ]);
        return [
            'success' => $id,
            'success' => $success,
        ];
    }

    public function destroy(darbuotojas $delete)
    {
        $success = $delete->delete();


        return [
            'success' => $delete,
            'success' => $success,
        ];
    }
    public function getWithID(darbuotojas $message)
    {
        return darbuotojas::query('id', $message)->firstOrFail();
    }
}
