<!doctype html>
<html lang="en">

<head>
  <title>Alimentacion</title>
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

  <table class="table table-dark table-striped-columns">
  ...   <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Operacion</th>
                    <th scope="col">id_animal</th>
                    <th scope="col">Animal</th>
                    <th scope="col">Alimentación</th>
                    <th scope="col">Clasificación</th>
                    <th scope="col">Habitat</th>
                    <th scope="col">Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $c = 1;
                include('connection/connection_arca.php');
                            //SELECT * FROM animal_log
                $consulta = "CALL p_verAnimales_log";
                $resultado = mysqli_query($conn, $consulta);

                while ($fila = mysqli_fetch_array($resultado)) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $c; ?>
                        </th>
                        <td>
                            <?php echo $fila['operacion'] ?>
                        </td>
                        <td>
                            <?php echo $fila['id_animal'] ?>
                        </td>
                        <td>
                            <?php echo $fila['nombre_animal'] ?>
                        </td>
                        <td>
                            <?php echo $fila['id_alimentacion_id'] ?>
                        </td>
                        <td>
                            <?php echo $fila['id_clasificacion_id'] ?>
                        </td>
                        <td>
                            <?php echo $fila['id_habitat_id'] ?>
                        </td>
                        <td>
                            <?php echo $fila['fecha'] ?>
                        </td>
                    </tr>
                <?php $c++;
            } ?>
            </tbody>
    </table>
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