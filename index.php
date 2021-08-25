<?php
require "./globals/database.php";
$db = Database::getInstance();
// Obteniendo todos los datos del navbar //
$navbar = $db->getSiteNavbar('all');
// Obteniendo datos del footer //
$footer = $db->getSiteFooter('all');
$footerButtons = $db->getSiteFooterButtons('all');
// Obteniendo todos los datos del banner "características" //
$bannerCaracteristicas = $db->getSiteBannerCharacteristics('all');
// Obteniendo información del main//
$informacionMain = $db->getSiteMain('all');
// Obteniendo todas las certificaciones //
$certificaciones = $db->getCertifications('all');
// Obteniendo todas las escuelas //
$escuelas = $db->getSiteSchools('all');
// Obteniendo todos los alumnos //
$alumnos = $db->getAlumnos('all');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido/a a Escuelas IADE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="shortcut icon" href="./favicon.png" />
</head>

<body class="view">
    <!-- Modal Window -->
    <div id="modal" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; right: 0; bottom: 0; background-color: transparent; z-index: -1; transition: all .5s;"></div>

    <header id="header">
        <?php
            require './templates/navbar.php'
        ?>
    </header>

    <main id="main">
        <!-- Fondo animado -->
        <ul class="bg-bubbles">
            <li id="circulo" class="forma"></li>
            <li id="cuadrado" class="forma"></li>
            <li id="rombo" class="forma"></li>
            <li id="hexagono" class="forma"></li>
            <li id="ovalo" class="forma"></li>
            <li id="paralelogramo" class="forma"></li>
            <li id="pentagono" class="forma"></li>
            <li id="rectangulo" class="forma"></li>
            <li id="trapezoide" class="forma"></li>
            <li id="triangulo" class="forma"></li>
        </ul>
        <!-- / Fondo animado -->

        <div class="portada">
            <div class="main-parts row">
                <div class="col-6 text-right left-part">
                    <?php foreach ($informacionMain as $datosMain) { ?>
                        <h1 class="animate__animated animate__fadeIn"><?= $datosMain['main_title'] ?></h1>
                        <p class="animate__animated animate__fadeInLeft"><?= $datosMain['main_information1'] ?></p>
                        <p class="animate__animated animate__fadeInLeft"><?= $datosMain['main_information2'] ?></p>
                        <p class="animate__animated animate__fadeInLeft"><?= $datosMain['main_information3'] ?></p>
                        <a class="btn btn-danger px-5 fw-light" href="<?= $datosMain['main_button_link'] ?>"><?= $datosMain['main_button'] ?></a>
                    <?php } ?>
                </div>
                <div class="col-6 text-left right-part">
                    <img src="<?= $datosMain['imagen'] ?>" alt="imagen_principal_iade" width="900px">
                </div>
            </div>
        </div>

        <div class="slider-iconos">
            <?php foreach ($certificaciones as $certificacion)
            if ($certificacion["nombre"] != "ISO 9000" & $certificacion["nombre"] != "ISO 9002") {?>

            <div class="card">
                <div class="icono">
                    <img class="mx-5" src="./images/certificaciones/<?= $certificacion["imagen"] ?>" alt="<?= $certificacion["nombre"] ?>">
                </div>
            </div>

            <?php } ?>
        </div>
    </main>

    <section id="escuelas" class="mt-2">
        <div class="titulo">
            <h1>Conocé nuestras escuelas y estudiá lo que te gusta</h1>
        </div>
        <div class="part">
            <div class="container-escuelas">
            <?php
            foreach ($escuelas as $escuela) { ?>
                <a href="<?= $escuela["link"] ?>">
                    <div class="escuela" style="background-image: url('../images/<?= $escuela["imagen"] ?>')">
                        <p><?= $escuela["name"] ?></p>
                    </div>
                </a>
            <?php }
            ?>
            </div>
        </div>
    </section>

    <section id="informacion" class="mt-4">
        <div class="container-informacion">
            <?php
                require './templates/banner_caracteristicas.php'
            ?>
        </div>
    </section>

    <section id="institucional" class="mt-3 mb-4 pb-3">
        <div class="titulo">
            <h1>Nuestra institución, tu lugar de aprendizaje</h1>
        </div>
        <div class="text-center mb-5 pb-5">
            <iframe class="rounded shadow" width="560" height="315" src="https://www.youtube.com/embed/iFMJmHBVVYo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="card row d-flex flex-row w-100 m-0 p-0 mt-5 bg-transparent" style="border-color: transparent; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1)">
            <?php
            $paisesFiltrados = array();
            $categoriasFiltradas = array();
                
            foreach ($alumnos as $key => $alumno) { array_push($paisesFiltrados, $alumno["pais"]); }
            foreach ($escuelas as $key => $escuela) { array_push($categoriasFiltradas, $escuela["name"]); }?>

            <div class="col-sm-3 text-center d-flex flex-column my-5 align-items-center">
            <img class="rounded-circle mb-2 bg-transparent" src="./images/add_student.png" width="55px" style="border-color: transparent">
                <h1><?= sizeof($alumnos) ?></h1>
                <p class="m-0 fw-light">alumnos nuevos</p>
            </div>
            <div class="col-sm-3 text-center d-flex flex-column my-5 align-items-center">
            <img class="rounded-circle mb-2 bg-transparent" src="./images/world.png" width="55px" style="border-color: transparent">
                <h1><?= sizeof(array_unique($paisesFiltrados)) ?></h1>
                <p class="m-0 fw-light">paises que enseñamos</p>
            </div>
            <div class="col-sm-3 text-center d-flex flex-column my-5 align-items-center">
            <img class="rounded-circle mb-2 bg-transparent" src="./images/available_check.png" width="55px" style="border-color: transparent">
                <h1><?= sizeof($cursos) ?></h1>
                <p class="m-0 fw-light">cursos disponibles</p>
            </div>
            <div class="col-sm-3 text-center d-flex flex-column my-5 align-items-center">
            <img class="rounded-circle mb-2 bg-transparent" src="./images/school.png" width="55px" style="border-color: transparent">
                <h1><?= sizeof(array_unique($categoriasFiltradas)) ?></h1>
                <p class="m-0 fw-light">escuelas para que estudies</p>
            </div>
            
        </div>
        <div class="nuestra-informacion">
            <div class="left-part">
                <?php foreach ($informacionMain as $datosMain) { ?>
                    <span><?= $datosMain["mini_title"] ?></span>
                    <h1><?= $datosMain["title_description"] ?></h1>
                    <p class="mt-3"><?= $datosMain["main_information2"] ?></p>
                <?php } ?>
            </div>
            <div class="right-part">
                <p>
                    <img class="mx-4 my-0 rounded shadow" src="./images/fondo.jpg" alt="imagen" width="300px" height="200px">
                    <img class="mx-2 mt-5 rounded shadow" src="./images/fondo.jpg" alt="imagen" width="300px" height="200px">
                </p>
                <p>
                    <img class="mx-4 my-0 rounded shadow" src="./images/fondo.jpg" alt="imagen" width="300px" height="200px">
                    <img class="mx-2 mt-5 rounded shadow" src="./images/fondo.jpg" alt="imagen" width="300px" height="200px">
                </p>
            </div>
        </div>
    </section>

    <section id="slider-valoraciones">
        <?php
            require './templates/comentarios_alumnos.php'
        ?>
    </section>

    <section id="formulario-contacto">
        <div class="titulo">
            <h1>Contactanos</h1>
        </div>
        <div class="formulario">
            <form action="">
                <div class="d-flex columna">
                    <p class="d-flex flex-column">
                        <label for="">Nombre</label>
                        <input type="text">
                    </p>
                    <p class="d-flex flex-column">
                        <label for="">Apellido</label>
                        <input type="text">
                    </p>
                </div>
                <div class="d-flex columna">
                    <p class="d-flex flex-column">
                        <label for="">Ciudad</label>
                        <input type="text">
                    </p>
                    <p class="d-flex flex-column">
                        <label for="">Email</label>
                        <input type="text">
                    </p>
                </div>
                <div class="d-flex columna">
                    <p class="d-flex flex-column">
                        <label for="">Teléfono</label>
                        <input type="text">
                    </p>
                    <p class="d-flex flex-column">
                        <label for="">Asunto</label>
                        <input type="text">
                    </p>
                </div>
                <div class="d-flex flex-column columna">
                    <label for="">Mensaje</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <button class="btn btn-outline-danger text-end btn-enviar-form" type="submit">Enviar mensaje</button>
            </form>
        </div>
    </section>

    <?php
        require './templates/footer.php'
    ?>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-database.js"></script>

    <script>
        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyC61-Jm6mEjIjGACKMcWw1iAPgtdSWt54M",
            authDomain: "escuelas-iade.firebaseapp.com",
            projectId: "escuelas-iade",
            storageBucket: "escuelas-iade.appspot.com",
            messagingSenderId: "419022039248",
            appId: "1:419022039248:web:1d6841214d6678ae9396d5"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
    </script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <!-- JQuery -->
    <script src="./js/jquery-3.6.0.min.js"></script>
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Session File -->
    <script src="./js/session.js"></script>
    <!-- JS Styles -->
    <script src="./js/datos.js"></script>
    <script src="./js/index.js"></script>
</body>

</html>