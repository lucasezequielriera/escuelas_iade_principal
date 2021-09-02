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
// Obteniendo todas las certificaciones //
$certificaciones = $db->getCertifications('all');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificaciones IADE</title>
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

    <main id="main" class="main">
        <h1 class="title-certificaciones animate__animated animate__fadeIn">Nuestras certificaciones</h1>
        <?php foreach ($certificaciones as $certificacion) { ?>

            <div class="certificaciones-explicadas">
                <div class="left-part animate__animated animate__fadeInLeft">
                    <p><?= utf8_encode($certificacion["descripcion"]) ?></p>
                </div>
                <div class="right-part animate__animated animate__fadeInRight">
                    <img src="./images/certificaciones/<?= $certificacion["imagen"] ?>" alt="<?= utf8_encode($certificacion["nombre"]) ?>" width="<?php if($certificacion["nombre"] === "ISO 9000" || $certificacion["nombre"] === "ISO 9002") {echo 100;} else {echo 200;} ?>">
                </div>
            </div>
            <hr class="separacion-certificaciones">

        <?php } ?>
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