<?php

namespace App\Http\Controllers;

use App\Models\tvarkarastis;
use Illuminate\Http\Request;

class tvarkarastisController extends Controller
{
    public function index()
    {
        return tvarkarastis::all();
    }

    public function store()
    {
        request()->validate([
            'sale_treniravimosi' => 'required',
            'laikas' => 'required',
            'uzsiemimo_tipas' => 'required',
        ]);

        return tvarkarastis::create([
            'sale_treniravimosi' => request('sale_treniravimosi'),
            'laikas' => request('laikas'),
            'uzsiemimo_tipas' => request('uzsiemimo_tipas'),
        ]);
    }

    public function update(tvarkarastis $post)
    {
        request()->validate([
            'sale_treniravimosi' => 'required',
            'laikas' => 'required',
            'uzsiemimo_tipas' => 'required',
        ]);

        $success = $post->update([
            'sale_treniravimosi' => request('sale_treniravimosi'),
            'laikas' => request('laikas'),
            'uzsiemimo_tipas' => request('uzsiemimo_tipas'),
        ]);
    }

    public function destroy(tvarkarastis $post)
    {
        $success = $post->delete();

        return [
            'success' => $success
        ];
    }
}
