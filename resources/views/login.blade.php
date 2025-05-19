@extends("layouts.ecocreations")
@section("titulo", "Login")
@section("content")
<head>
  <link rel="stylesheet" href="{{ asset('css/loginregis.css') }}">
</head>
<div class="h-screen  !mt-[10rem] !lg:mt-[14rem] flex w-full">

  <div class="login-container h-fit w-full">
      <div class="login-form">
          <h2>Iniciar Sesión</h2>
          
          <?php if(isset($error)): ?>
              <div class="error-message"><?php echo $error; ?></div>
          <?php endif; ?>
          
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <div class="form-group">
                  <input type="text" name="usuario" placeholder="Usuario" required>
              </div>
              <div class="form-group">
                  <input type="email" name="correo" placeholder="Correo" required>
              </div>
              <div class="form-group">
                  <input type="password" name="contrasena" placeholder="Contraseña" required>
              </div>
              <button type="submit" class="btn-ingresar">Ingresar</button>
          </form>
          <p class="register-link">¿No tienes una cuenta? <a href="{{ route("registro") }}">Crea tu cuenta Aquí</a></p>
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