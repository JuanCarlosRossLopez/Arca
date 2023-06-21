<?php
    //print_r($_POST);

    $nombre_habitat = $_POST['nombre_habitat'];
    $id_habitat = $_POST['id_habitat'];

    include('../connection/connection_arca.php');
                /*UPDATE habitat 
                SET nombre_habitat = ('$nombre_habitat')
                WHERE id_habitat = ('$id_habitat') */
    $consulta = "CALL p_actualizarHabitat('$nombre_habitat', '$id_habitat')";

    $query = mysqli_query($conn,$consulta);

    header('Location: ../habitats.php');

?>