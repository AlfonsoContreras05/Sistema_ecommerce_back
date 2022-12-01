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