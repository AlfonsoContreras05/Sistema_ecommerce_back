<?php

    include './conexion.php';

    $mail = $_POST['Correo'];
    $pass = $_POST['pass'];
    $pass = hash('sha512', $pass);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo = '$mail' and pass = '$pass'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['Correo'] = $mail;
        header("location: ../bienvenido.php");
        exit;
    }else{
        echo '
        <script>
            alert("Usuario no existe, verifique los datos ingresados");
            window.location = "../index.php";
        </script>';
    };
    exit;
?>
<!-- i -->