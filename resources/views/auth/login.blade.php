@extends('layouts.form')

@section('h1')
    Inicie Sesion
@endsection


@section('content')

<div class="container mt--8 pb-5">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-7">
        <div class="card bg-secondary shadow border-0">
          <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
              <small class="font-weight-bold">Ingresa los datos de tu cuenta</small>
            </div>
            <form role="form" action="{{route('login')}}" method="POST">
            @csrf

                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first()}}
                    </div>
                @endif

              <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input
                        autofocus
                        class="form-control"
                        name="email"
                        placeholder="Ingresa tu e-mail"
                        required
                        type="email"
                        value="{{old('email')}}"
                  ><!--Input Email-->
                  
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input
                        class="form-control"
                        name="password"
                        required
                        placeholder="Password"
                        type="password"
                  ><!--Input password-->
                 
                </div>
              </div>
              <div class="custom-control custom-control-alternative custom-checkbox">
                <input name="remember" class="custom-control-input" id="remember" type="checkbox">
                <label class="custom-control-label" for="remember">
                  <span class="text-muted">Recordar Sesión</span>
                </label>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary my-4">Ingresar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-6">
            <a href="{{route('password.request')}}" class="text-light"><small>No recuerdo mi contraseña</small></a>
          </div>
          <div class="col-6 text-right">
            <a href="{{route('register')}}" class="text-light"><small>No tengo una cuenta</small></a>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--Separacion-->

@endsection


