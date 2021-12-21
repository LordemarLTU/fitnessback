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
            'tekstas' => 'required',
            'tema' => 'required',
            'gavejo_vardas' => 'required',
            'gavejo_pavarde' => 'required',
        ]);

        return zinute::create([
            'tekstas' => request('tekstas'),
            'tema' => request('tema'),
            'gavejo_vardas' => request('gavejo_vardas'),
            'gavejo_pavarde' => request('gavejo_pavarde'),
        ]);
    }

    public function update(zinute $post)
    {
        request()->validate([
            'tekstas' => 'required',
            'tema' => 'required',
            'gavejo_vardas' => 'required',
            'gavejo_pavarde' => 'required',
        ]);

        $success = $post->update([
            'tekstas' => request('tekstas'),
            'tema' => request('tema'),
            'gavejo_vardas' => request('gavejo_vardas'),
            'gavejo_pavarde' => request('gavejo_pavarde'),
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
