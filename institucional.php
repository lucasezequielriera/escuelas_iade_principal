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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php"><img src="./images/logo.png" alt="logo_iade"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"> Cursos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="container-dropdown">
                                    <div class="left-part-dropdown">
                                        <div class="container-scroll"></div>
                                        <!-- <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item" href="#">Próximamente</a>
                                        </li> -->
                                    </div>
                                    <div class="right-part-dropdown">
                                        <div class="container-information-top"></div>
                                        <div class="container-information-bottom">
                                            <div class="container-images">
                                                <img src="./images/horario.png" alt="image" width="30px" height="30px">
                                                <img src="./images/horario.png" alt="image" width="30px" height="30px">
                                                <img src="./images/horario.png" alt="image" width="30px" height="30px">
                                                <img src="./images/horario.png" alt="image" width="30px" height="30px">
                                                <img src="./images/horario.png" alt="image" width="30px" height="30px">
                                                <img src="./images/horario.png" alt="image" width="30px" height="30px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./institucional.php">Conocenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./certificaciones.php">Certificaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-danger text-white"
                                href="http://www.escuelasiade.com/iade_campus_exp/login.php" tabindex="-1"
                                aria-disabled="true">CAMPUS</a>
                        </li>
                    </ul>
                    <form id="formSearch" class="d-flex">
                        <input id="search" class="form-control me-2" type="search" placeholder="Buscar por curso"
                            aria-label="Search">
                        <button id="submit-button" class="btn btn-outline-danger" type="submit">Buscar curso</button>
                    </form>
                    <!-- Iniciar sesión o Registrarse -->
                    <button id="usuario-desconectado" class="btn btn-danger btn-login" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="imagen-login"></div>
                    </button>
                    <div class="modal fade ventanaModalSesion" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                        <h5 class="text-center mb-1 fw-light">Inicia sesión en tu cuenta</h5>
                                        <p id="datos-ingreso">
                                            <label for="user" class="form-label"></label>
                                            <input type="email" class="form-control ingresar-usuario" id="user" placeholder="Ingresa tu email" onkeypress="if (event.keyCode===13) Login()">
                                            <label for="password" class="form-label"></label>
                                            <input type="password" class="form-control ingresar-password" id="password" placeholder="Ingresa tu contraseña" onkeypress="if (event.keyCode===13) Login()">
                                        </p>
                                        <input class="btn btn-success mt-2 text-white fw-light" id="botonVentanaRegistrarse" type="button" value="Registrarme">
                                        <input class="btn btn-danger rounded mt-2 fw-light" id="botonVentanaIngresar" type="submit" value="Ingresar">
                                </div>
                                <div id="ventanaRegistrarse" class="modal-body text-center bg-light mt-1">
                                    <hr class="mt-0">
                                    <h5 class="text-center mb-4 fw-light">Registrate en Escuelas iade</h5>
                                    <p class="parrafo-form d-flex justify-content-between">
                                        <label for="nombres" class="form-label">Nombres</label>
                                        <input type="text" class="form-control registrar-nombres" id="nombres" style="width: 300px;" onkeypress="if (event.keyCode===13) Registrarse()">
                                    </p>
                                    <p class="parrafo-form d-flex justify-content-between">
                                        <label for="apellidos" class="form-label">Apellidos</label>
                                        <input type="text" class="form-control registrar-apellidos" id="user" style="width: 300px;" onkeypress="if (event.keyCode===13) Registrarse()">
                                    </p>
                                    <p class="parrafo-form d-flex justify-content-between">
                                        <label for="ubicacion" class="form-label">Ubicación</label>
                                        <input type="text" class="form-control registrar-ubicacion" id="ubicacion" style="width: 300px;" onkeypress="if (event.keyCode===13) Registrarse()">
                                    </p>
                                    <p class="parrafo-form d-flex justify-content-between">
                                        <label for="telefono" class="form-label">Teléfono</label>
                                        <input type="number" class="form-control registrar-telefono" id="user" style="width: 300px;" onkeypress="if (event.keyCode===13) Registrarse()">
                                    </p>
                                    <p class="parrafo-form d-flex justify-content-between">
                                        <label for="user" class="form-label">Ingresa tu email</label>
                                        <input type="email" class="form-control registrar-usuario" id="user" style="width: 300px;" onkeypress="if (event.keyCode===13) Registrarse()">
                                    </p>
                                    <p class="parrafo-form d-flex justify-content-between">
                                        <label for="password" class="form-label">Elige tu contraseña</label>
                                        <input type="password" class="form-control registrar-password" id="password" placeholder="(6 caracteres mínimo)" style="width: 300px;" onkeypress="if (event.keyCode===13) Registrarse()">
                                    </p>
                                    <input id="registrarse" class="btn btn-success px-2 rounded mt-2" type="button" value="Registrarme" style="width: 250px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Iniciar sesión o Registrarse -->
                    <!-- User -->
                    <button id="usuario-conectado" class="btn-cart" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><div class="imagen-perfil"></div>
                    </button>
                    <div class="offcanvas offcanvas-end menu-usuario" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Hola <span id="nombre-de-usuario">!</span></h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            <ul class="list-group">
                                <a href="#"><li class="list-group-item">Mi perfil</li></a>
                                <a href="#"><li class="list-group-item">Mi aprendizaje</li></a>
                                <a href="#"><li class="list-group-item">Cursos comprados</li></a>
                                <a href="./carrito.php"><li class="list-group-item">Mi carrito</li></a>
                                <a href="#" onclick=logOut()><li class="list-group-item">Cerrar sesión</li></a>
                            </ul>
                        </div>
                    </div>
                    <!-- / User -->
                </div>
            </div>
        </nav>
    </header>

    <main id="mainInstitucional" class="main">
        <div class="imagen-fondo">
            <div class="titulo">
                <h1 class="animate__animated animate__fadeInLeft animate__delay-1s">Conocé tu institución.</h1>
                <h1 class="animate__animated animate__fadeInLeft animate__delay-1s">Conocé tu modalidad.</h1>
            </div>
            <div class="subtitulo text-center">
                <h1 class="animate__animated animate__fadeIn">Conocé tu futuro</h1>
            </div>
            <div class="bisubtitulo">
                <h1 class="animate__animated animate__fadeInRight animate__delay-1s">Conocé tu carrera.</h1>
                <h1 class="animate__animated animate__fadeInLeft animate__delay-1s">Conocé tu mejor opción.</h1>
            </div>
        </div>
        <div class="informationSection">
            <p class="d-flex iconos">
                <a type="button" class="btn btn-danger animate__animated animate__fadeIn animate__delay-1s" data-bs-toggle="modal" data-bs-target="#modal-historia"><img class="svgimg" src="./images/campus.png" alt="">Historia</a>
                <a type="button" class="btn btn-danger animate__animated animate__fadeIn animate__delay-1s" data-bs-toggle="modal" data-bs-target="#modal-metodologias"><img class="svgimg" src="./images/metodologia.png" alt="">Metodologías</a>
                <a type="button" class="btn btn-danger animate__animated animate__fadeIn animate__delay-1s" data-bs-toggle="modal" data-bs-target="#modal-certificaciones"><img class="svgimg" src="images/certificaciones.png" alt="">Certificaciones</a>
                <!-- Modal Historia -->
                <div class="modal fade" id="modal-historia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Historia de iade</h5>
                            </div>
                            <div class="modal-body">
                                En la década de 1950 con el crecimiento demográfico de la Ciudad de Buenos Aires, Córdoba, Rosario y el incremento de la actividad industrial, comercial y bancaria; se hizo necesario capacitar rápidamente a la población joven y de mediana edad para cubrir la demanda laboral especializada. Con este móvil económico, nacen pioneros en la enseñanza en áreas como administración, secretariados, carreras técnicas y de oficios.<br><br>
                                De este modo, Escuelas IADE fue fundada por iniciativa privada en 1959, con el propósito de satisfacer dichas necesidades educativas en la zona oeste del Gran Buenos Aires; proyecto educativo que con el crecimiento del país superó rápidamente expectativas de éxito comercial y profesional.<br>
                                Se abrieron año tras año sucursales en el Gran Buenos Aires y pronto en la Capital Federal. Se siguió hacia el interior del país, en las distintas provincias de la Argentina para luego trasladar esa misma educación a países como Uruguay, Chile, Paraguay, Brasil.
                                Atendiendo a la responsabilidad social, la dirección siempre planificó contenidos, proyectó y concretó cursos para llegar a sectores poblacionales de menores recursos económicos, haciendo que nuestro único requisito sea saber leer y escribir.<br><br>
                                Hacia 1963, se sumaron cursos técnicos y  comenzaron poco a poco los cursos a distancia, por correo; llegando a los rincones más humildes de la Argentina, donde la educación técnica era imposible. Esto fue el principio de la educación que hoy brindamos online.
                                Dada la filosofía fundacional de planeamiento educativo y contenidos prácticos con fundamentos científicos, se contrató a docentes especializados para siempre agregar valor académico y constante atención a las necesidades de cada alumno.<br>
                                En el 2010 se incorpora un  nuevo sector en la escuela: TEMPO IADE,  el laboratorio de proyectos, pensando no sólo en el tiempo presente sino en el futuro próximo.  Se reúne staff académico, se analizan necesidades de empresas e industrias, planificando así contenidos para nuevos cursos.
                                Desde su inicio, Escuelas Iade sostiene que el saber no ocupa lugar y hoy,  gracias al pleno uso de internet, nuestros cursos llegan a todos los rincones del país, incluso  sin necesidad de conexión .<br><br>
                                Durante estos sesenta años, Escuelas IADE adaptó y planificó cursos propios en áreas técnicas, empresarial, jurídico/comercial, salud, bienestar, belleza, moda, hotelería y muchas más. Hoy en día nuestros cursos están homologados por Standard Lift bajo las normas ISO 9000 e ISO 9002, además de contar con el respaldo de la Cámara Argentina de Refrigeración.<br><br>
                                En la actualidad, buscamos ofrecer incluso una mayor accesibilidad ampliando nuestro abanico de cursos disponibles en las áreas de Salud, estética, finanzas y nuevas tecnologías y adaptando los costos a la necesidad y posibilidad de cada sector. Con ya cuatro millones (4.000.000) de graduados, Escuelas IADE siempre va por más y a vencer nuevos desafíos.
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Metodologías -->
                <div class="modal fade" id="modal-metodologias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                </div>
                <!-- Modal Certificaciones -->
                <div class="modal fade" id="modal-certificaciones" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                </div>
            </p>
            <div class="container-texto-flotante animate__animated animate__fadeIn animate__delay-1s">
                <p class="texto-flotante text-center mt-5 fs-4 fw-light">Haz click para ver más información</p>
            </div>
        </div>
    </main>

    <footer id="footer">
        <div class="left-part text-left px-5 py-3">
            <h4>Conocenos un poco más</h4>
            <p>Escuelas IADE es una escuela fundada hace más de 50 años para todo el público que desée incorporarse a cualquier sector de cualquier empresa, porque sabemos que el saber no ocupa espacio, y es la puerta hacia un futuro exitoso.</p>
        </div>
        <div class="center-part text-center">
            <img src="./images/logo.png" alt="logo" width="170px">
            <p class="mt-1 fw-light">All Right Reserved 2021 | Designed & Engineered by <span>Agrowd</span></p>
        </div>
        <div class="right-part text-end px-5 py-3">
            <p><a href="#">Noticias</a></p>
            <p><a href="#">Servicios</a></p>
            <p><a href="#">Nosotros</a></p>
            <p><a href="#">Legalidades</a></p>
            <p><a href="#">Preguntas Frecuentes</a></p>
        </div>
    </footer>

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