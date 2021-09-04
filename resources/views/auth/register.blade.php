@extends('layouts.form')

@section('content')
<div class="container mt--8 pb-5">
    <!-- Table -->
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <div class="card bg-secondary shadow border-0">
          <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
              <small class="font-wight-bold">Escriba sus datos para registrarse</small>
            </div>
            <form action="{{ route('register') }} " method="POST" role="form">
                @csrf

                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    {{$errors->first()}}
                </div>
                @endif


                <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                  </div>
                  <input
                        autofocus
                        class="form-control"
                        name="name"
                        placeholder="Escribe tu nombre"
                        required
                        type="text"
                        value="{{ old('name') }}"
                  >
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input
                        autofocus
                        class="form-control"
                        name="email"
                        placeholder="Escribe tu correo"
                        required
                        type="email"
                        value="{{ old('email') }}"
                  >
                </div>
              </div>
              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input
                        autofocus
                        class="form-control"
                        name="password"
                        placeholder="Escribe una contraseña"
                        required
                        type="password"
                        value="{{ old('password') }}"
                  >
                </div>
              </div>



              <div class="form-group">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input
                        autofocus
                        class="form-control"
                        name="password_confirmation"
                        placeholder="Escribe de nuevo tu contraseña"
                        required
                        type="password"
                        value="{{ old('password') }}"
                  >
                </div>
              </div>
              
              <div class="text-center">
                <button type="submit" class="btn btn-primary mt-4">Crear mi cuenta</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
