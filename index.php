<?php
    session_start();

    if(isset($_SESSION['Correo'])){
        header("location: ./bienvenido.php");
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
            <form action="php/login_usuario.php" class="formulario_login" method="POST">
                <h2>Iniciar Sesión</h2>
                <input type="text" placeholder="Correo Electrónico" name="Correo" require>
                <input type="password" placeholder="Contraseña" name="pass" require>
                <button>Entrar</button>
            </form>
            <!-- Registro -->
                <form action="./php/registro_usuario.php" class="formulario_register" method="POST" onsubmit="return validar();">
                <h2>Registrarse</h2>

                <input type="text" placeholder="Nombre" name="Nombre" id="Nombre" require>
                <input type="text" placeholder="Apellido" name="Apellido" id="Apellido" require>
                <input type="text" placeholder="Rut" name="Rut" id="Rut" require>
                <input type="email" placeholder="Correo Electrónico" name="Correo" id="Correo" require>
                <input type="text" placeholder="Nombre de Usuario (apodo)" name="usuario" id="usuario" require>
                <!-- <input type="text" placeholder="Tu area?" name="Area" id="Area"require> -->
                <div class="select">
                    <select type="text" name="Area" id="Area" require>
                        <option value="">Elija su area</option>
                        <option value="Cliente">Cliente</option>
                        <option value="Garzon">Garzon</option>
                        <option value="Cocina">Cocina</option>
                        <option value="Bar">Bar</option>
                        <!-- <option value="Bodega">Bodega</option> -->
                    </select>
                </div>
                <input type="password" placeholder="Contraseña" name="pass" id="pass" require>
                <input type="password" placeholder="Repita su contraseña" name="rpass" id="rpass" require>

                <button>Registrarse</button>
            </form>
        </div>
        </div>
    </main>
  <script src="./src/funciones.js"></script>
</body>

</html>