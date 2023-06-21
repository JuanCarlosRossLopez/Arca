<?php 

$tipo_alimento = $_POST['tipo_alimento'];

include('../connection/connection_arca.php');
            //INSERT INTO alimentacion (tipo_alimento) VALUES ('$tipo_alimento')
$resultado = "CALL p_registroAlimentacion('$tipo_alimento')";

$query = mysqli_query($conn, $resultado);

header('Location: ../alimentaciones.php');
?>