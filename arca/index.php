<!doctype html>
<html lang="en">
<?php include('functions/contadores.php') ?>

<head>
    <title>Arca</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="assets/css/styles.css" rel="stylesheet">

</head>

<body style="background-color: silver">
    <header>
        <!-- place navbar here -->

        <?php include('partials/nav.html'); ?>
      
        
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center align-items-center" style="height: 80vh">
                <div class="col-md-3">
                <div class="card square-card">
                    <img src="assets/img/oso.gif" class="card-img-top gif-img" alt="Imagen Animal">
                    <div class="card-body">
                        <h5 class="card-title">Animales</h5>
                        <p class="card-text">Contador de animales: <?php echo $contadorAnimales ?></p>
                        <a href="animales.php" class="btn btn-outline-primary border border-4 animal">Ir a Animales</a>
                    </div>
                </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                            <img src="assets/img/serpiente.gif" class="card-img-top gif-img" alt="Imagen Clasificación">
                        <div class="card-body">
                            <h5 class="card-title">Clasificación</h5>
                            <p class="card-text">Contador de clasificaciones:
                                <?php echo $contadorClasificaciones ?>
                            </p>
                            <a href="clasificaciones.php" class="btn btn-outline-primary border border-4 animal">Ir a Clasificaciones</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="assets/img/carne.gif" class="card-img-top gif-img" alt="Imagen Alimentación">
                        <div class="card-body">
                            <h5 class="card-title">Alimentación</h5>
                            <p class="card-text">Contador de alimentaciones:
                                <?php echo $contadorAlimentaciones ?>
                            </p>
                            <a href="alimentaciones.php" class="btn btn-outline-primary border border-4 animal">Ir a Alimentaciones</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="assets/img/acuario.gif" class="card-img-top gif-img" alt="Imagen Hábitat">
                        <div class="card-body">
                            <h5 class="card-title">Hábitat</h5>
                            <p class="card-text">Contador de hábitats:
                                <?php echo $contadorHabitats ?>
                            </p>
                            <a href="habitats.php" class="btn btn-outline-primary border border-4 animal">Ir a Hábitats</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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