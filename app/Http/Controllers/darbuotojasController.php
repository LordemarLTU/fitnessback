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

    public function update(darbuotojas $put)
    {
        request()->validate([
            'asmens_kodas' => 'require',
            'vardas' => 'require',
            'pavarde' => 'require',
            'slaptazodis' => 'require',
            'el_pastas' => 'require',
            'darbo_etatas' => 'require',
        ]);

        $success = $put->update([
            'asmens_kodas' => request('asmens_kodas'),
            'vardas' => request('vardas'),
            'pavarde' => request('pavarde'),
            'slaptazodis' => request('slaptazodis'),
            'el_pastas' => request('el_pastas'),
            'darbo_etatas' => request('darbo_etatas'),
        ]);
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
