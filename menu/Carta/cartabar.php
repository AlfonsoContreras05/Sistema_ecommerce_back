<?php

    session_start();
    if(isset($_SESSION['Correo'])){
        echo '
            <script>
                alert("Debes iniciar session!");
                window.location = "index.php";
            </script>
        ';
        //header("location: index.php");//
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta</title>
    <link rel="stylesheet" href="estiloscarta.css">
    <script src="funcionescarta.js"></script>
</head>

<body>
    <div class="pagina-nav">
        <h1>Selecciona tus productos</h1>
        <button id="checkout" class="button-checkout" onclick="pay()">Pagar</button>
    </div>
    <div class="page-content-coctel">
        <div class="contenedor-productos">
            <h3>Alexander</h3>
            <img src="img_bar/alexander.jpg" alt="">
            <h1>5000</h1>
            <button class="button-agregar" onclick="add('contenedor-productos-1',50)">Agregar</button>
        </div>
        <div class="contenedor-productos">
            <h3>Cosmopolitan</h3>
            <img src="img_bar/cosmopolitan.jpg" alt="">
            <h1>7500</h1>
            <button class="button-agregar" onclick="add('contenedor-productos-1',50)">Agregar</button>
        </div>
        <div class="contenedor-productos">
            <h3>Cuba libre</h3>
            <img src="img_bar/cuba_libre.jpg" alt="">
            <h1>6000</h1>
            <button class="button-agregar" onclick="add('contenedor-productos-1',50)">Agregar</button>
        </div>
        <div class="contenedor-productos">
            <h3>Blue Margarita</h3>
            <img src="img_bar/margarita_blue.jpg" alt="">
            <h1>4500</h1>
            <button class="button-agregar" onclick="add('contenedor-productos-1',50)">Agregar</button>
        </div>
        <div class="contenedor-productos">
            <h3>Mojito</h3>
            <img src="img_bar/mojito.jpg" alt="">
            <h1>5500</h1>
            <button class="button-agregar" onclick="add('contenedor-productos-1',50)">Agregar</button>
        </div>
        <div class="contenedor-productos">
            <h3>Pantera Rosa</h3>
            <img src="img_bar/pantera_rosa.jpg" alt="">
            <h1>6500</h1>
            <button class="button-agregar" onclick="add('contenedor-productos-1',50)">Agregar</button>
        </div>
    </div>
    <div class="page-content-bebida">
        <div class="contenedor-productos">
            <h3>CocaCola</h3>
            <img src="img_bar/coca_lata.jpg" alt="">
            <h1>2000</h1>
            <button class="button-agregar" onclick="add('contenedor-productos-1',50)">Agregar</button>
        </div>
        <div class="contenedor-productos">
            <h3>Fanta</h3>
            <img src="img_bar/fanta_lata.jpg" alt="">
            <h1>2000</h1>
            <button class="button-agregar" onclick="add('contenedor-productos-1',50)">Agregar</button>
        </div>
        <div class="contenedor-productos">
            <h3>Sprite</h3>
            <img src="img_bar/sprite_lata.jpg" alt="">
            <h1>2000</h1>
            <button class="button-agregar" onclick="add('contenedor-productos-1',50)">Agregar</button>
        </div>
    </div>
</body>

</html>