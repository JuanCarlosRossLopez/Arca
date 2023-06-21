<?php

//print_r($_GET);

$id_animal = $_GET['id_animal'];

include('../connection/connection_arca.php');
            //DELETE FROM animal WHERE id_animal = ('$id_animal')
$consulta = ("CALL p_eliminarAnimales('$id_animal')");

$query = mysqli_query($conn, $consulta);

header('Location: ../animales.php'); 

?>