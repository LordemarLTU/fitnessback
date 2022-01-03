<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use App\Http\Controllers\Validator;

class autentikavimoController extends Controller
{

    public function registracija() {
        request()->validate([
            'vardas' => 'required|string',
            'pavarde' => 'required|string',
            'el_pastas' => 'required|email',
            'slaptazodis'=> 'required|min:4',
            'zip_kodas' => 'required',
        ]);

        return klientas::create([
            'vardas' => request('vardas'),
            'pavarde' => request('pavarde'),
            'el_pastas' => request('el_pastas'),
            'slaptazodis'=> request('slaptazodis'),
            'zip_kodas' => request('zip_kodas'),
            'uzsiregistruotos_treniruotes' => "",
        ]);
    }

    public function prisijungimas(Request $request) {
        $fields = $request->validate([
            'el_pastas' => 'required|string',
            'slaptazodis' => 'required|string'
        ]);

        $user = klientas::where('el_pastas', $fields('el_pastas'));

        echo($user);
    }

    public function logout(Request $request) {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
}