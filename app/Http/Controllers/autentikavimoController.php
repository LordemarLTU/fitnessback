<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class autentikavimoController extends BaseController
{
    public function index(){
        return view('auth.login');
    }

    public function registracija(){
        return view('auth.registracija');
    }

    public function postprisijungimas(Request $request){
        $request->validate([
            'el_pastas' => 'required',
            'slaptazodis' => 'required'
        ]);

        $credentials = $request->only('el_pastas', 'slaptazodis');
        if(Auth::attempt($credentials)){
            return redirect()->intended('pagrindinis')->withSuccess('Sėkmingai prisijunėte');
        } 
        return redirect("prisijungti")->withSuccess('Blogai suvestas slaptažodis arba paštas');
    }

    public function postRegistracija(Request $request){
        $request->validate([
            'vardas' => 'required',
            'el_pastas' => 'required|email|unique:users',
            'slaptazodis' => 'required|min:4',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("pagrindinis")->withSuccess('Sėkmingai užsiregistravote');
    }

    public function pagrindinis(){
        if(Auth::check()){
            return view('pagrindinis');
        }

        return redirect("prisijungti")->withSuccess('Reikia prisijungti');
    }

    public function create(array $data){
        return User::create([
            'vardas' => $data['vardas'],
            'e_pastas' => $data['el_pastas'],
            'slaptazodis' => Hash::make($data['password']),
        ]);
    }

    public function atsijungti(){
        Session::flush();
        Auth::logout();

        return Redirect('pagrindinis')->withSuccess('Sėkmingai atsijungėte');
    }
    public function showLogin()
    {

        return view('login');
    }

    public function doLogout(){
        Auth::logout();
        return Redirect::to('login');
    }

    public function doLogin(){
        $rules = array(
            'el_pastas'=>'required|el_pastas',
            'slaptazodis' => 'required|slaptazodis'
        );
        $validator = Validator::make(input::all(), $rules);
        if($validator->fails()){
            return Redirect::to('login')->withErrors($validator)
            -> withInput(Input::except('password'));
        } else {
            $userdata = array(
                'el_pastas' => Input::get('el_pastas'),
                'slaptazodis' => Input::get('slaptazodis')
            );
        };
        if(Auth::attempt($userdata)){}
        else {
            return Redirect::to('Login');
        }
    }
}