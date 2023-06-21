<!doctype html>
<html lang="en">

<head>
  <title>Animales</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
  <header>

  <?php include('partials/nav.html'); ?>

</header> 
  <main>
            <!-- ========== Start formulario ========== -->
            <form action="insert/registro_animales.php" method="post">
            <div class="mb-3">
                <label class="form-label">Animales</label>
                <input name="nombre_animal" type="text" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion</label>
                <input name="descripcion_animal" type="text" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Alimentacion</label>
                <select name="id_alimentacion" class="form-select">
                    <?php
                    include('connection/connection_arca.php');
                                //SELECT * FROM alimentacion
                    $consulta = "SELECT * FROM alimentacion";
                    $resultado = mysqli_query($conn, $consulta);

                    while ($fila = mysqli_fetch_array($resultado)) {
                        ?>
                        <option value="<?php echo $fila['id_alimentacion'] ?>"><?php echo $fila['tipo_alimento'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Clasificacion</label>
                <select name="id_clasificacion" class="form-select">
                    <?php
                    include('connection/connection_arca.php');
                                //SELECT * FROM clasificacion
                    $consulta = "SELECT * FROM clasificacion";
                    $resultado = mysqli_query($conn, $consulta);

                    while ($fila = mysqli_fetch_array($resultado)) {
                        ?>
                        <option value="<?php echo $fila['id_clasificacion'] ?>"><?php echo $fila['nombre_clasificacion'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Habitat</label>
                <select name="id_habitat" class="form-select">
                    <?php
                    include('connection/connection_arca.php');
                                //SELECT * FROM habitat
                    $consulta = "SELECT * FROM habitat";
                    $resultado = mysqli_query($conn, $consulta);

                    while ($fila = mysqli_fetch_array($resultado)) {
                        ?>
                        <option value="<?php echo $fila['id_habitat'] ?>"><?php echo $fila['nombre_habitat'] ?></option>
                    <?php } ?>
                </select>
            </div>            
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
        <!-- ========== End formulario ========== -->

        <!-- ========== Start table ========== -->
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Animal</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Alimentacion</th>
                    <th scope="col">Clasificacion</th>
                    <th scope="col">Habitat</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Actualizar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('connection/connection_arca.php');
                $c = 1;
                            /*SELECT id_animal, animal.nombre_animal, descripcion_animal, clasificacion.nombre_clasificacion AS clasificacion, alimentacion.tipo_alimento AS alimento, habitat.nombre_habitat AS habitat
                            FROM animal INNER JOIN alimentacion 
                            ON animal.id_alimentacion_id = alimentacion.id_alimentacion  
                            INNER JOIN clasificacion 
                            ON animal.id_clasificacion_id = clasificacion.id_clasificacion 
                            INNER JOIN habitat
                            ON animal.id_habitat_id = habitat.id_habitat */
                $consulta = "CALL p_verAnimales()";

                $query = mysqli_query($conn, $consulta);

                while ($fila = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $c; ?>
                        </th>
                        <td>
                            <?php echo $fila['nombre_animal']; ?>
                        </td>
                        <td>
                            <?php echo $fila['descripcion_animal']; ?>
                        </td>
                        <td>
                            <?php echo $fila['clasificacion']; ?>
                        </td>
                        <td>
                            <?php echo $fila['alimento']; ?>
                        </td>
                        <td>
                            <?php echo $fila['habitat']; ?>
                        </td>
                        <td>
                            <a href="delete/eliminar_animales.php?id_animal=<?php echo $fila['id_animal'] ?>">
                                <i class="bi bi-trash text-danger" style="font-size: 1.5rem;"></i>
                            </a>
                        </td>
                        <td>
                            <a href="update/animal.php?id_animal=<?php echo $fila['id_animal'] ?>">
                                <i class="bi bi-pencil text-warning" style="font-size: 1.5rem;"></i>
                            </a>
                        </td>
                    </tr>
                    <?php $c++;
                } ?>
            </tbody>
        </table>
        <!-- ========== End table ========== -->
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/sp-2.1.2/datatables.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/sp-2.1.2/datatables.min.js"></script>
    <script src="assets/js/datatables.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>