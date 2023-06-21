<?php 

$nombre_habitat = $_POST['nombre_habitat'];

include('../connection/connection_arca.php');
                //INSERT INTO habitat (nombre_habitat) VALUES ('$nombre_habitat')
$resultado = "CALL p_registroHabitat('$nombre_habitat')";

$query = mysqli_query($conn, $resultado);

header('Location: ../habitats.php');
?>