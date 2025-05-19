@extends("layouts.ecocreations")
@section("titulo", "Registro")
@section("content")
<head>
  <link rel="stylesheet" href="{{ asset('css/loginregis.css') }}">
</head>
<div class="h-screen  !mt-[10rem] !lg:mt-[14rem] flex w-full">
    <div class="login-container h-fit w-full">
                <div class="login-form registro-form">
                    <h2>Regístrate aquí</h2>
                    
                    <?php if(isset($error)): ?>
                        <div class="error-message"><?php echo $error; ?></div>
                    <?php endif; ?>
                    
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" name="nombre" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" name="telefono" placeholder="Teléfono" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input type="email" name="correo" placeholder="Correo" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="dni" placeholder="DNI" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input type="password" name="contrasena" placeholder="Contraseña" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="calle" placeholder="Calle" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" name="codigo_postal" placeholder="Código postal" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="ciudad" placeholder="Ciudad" required>
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