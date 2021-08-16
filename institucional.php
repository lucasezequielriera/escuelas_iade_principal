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
    <title>Conocé IADE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/responsive.css">
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
            <div class="titulo">
                <h1 class="animate__animated animate__fadeInLeft animate__delay-1s"><?= $institucional[0]["subtitle1"] ?></h1>
                <h1 class="animate__animated animate__fadeInLeft animate__delay-1s"><?= $institucional[0]["subtitle2"] ?></h1>
            </div>
            <div class="subtitulo text-center">
                <h1 class="animate__animated animate__fadeIn"><?= $institucional[0]["title"] ?></h1>
            </div>
            <div class="bisubtitulo">
                <h1 class="animate__animated animate__fadeInRight animate__delay-1s"><?= $institucional[0]["subtitle3"] ?></h1>
                <h1 class="animate__animated animate__fadeInLeft animate__delay-1s"><?= $institucional[0]["subtitle4"] ?></h1>
            </div>
        </div>
        <div class="informationSection">
            <p class="d-flex iconos">
                <?php
                foreach ($componentes_institucional as $key => $componente) { ?>

                <a type="button" class="btn btn-danger animate__animated animate__fadeIn animate__delay-1s" data-bs-toggle="modal" data-bs-target="#modal-historia<?= $key ?>"><img class="svgimg" src="<?= $componente["icon"] ?>" alt=""><?= $componente["title"] ?></a>
                <!-- <a type="button" class="btn btn-danger animate__animated animate__fadeIn animate__delay-1s" data-bs-toggle="modal" data-bs-target="#modal-metodologias"><img class="svgimg" src="./images/metodologia.png" alt="">Metodologías</a>
                <a type="button" class="btn btn-danger animate__animated animate__fadeIn animate__delay-1s" data-bs-toggle="modal" data-bs-target="#modal-certificaciones"><img class="svgimg" src="images/certificaciones.png" alt="">Certificaciones</a> -->
            
                <?php } ?>

                <?php
                foreach ($componentes_institucional as $key => $componente) { ?>

                <!-- Modal Historia -->
                <div class="modal fade" id="modal-historia<?= $key ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?= $componente["subtitle"] ?></h5>
                            </div>
                            <div class="modal-body"><?= $componente["content"] ?></div>
                        </div>
                    </div>
                </div>

                <?php } ?>
                    <!-- Modal Historia -->
                    <!-- <div class="modal fade" id="modal-historia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><?= $componente["subtitle"] ?></h5>
                                </div>
                                <div class="modal-body"><?= $componente["content"] ?></div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Modal Metodologías -->
                    <!-- <div class="modal fade" id="modal-metodologias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Metodología de estudio</h5>
                                </div>
                                <div class="modal-body">
                                    Nuestros cursos son completamente a distancia, no hay clases ni prácticas presenciales.<br><br>
                                    Al inscribirse cada persona tiene ingreso a un campus en el cual podrá acceder al material correspondiente al curso adquirido; este consta de clases audiovisuales pre grabadas y manuales de lectura en formato PDF.<br>
                                    El material puede ser descargado y las clases son asincrónicas por lo que cada alumno regula sus tiempos de estudio según sus necesidades; es decir, cada alumno estudia cuando y donde quiere independientemente de tener o no conexión a internet. Además, se cuenta con la asistencia personalizada de un profesor para resolver cualquier tipo de consulta.<br><br>
                                    Una vez finaliza de estudiar el material brindado y despeja cualquier duda con el profesor, cada alumno debe rendir un examen final, el cual puede ver en el campus desde el momento en que tiene acceso a todo el material. Con la aprobación de este examen se da por finalizado el curso y se confecciona el certificado de Iade; el cual acredita la aprobación del curso y permite (opcionalmente) obtener los profesionales.
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Modal Certificaciones -->
                    <!-- <div class="modal fade" id="modal-certificaciones" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Certificaciones homologadas</h5>
                                </div>
                                <div class="modal-body">
                                    Durante estos sesenta y tres años, Escuelas IADE adaptó y planificó cursos propios en áreas técnicas, empresarial, jurídico/comercial, salud, bienestar, belleza, moda, hotelería y muchas más. Hoy en día nuestros cursos están homologados por Standard Lift bajo las normas ISO 9000 e ISO 9002.<br><br>
                                    Standard lift:<br>
                                    Ofrecemos a nuestros alumnos la posibilidad de certificarse nacional e internacionalmente por medio de nuestro convenio con Standard Lift, de manera que al finalizar nuestro curso puedan ejercer su profesión de forma legal en Argentina o bien dentro del Mercosur, ya que es una matrícula privada que otorga un lugar en el padrón donde se confirma la certificación dentro de Standard Lift.<br><br>
                                    BENEFICIOS DE OBTENER CERTIFICACIÓN O MATRÍCULA DE STANDARD LIFT.<br>
                                    • Podrán desempeñar su empleo de forma PROFESIONAL dentro de un marco legal, en cumplimiento de normativas nacionales e internacionales reconocidas por el Estado y las diferentes aseguradoras.<br>
                                    • Realizamos un proceso de evaluación y validación de los conocimientos de un trabajador en cualquier rol profesional, lo cual promueve su inserción y promoción, otorgándole ventajas competitivas. Aseguramos que dispone de la competencia mínima, con el aval de una entidad independiente a través de un proceso de certificación adecuado e imparcial. De esta manera mejora las oportunidades de empleo, incentiva el desarrollo de habilidades adquiridas y otorga un reconocimiento público de la experiencia laboral.<br>
                                    • Contribuye a su desarrollo personal y profesional, lo que le da la seguridad de poseer las pautas adecuadas para llevar a cabo su trabajo. En síntesis, mejora su empleabilidad.<br>
                                    • Trazabilidad, quienes contraten al alumno/a podrán buscar en nuestro portal quienes están certificados (siempre que acepten ser visualizados).
                                    (Texto brindado por Standard Lift thttp://www.standardlift.com.ar/ )<br><br>
                                    Matrícula de refrigeración:<br>
                                    En cuanto a matrículas oficiales, nos complace ofrecer la matriculación en refrigeración contando con el respaldo de la Cámara Argentina de Refrigeración.<br>
                                    Esta sirve para poder reparar e instalar equipos de Aire Acondicionado y heladeras con garantía sin quitar la misma (que quede cubierto el arreglo); y lo más importante, ejercer la profesión<br><br>
                                    Certificado IRCU:<br>
                                    Por otro lado, brindamos la opción de revalidación de nuestro certificado de Iade por “INTERNATIONAL REDEEMED CHRISTIAN UNIVERSITY”, que acredita el curso como tecnicatura y permite ejercer el oficio en Estados Unidos y Centroamérica.<br><br>
                                    Explicación breve de como hacerlos:<br>
                                    En todos los casos el alumno solo debe dirigirse al asesor correspondiente y este hará el trámite, garantizando un fácil y efectivo acceso a cada certificación.<br>
                                    Desde nuestro lugar brindamos la capacitación hasta la certificación, ofreciendo a cada alumno la posibilidad del crecimiento y desarrollo en el ámbito laboral, adaptándonos a cada necesidad y obstáculo que se presente para garantizar la igualdad de oportunidades para cada persona.
                                </div>
                            </div>
                        </div>
                    </div> -->
            </p>
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