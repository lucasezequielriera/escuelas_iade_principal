<?php
require "./globals/database.php";
require "./data.php";
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
        <?php foreach ($informacionMain as $datosMain) { ?>

            <div class="portada">
                <div class="main-parts row">
                    <div class="col-6 text-right left-part">
                        <h1 class="animate__animated animate__fadeIn"><?= $datosMain['main_title'] ?></h1>
                        <p class="animate__animated animate__fadeInLeft"><?= $datosMain['main_information1'] ?></p>
                        <p class="animate__animated animate__fadeInLeft"><?= $datosMain['main_information2'] ?></p>
                        <p class="animate__animated animate__fadeInLeft"><?= $datosMain['main_information3'] ?></p>
                        <input class="btn btn-danger px-5 fw-light" type="button" value="<?= $datosMain['main_button1'] ?>">
                    </div>
                    <div class="col-6 text-left right-part">
                        <img src="<?= $datosMain['image'] ?>" alt="imagen_principal_iade" width="900px">
                    </div>
                </div>
            </div>

        <?php } ?>

        <div class="slider-iconos">
            <!-- Temporal hasta agregar logos e iconos verdaderos -->
            <div class="card">
                <div class="icono">
                    <img src="./images/brand.png" alt="diploma">
                </div>
            </div>
            <div class="card">
                <div class="icono">
                    <img src="./images/brand.png" alt="diploma">
                </div>
            </div>
            <div class="card">
                <div class="icono">
                    <img src="./images/brand.png" alt="diploma">
                </div>
            </div>
            <div class="card">
                <div class="icono">
                    <img src="./images/brand.png" alt="diploma">
                </div>
            </div>
            <div class="card">
                <div class="icono">
                    <img src="./images/brand.png" alt="diploma">
                </div>
            </div>
            <div class="card">
                <div class="icono">
                    <img src="./images/brand.png" alt="diploma">
                </div>
            </div>
            <div class="card">
                <div class="icono">
                    <img src="./images/brand.png" alt="diploma">
                </div>
            </div>
            <div class="card">
                <div class="icono">
                    <img src="./images/brand.png" alt="diploma">
                </div>
            </div>
            <div class="card">
                <div class="icono">
                    <img src="./images/brand.png" alt="diploma">
                </div>
            </div>
            <div class="card">
                <div class="icono">
                    <img src="./images/brand.png" alt="diploma">
                </div>
            </div>
            <div class="card">
                <div class="icono">
                    <img src="./images/brand.png" alt="diploma">
                </div>
            </div>
            <div class="card">
                <div class="icono">
                    <img src="./images/brand.png" alt="diploma">
                </div>
            </div>
            <div class="card">
                <div class="icono">
                    <img src="./images/brand.png" alt="diploma">
                </div>
            </div>
            <div class="card">
                <div class="icono">
                    <img src="./images/brand.png" alt="diploma">
                </div>
            </div>
            <div class="card">
                <div class="icono">
                    <img src="./images/brand.png" alt="diploma">
                </div>
            </div>
            <div class="card">
                <div class="icono">
                    <img src="./images/brand.png" alt="diploma">
                </div>
            </div>
            <!-- / Temporal -->
        </div>
    </main>

    <section id="escuelas">
        <div class="titulo">
            <h1>Conocé nuestras escuelas y estudiá lo que te gusta</h1>
        </div>
        <div class="part">
            <div class="container-escuelas">
            <?php
            foreach ($escuelas as $escuela) { ?>
                <a href="<?= $escuela["link"] ?>">
                    <div class="escuela">
                        <p><?= $escuela["name"] ?></p>
                    </div>
                </a>
            <?php }
            ?>
            </div>
        </div>
    </section>

    <section id="informacion">
        <div class="container-informacion">
            <!-- <div class="card">
                <div class="icono">
                    <img src="" alt="imagen_icono">
                </div>
                <div class="informacion">
                    <h5>dfds</h5>
                </div>
            </div> -->
        </div>
    </section>

    <section id="institucional">
        <div class="titulo">
            <h1>Nuestra institución, tu lugar de aprendizaje</h1>
        </div>
        <div class="nuestra-informacion">
            <div class="top-part">
                <div class="left-content">
                    <img src="./images/fondo.jpg" alt="imagen">
                    <div></div>
                </div>
                <div class="right-content">
                    <div class="titulo">
                        <h2>Nuestra historia desde los comienzos</h2>
                    </div>
                    <div class="texto">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis, cupiditate accusamus. Et
                            cupiditate officiis accusamus minima. Velit aperiam tempore, quaerat repellendus quis qui
                            ducimus obcaecati minus delectus magnam nemo doloremque.</p>
                    </div>
                </div>
            </div>
            <div class="bottom-part">
                <div class="left-content">
                    <div class="titulo">
                        <h2>Nuestros alumnos cuentan la historia por nosotros</h2>
                    </div>
                    <div class="texto">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae molestiae iste, veniam
                            eum, nisi illum sed totam tempore id exercitationem consequuntur aperiam necessitatibus
                            aliquid explicabo excepturi quibusdam, culpa quod modi!</p>
                    </div>
                </div>
                <div class="right-content">
                    <img src="./images/fondo.jpg" alt="imagen">
                </div>
            </div>
        </div>
    </section>

    <section id="slider-valoraciones">
        <div class="card-valoracion">
            <div class="left-part">
                <img src="./images/persona.jpeg" alt="persona">
            </div>
            <div class="right-part">
                <div class="titulo">
                    <h3>Lucas Ezequiel Riera</h3>
                    <p><img src="./images/arrowright.svg" alt="imagen"> Programación web</p>
                </div>
                <div class="texto">
                    <p>"Si, me gusto mucho el curso, una genialidad el curso de programacion web con html"</p>
                </div>
            </div>
        </div>
        <div class="card-valoracion">
            <div class="left-part">
                <img src="./images/persona.jpeg" alt="persona">
            </div>
            <div class="right-part">
                <div class="titulo">
                    <h3>Lucas Ezequiel Riera</h3>
                    <p><img src="./images/arrowright.svg" alt="imagen"> Programación web</p>
                </div>
                <div class="texto">
                    <p>"Si, me gusto mucho el curso, una genialidad el curso de programacion web con html"</p>
                </div>
            </div>
        </div>
        <div class="card-valoracion">
            <div class="left-part">
                <img src="./images/persona.jpeg" alt="persona">
            </div>
            <div class="right-part">
                <div class="titulo">
                    <h3>Lucas Ezequiel Riera</h3>
                    <p><img src="./images/arrowright.svg" alt="imagen"> Programación web</p>
                </div>
                <div class="texto">
                    <p>"Si, me gusto mucho el curso, una genialidad el curso de programacion web con html"</p>
                </div>
            </div>
        </div>
        <div class="card-valoracion">
            <div class="left-part">
                <img src="./images/persona.jpeg" alt="persona">
            </div>
            <div class="right-part">
                <div class="titulo">
                    <h3>Lucas Ezequiel Riera</h3>
                    <p><img src="./images/arrowright.svg" alt="imagen"> Programación web</p>
                </div>
                <div class="texto">
                    <p>"Si, me gusto mucho el curso, una genialidad el curso de programacion web con html"</p>
                </div>
            </div>
        </div>
        <div class="card-valoracion">
            <div class="left-part">
                <img src="./images/persona.jpeg" alt="persona">
            </div>
            <div class="right-part">
                <div class="titulo">
                    <h3>Lucas Ezequiel Riera</h3>
                    <p><img src="./images/arrowright.svg" alt="imagen"> Programación web</p>
                </div>
                <div class="texto">
                    <p>"Si, me gusto mucho el curso, una genialidad el curso de programacion web con html"</p>
                </div>
            </div>
        </div>
        <div class="card-valoracion">
            <div class="left-part">
                <img src="./images/persona.jpeg" alt="persona">
            </div>
            <div class="right-part">
                <div class="titulo">
                    <h3>Lucas Ezequiel Riera</h3>
                    <p><img src="./images/arrowright.svg" alt="imagen"> Programación web</p>
                </div>
                <div class="texto">
                    <p>"Si, me gusto mucho el curso, una genialidad el curso de programacion web con html"</p>
                </div>
            </div>
        </div>
        <div class="card-valoracion">
            <div class="left-part">
                <img src="./images/persona.jpeg" alt="persona">
            </div>
            <div class="right-part">
                <div class="titulo">
                    <h3>Lucas Ezequiel Riera</h3>
                    <p><img src="./images/arrowright.svg" alt="imagen"> Programación web</p>
                </div>
                <div class="texto">
                    <p>"Si, me gusto mucho el curso, una genialidad el curso de programacion web con html"</p>
                </div>
            </div>
        </div>
        <div class="card-valoracion">
            <div class="left-part">
                <img src="./images/persona.jpeg" alt="persona">
            </div>
            <div class="right-part">
                <div class="titulo">
                    <h3>Lucas Ezequiel Riera</h3>
                    <p><img src="./images/arrowright.svg" alt="imagen"> Programación web</p>
                </div>
                <div class="texto">
                    <p>"Si, me gusto mucho el curso, una genialidad el curso de programacion web con html"</p>
                </div>
            </div>
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