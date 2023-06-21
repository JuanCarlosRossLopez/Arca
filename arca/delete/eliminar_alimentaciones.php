<?php

$id_alimentacion = $_GET['id_alimentacion'];

include('../connection/connection_arca.php');
            //DELETE FROM alimentacion WHERE id_alimentacion = ('$id_alimentacion')
$consulta = ("CALL p_eliminarAlimentacion('$id_alimentacion')");

$resultado=mysqli_query($conn, $consulta);

header('Location: ../alimentaciones.php'); 

?>