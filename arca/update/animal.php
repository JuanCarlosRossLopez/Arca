<?php
//print_r($_GET);
$id_animal = $_GET['id_animal'];
include('../connection/connection_arca.php');
            /*SELECT id_animal, animal.nombre_animal, descripcion_animal, id_clasificacion_id, 
            clasificacion.nombre_clasificacion, id_alimentacion_id, alimentacion.tipo_alimento, id_habitat_id, habitat.nombre_habitat
            FROM animal
            INNER JOIN clasificacion ON animal.id_clasificacion_id = clasificacion.id_clasificacion 
            INNER JOIN alimentacion ON animal.id_alimentacion_id = alimentacion.id_alimentacion
            INNER JOIN habitat ON animal.id_habitat_id = habitat.id_habitat
            WHERE id_animal = ('$id_animal') */
$consulta1 = "CALL p_verAnimal('$id_animal')";
$resultado1 = mysqli_query($conn, $consulta1);
$fila2 = mysqli_fetch_array($resultado1);

$conn -> close();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Editar animal</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <!-- ========== Start FORM ========== -->
    <form action="actualizar_animal.php" method="post">
        <div class="mb-3">
            <label for="input_animal" class="form-label">Nombre animal</label>
            <input name="nombre_animal" value="<?php echo $fila2['nombre_animal']?>" type="text" class="form-control" id="input_animal" >
        </div>
        
        <div class="mb-3">
            <label for="input_animal" class="form-label">Descripción</label>
            <input name="descripcion_animal" value="<?php echo $fila2['descripcion_animal']?>" type="text" class="form-control" id="input_animal" >
        </div>
        <div class="mb-3">
        <label class="form-label">Clasificacion</label>
        <select name="id_clasificacion" class="form-select" >
        <option value="<?php echo $fila2['id_clasificacion_id']; ?>" selected><?php echo $fila2['nombre_clasificacion']; ?></option>
                    <?php
                    include('../connection/connection_arca.php');
                                //SELECT * FROM clasificacion
                    $consulta = "CALL p_seleccionarClasificacion()";
                    $resultado = mysqli_query($conn, $consulta);
                    while ($fila = mysqli_fetch_array($resultado)) {
                        ?>
                        <option value="<?php echo $fila['id_clasificacion']; ?>"><?php echo $fila['nombre_clasificacion']; ?></option>
                    <?php } ?>
        </select>
        <input name="id_animal" value="<?php echo $id_animal;?>" type="hidden">
        </div>
        <div class="mb-3">
        <label class="form-label">Alimentacion</label>
        <select name="id_alimentacion" class="form-select" >
        <option value="<?php echo $fila2['id_alimentacion_id']; ?>" selected><?php echo $fila2['tipo_alimento']; ?></option>
                    <?php
                    include('../connection/connection_arca.php');
                                //SELECT * FROM alimentacion
                    $consulta = "CALL p_seleccionarAlimentacion()";
                    $resultado = mysqli_query($conn, $consulta);
                    while ($fila = mysqli_fetch_array($resultado)) {
                        ?>
                        <option value="<?php echo $fila['id_alimentacion']; ?>"><?php echo $fila['tipo_alimento']; ?></option>
                    <?php } ?>
        </select>
        <input name="id_animal" value="<?php echo $id_animal;?>" type="hidden">
        </div>
        <div class="mb-3">
        <label class="form-label">Habitat</label>
        <select name="id_habitat" class="form-select" >
        <option value="<?php echo $fila2['id_habitat_id']; ?>" selected><?php echo $fila2['nombre_habitat']; ?></option>
                    <?php
                    include('../connection/connection_arca.php');
                                //SELECT * FROM habitat
                    $consulta = "CALL p_seleccionarHabitat()";
                    $resultado = mysqli_query($conn, $consulta);
                    while ($fila = mysqli_fetch_array($resultado)) {
                        ?>
                        <option value="<?php echo $fila['id_habitat']; ?>"><?php echo $fila['nombre_habitat']; ?></option>
                    <?php } ?>
        </select>
        <input name="id_animal" value="<?php echo $id_animal;?>" type="hidden">
        </div>
        
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
    <!-- ========== End FORM ========== -->
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>