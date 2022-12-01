<?php
    session_start();

    if(isset($_SESSION['email'])){
        header("location: bienvenido.php");
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./src/estilos.css">

    <title>Login y Registro</title>
</head>
<body>
    <main>
        <div class="contenedor_todo">
            <div class="caja_trasera">
                <div class="caja_trasera-login">
                    <h3>¿Ya tienes cuenta?</h3>
                    <p>Inicia sesión para entrar a la página</p>
                    <button id="btn_iniciar-sesion">Iniciar sesión</button>
                </div>
                <div class="caja_trasera-register">
                    <h3>¿Aún no tienes cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn_registarse">Registrarse</button>
                </div>
            </div>
        <!-- Formulario login y registro -->
        <div class="contenedor_login-register">
            <!-- Login -->
            <form action="" class="formulario_login">
                <h2>Iniciar Sesión</h2>
                <input type="text" placeholder="Correo Electrónico">
                <input type="password" placeholder="Contraseña">
                <button>Entrar</button>
            </form>
            <!-- Registro -->
                <form action="./php/registro_usuario.php" class="formulario_register" method="POST">
                <h2>Registrarse</h2>

                <input type="text" placeholder="Nombre" name="Nombre">
                <input type="text" placeholder="Apellido" name="Apellido">
                <input type="text" placeholder="Rut" name="Rut">
                <input type="text" placeholder="Correo Electrónico" name="Correo">
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="text" placeholder="Tu area?" name="Area">
                <input type="password" placeholder="Contraseña" name="pass">
                <input type="password" placeholder="Repita su contraseña" name="rpass">

                <button>Registrarse</button>
            </form>
        </div>
        </div>
    </main>
  <script src="./src/funciones.js"></script>
</body>

</html>