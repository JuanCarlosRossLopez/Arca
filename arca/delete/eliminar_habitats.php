<?php

$id_habitat = $_GET['id_habitat'];

include('../connection/connection_arca.php');
            //DELETE FROM habitat WHERE id_habitat = ('$id_habitat')
$consulta = ("CALL p_eliminarHabitat('$id_habitat')");

$resultado=mysqli_query($conn, $consulta);

header('Location: ../habitats.php'); 

?>