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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu con sub-menu</title>
    <script src="https://kit.fontawesome.com/6c98cdc6a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./menu/estilos2.css" >
</head>
<body>
    <header>
        <div class="header__superior">
            <div class="logo">
                <img src="menu/logo.jpg" alt="">
            </div>
            <div class="search">
                <input type="search" placeholder="¿Que deseas buscar?">
            </div>
        </div>
        <div class="container__menu">

            <div class="menu">
                <input type="checkbox" id="check__menu">
                <label id="#label__check" for="check__menu">
                    <i class="fa-solid fa-bars icon__menu"></i>
                </label>
                
                <nav>
                    <ul>
                        <li><a href="#" id="selected"></a></li>
                        <li><a href="#">Servicios</a>
                            <ul>
                                <li><a href="#">Proximamente</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Carta</a>
                            <ul>
                                <li><a href="#">Platos</a></li>
                                <li><a href="#">Postres</a></li>
                                <li><a href="#">Cafe</a></li>
                                <li><a href="../final/menu/Carta/cartabar.html">Bar</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Nosotros</a>
                            <ul>
                                <li><a href="#">Proximamente</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contacto</a>
                            <ul>
                                <li><a href="#">Proximamente</a></li>
                            </ul>
                        </li>
                        <li><a href="php/cerrar_sesion.php">Cerrar sesion</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <article>
            <h2>Home</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut magnam exercitationem earum hic autem ratione, aliquam veniam ut facilis veritatis rem, praesentium repellendus nisi quas itaque quasi dolore sapiente ducimus?</p>
        </article>
        <article>
            <h2>Servicios</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut magnam exercitationem earum hic autem ratione, aliquam veniam ut facilis veritatis rem, praesentium repellendus nisi quas itaque quasi dolore sapiente ducimus?</p>
        </article>
        <article>
            <h2>Nosotros</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut magnam exercitationem earum hic autem ratione, aliquam veniam ut facilis veritatis rem, praesentium repellendus nisi quas itaque quasi dolore sapiente ducimus?</p>
        </article>
        <article>
            <h2>Contacto</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut magnam exercitationem earum hic autem ratione, aliquam veniam ut facilis veritatis rem, praesentium repellendus nisi quas itaque quasi dolore sapiente ducimus?</p>
        </article>
    </main>





</body>
</html>