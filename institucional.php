<?php
require "./globals/database.php";
$db = Database::getInstance();
// Obteniendo todos los datos del navbar //
$navbar = $db->getSiteNavbar('all');
// Obteniendo todas las escuelas //
$escuelas = $db->getSiteSchools('all');
// Obteniendo todos los cursos//
$cursos = $db->getCourses();
// Obteniendo datos del footer //
$footer = $db->getSiteFooter('all');
$footerButtons = $db->getSiteFooterButtons('all');
// Obteniendo todos los datos del main "institucional" //
$institucional = $db->getSiteInstitutional('all');
// Obteniendo todos los datos de los componentes de "institucional" //
$componentes_institucional = $db->getSiteContent('all');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conocé IADE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="shortcut icon" href="./favicon.png" />
</head>

<body>
    <!-- Modal Window -->
    <div id="modal" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; right: 0; bottom: 0; background-color: transparent; z-index: -1; transition: all .5s;"></div>

    <header id="header">
        <?php
            require './templates/navbar.php'
        ?>
    </header>

    <main id="mainInstitucional" class="main">
        <div class="imagen-fondo">
            <?php
            foreach ($institucional as $info_institucional) { ?>

            <div class="titulo">
                <h1 class="animate__animated animate__fadeInLeft animate__delay-1s"><?= utf8_encode($info_institucional["subtitle1"]) ?></h1>
                <h1 class="animate__animated animate__fadeInLeft animate__delay-1s"><?= utf8_encode($info_institucional["subtitle2"]) ?></h1>
            </div>
            <div class="subtitulo text-center">
                <h1 class="animate__animated animate__fadeIn"><?= utf8_encode($info_institucional["title"]) ?></h1>
            </div>
            <div class="bisubtitulo">
                <h1 class="animate__animated animate__fadeInRight animate__delay-1s"><?= utf8_encode($info_institucional["subtitle3"]) ?></h1>
                <h1 class="animate__animated animate__fadeInLeft animate__delay-1s"><?= utf8_encode($info_institucional["subtitle4"]) ?></h1>
            </div>

            <?php } ?>
        </div>
        <div class="informationSection">
            <div class="d-flex iconos">
                <?php
                foreach ($componentes_institucional as $key => $componente) { ?>

                <a type="button" class="btn btn-danger animate__animated animate__fadeIn animate__delay-1s" data-bs-toggle="modal" data-bs-target="#modal-historia<?= $key ?>">
                    <img class="svgimg" src="./images/<?= $componente['imagen'] ?>" alt=""><?= utf8_encode($componente['title']) ?>
                </a>

                <!-- Modal -->
                <div class="modal fade" id="modal-historia<?= $key ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?= utf8_encode($componente['subtitle']) ?></h5>
                            </div>
                            <div class="modal-body"><?= utf8_encode($componente['content']) ?></div>
                        </div>
                    </div>
                </div>
            
                <?php } ?>
            </div>
            <div class="container-texto-flotante animate__animated animate__fadeIn animate__delay-1s">
                <p class="texto-flotante text-center mt-5 fs-4 fw-light">Haz click para ver más información</p>
            </div>
        </div>
    </main>

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
    <script src="./js/index.js"></script>
</body>

</html>