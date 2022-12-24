<?php
    $conexion = mysqli_connect("localhost","id20016548_alfonsov1","1Y(Ps\UjU1%U~RqV","id20016548_prueba1");
    //$conexion = mysqli_connect("localhost","root","","login_register_db");



   /*if($conexion){
        echo "conectado exitosamente";
    }else{
        echo "No fue posible conectar";
    }*/
    
?>
 <!--   $host = "localhost";
    $user = "root";
    $clave = "";
    $bd = "card";
    $conexion = mysqli_connect($host,$user,$clave,$bd);
    if (mysqli_connect()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }
    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");-->
