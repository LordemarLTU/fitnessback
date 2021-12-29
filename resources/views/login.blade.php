@extends('layout')
  
  @section('content')
  <main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
    
                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="el_pastas" class="col-md-4 col-form-label text-md-right">El_Paštas</label>
                                <div class="col-md-6">
                                    <input type="text" id="el_pastas" class="form-control" name="el_pastas" required autofocus>
                                    @if ($errors->has('el_pastas'))
                                        <span class="text-danger">{{ $errors->first('el_pastas') }}</span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="slaptazodis" class="col-md-4 col-form-label text-md-right">Slaptazodis</label>
                                <div class="col-md-6">
                                    <input type="password" id="slaptazodis" class="form-control" name="slaptazodis" required>
                                    @if ($errors->has('slaptazodis'))
                                        <span class="text-danger">{{ $errors->first('slaptazodis') }}</span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Prisiminti mane
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Prisijungti
                                </button>
                            </div>
                        </form>
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
  </main>
  @endsection