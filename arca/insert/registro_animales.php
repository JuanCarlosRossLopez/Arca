<?php

$nombre_animal = $_POST['nombre_animal'];
$descripcion_animal = $_POST['descripcion_animal'];
$id_alimentacion = $_POST['id_alimentacion'];
$id_clasificacion = $_POST['id_clasificacion'];
$id_habitat = $_POST['id_habitat'];

include('../connection/connection_arca.php');
            /*INSERT INTO animal (nombre_animal, descripcion_animal, id_alimentacion_id, id_clasificacion_id, id_habitat_id)
            VALUE ('$nombre_animal', '$descripcion_animal', '$id_alimentacion', '$id_clasificacion', '$id_habitat') */
$consulta = "CALL p_registroAnimal
('$nombre_animal', '$descripcion_animal', '$id_alimentacion', '$id_clasificacion', '$id_habitat')";

$query = mysqli_query($conn, $consulta);

header('Location: ../animales.php');

?>