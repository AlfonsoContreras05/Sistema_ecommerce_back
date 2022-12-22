<!--Las peticiones Ajax son ejecutadas por el código JavaScript, el cual envía una petición a una URL y
 cuando recibe una respuesta, una función de devolución puede ser ejecutada la cual recibe como argumento
  la respuesta del servidor y realiza algo con ella-->

<?php
require_once "./conexion.php";
if (isset($_POST)) {
    if ($_POST['action'] == 'buscar') {
        $array['datos'] = array();
        $total = 0;
        for ($i=0; $i < count($_POST['data']); $i++) { 
            $id = $_POST['data'][$i]['id'];
            $query = mysqli_query($conexion, "SELECT * FROM productos WHERE id = $id");
            $result = mysqli_fetch_assoc($query);
            $data['id'] = $result['id'];
            $data['precio'] = $result['precio_rebajado'];
            $data['nombre'] = $result['nombre'];
            $total = $total + $result['precio_rebajado'];
            array_push($array['datos'], $data);
        }
        $array['total'] = $total;
        echo json_encode($array);
        die();
    }
}

?>