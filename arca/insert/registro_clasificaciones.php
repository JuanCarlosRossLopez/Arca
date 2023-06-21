<?php 

$nombre_clasificacion = $_POST['nombre_clasificacion'];

include('../connection/connection_arca.php');
                //INSERT INTO clasificacion (nombre_clasificacion) VALUES ('$nombre_clasificacion')
$resultado = "CALL p_registroClasificacion('$nombre_clasificacion')";

$query = mysqli_query($conn, $resultado);

header('Location: ../clasificaciones.php');
?>