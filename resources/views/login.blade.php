@extends("layouts.ecocreations")
@section("titulo", "Login")
@section("content")
<head>
  <link rel="stylesheet" href="{{ asset('css/loginregis.css') }}">
</head>
@if(session('errorlogin'))
    <div id="toast-danger" class="flex delete-animation4 flex-col fixed  top-[0] left-[50%] translate-x-[-50%] z-70 items-center max-w-[30rem] min-h-[20rem] w-full border-2 border-[var(--border-eco)] p-4 mb-4 text-white bg-[var(--dark-eco)] rounded-lg shadow-sm" role="alert">
      <div class="inline-flex items-center justify-center shrink-0 w-[5rem] h-[5rem] p-2 text-red-500 bg-red-100 rounded-lg">
        <svg class="w-[5rem] h-[5rem]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
        </svg>
          <span class="sr-only">Ocurrio un problema</span>
      </div>
      <div class="ms-3  font-normal h-full text-center mt-[1rem] text-3xl">{{ session(key: 'errorlogin') }}</div>
    </div>
@endif
<div class="h-screen  !mt-[10rem] !lg:mt-[14rem] flex w-full">

  <div class="login-container h-fit w-full">
      <div class="login-form">
          <h2>Iniciar Sesión</h2>
          
          <form method="post" action="{{ route('login') }}">
                @csrf
              <div class="form-group">
                <input type="text" name="usuario" placeholder="Usuario" value="{{ old('usuario') }}">
                @error('usuario')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <input type="email" name="correo" placeholder="Correo" value="{{ old('correo') }}">
                @error('correo')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <input type="password" name="contrasena" placeholder="Contraseña" >
                @error('contrasena')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
              </div>
              <button type="submit" class="btn-ingresar">Ingresar</button>
          </form>
          <p class="register-link">¿No tienes una cuenta? <a href="{{ route("register.form") }}">Crea tu cuenta Aquí</a></p>
      </div>
      <div class="login-image">
          <img src="{{ asset('img/fondo.png')  }}" alt="ECO CREATIONS Store">
          <div class="brand-overlay">
              <div class="brand-logo">
                  <img src="logo-white.png" alt="ECO CREATIONS">
              </div>
              <div class="brand-name">
                  ECO<br>CREATIONS
              </div>
          </div>
      </div>
  </div>
</div>
@endsection