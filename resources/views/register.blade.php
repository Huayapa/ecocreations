@extends("layouts.ecocreations")
@section("titulo", "Registro")
@section("content")
<head>
  <link rel="stylesheet" href="{{ asset('css/loginregis.css') }}">
</head>
@if(session('successcreate'))
    <div id="messageadd" class="flex delete-animation4 flex-col fixed  top-[0] left-[50%] translate-x-[-50%] z-70 items-center max-w-[30rem] min-h-[20rem] w-full border-2 border-[var(--border-eco)] p-4 mb-4 text-white bg-[var(--dark-eco)] rounded-lg shadow-sm" role="alert">
      <div class="inline-flex items-center justify-center shrink-0 w-[5rem] h-[5rem] p-2 text-green-500 bg-green-100 rounded-lg">
        <svg class="w-[5rem] h-[5rem]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
        </svg>
          <span class="sr-only">Cuenta Creada</span>
      </div>
      <div class="ms-3  font-normal h-full text-center mt-[1rem] text-3xl">{{ session(key: 'successcreate') }}</div>
    </div>
@endif
@if(session('errorcreate'))
    <div id="toast-danger" class="flex delete-animation4 flex-col fixed  top-[0] left-[50%] translate-x-[-50%] z-70 items-center max-w-[30rem] min-h-[20rem] w-full border-2 border-[var(--border-eco)] p-4 mb-4 text-white bg-[var(--dark-eco)] rounded-lg shadow-sm" role="alert">
      <div class="inline-flex items-center justify-center shrink-0 w-[5rem] h-[5rem] p-2 text-red-500 bg-red-100 rounded-lg">
        <svg class="w-[5rem] h-[5rem]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
        </svg>
          <span class="sr-only">Ocurrio un problema</span>
      </div>
      <div class="ms-3  font-normal h-full text-center mt-[1rem] text-3xl">{{ session(key: 'errorcreate') }}</div>
    </div>
@endif

<div class="h-screen  !mt-[10rem] !lg:mt-[14rem] flex w-full">  
    <div class="login-container h-fit w-full">
        <div class="login-form registro-form">
            <h2>Regístrate aquí</h2>
            <form method="post" action="{{ route('register') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
                        @error('nombre')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="tel" name="telefono" placeholder="Teléfono"value="{{ old('telefono') }}" >
                        @error('telefono')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="email" name="correo" placeholder="Correo" value="{{ old('correo') }}">
                        @error('correo')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="dni" placeholder="DNI" value="{{ old('dni') }}">
                        @error('dni')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="password" name="contrasena" placeholder="Contraseña" value="{{ old('contrasena') }}">
                        @error('contrasena')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="calle" placeholder="Calle" value="{{ old('calle') }}">
                        @error('calle')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <select name="pais" id="">
                            @if(isset($paises)) 
                                @foreach ($paises as $pais)
                                <option value="{{ $pais->idPais }}" {{ old('pais') == $pais->idPais ? 'selected' : '' }}>
                                    {{$pais->nombre}}
                                </option>
                                @endforeach
                            @else
                                <option value="error">Pais no encontrados</option>
                            @endif
                        </select>
                        @error('pais')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" name="codigopostal" placeholder="Código postal" value="{{ old('codigopostal') }}">
                        @error('codigopostal')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" name="ciudad" placeholder="Ciudad" value="{{ old('ciudad') }}">
                        @error('ciudad')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <p class="terms">Al hacer clic en crear cuenta, aceptas nuestros Términos y Condiciones.</p>
                <button type="submit" class="btn-crear">Crear</button>
            </form>
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