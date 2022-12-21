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
    
</body>

</html>