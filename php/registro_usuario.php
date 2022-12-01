<?php
    include './conexion.php';

    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $rut = $_POST['Rut'];
    $mail = $_POST['Correo'];
    $usuario = $_POST['usuario'];
    $area = $_POST['Area'];
    $pass = $_POST['pass'];
    $rpass = $_POST['rpass'];

    $query = "INSERT INTO usuarios(Nombre,Apellido,Rut,Correo,usuario,Area,pass,rpass)
    VALUES('$nombre','$apellido','$rut','$mail','$usuario','$area','$pass','$rpass')";

    //verificando que no se repitan los datos en la bd
    
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo ='$mail'");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
            alert("Este Correo Ya Existe , Intenta con otro!");
            window.location = "../index.php";
        </script>';
        exit();
    }
    $verificar_rut = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Rut ='$rut' ");
    if(mysqli_num_rows($verificar_rut) > 0){
        echo '
        <script>
            alert("Este Rut Ya Existe , Intenta con otro!");
            window.location = "../index.php";
        </script>';
        exit();
    }
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario ='$usuario' ");
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
        <script>
            alert("Este Usuario Ya Existe , Intenta con otro!");
            window.location = "../index.php";
        </script>';
        exit();
    }


    $ejecutar = mysqli_query($conexion,$query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario Almacenado exitosamente");
                window.location = "../index.php"
            </script>';
    }else{
        echo '
            <script>
                alert("Intentalo nuevamente, Usuario no almacenado");
                window.location = "../index.php"
            </script>';

    }
    mysqli_close($conexion);

?>