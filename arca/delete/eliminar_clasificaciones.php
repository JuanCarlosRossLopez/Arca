<?php
//print_r($_GET);

$id_clasificacion = $_GET['id_clasificacion'];

include('../connection/connection_arca.php');
            //DELETE FROM clasificacion WHERE id_clasificacion = ('$id_clasificacion')
$consulta = ("CALL p_eliminarClasificacion('$id_clasificacion')");

$resultado=mysqli_query($conn, $consulta);

header('Location: ../clasificaciones.php'); 

?>