<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformación Digital</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="../css/courses.css">
    <link rel="stylesheet" href="../css/responsiveCourse.css">
    <link rel="shortcut icon" href="../favicon.png"/>
</head>

<body>
    <!-- Modal Window -->
    <div id="modal" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; right: 0; bottom: 0; background-color: transparent; z-index: -1; transition: all .5s;"></div>

    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../../index.php"><img src="../images/logo.png" alt="logo_iade"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../../index.php">Inicio</a>
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
                                                <img src="../images/horario.png" alt="image" width="30px" height="30px">
                                                <img src="../images/horario.png" alt="image" width="30px" height="30px">
                                                <img src="../images/horario.png" alt="image" width="30px" height="30px">
                                                <img src="../images/horario.png" alt="image" width="30px" height="30px">
                                                <img src="../images/horario.png" alt="image" width="30px" height="30px">
                                                <img src="../images/horario.png" alt="image" width="30px" height="30px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../institucional.php">Conocenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../certificaciones.php">Certificaciones</a>
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
                                <a href="#"><li class="list-group-item">Mi carrito</li></a>
                                <a href="#" onclick=logOut()><li class="list-group-item">Cerrar sesión</li></a>
                            </ul>
                        </div>
                    </div>
                    <!-- / User -->
                </div>
            </div>
        </nav>
    </header>

    <main id="main" class="main">
        <div class="left-part">
            <nav class="nav-curso" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../index.php">Escuelas iade IT</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Transformación Digital</li>
                </ol>
            </nav>
            <div class="titulo-curso">
                <h1 class="animate__animated animate__fadeIn">Curso online de Transformación Digital</h1>
            </div>
            <div class="subtitulo-curso">
                <h2>Transforma tu negocio a la nueva generación de mercado online mediante nuestro curso de Transformación digital, tu negocio en la web, con mayor rentabilidad, de la mano de Escuelas iade</h2>
                <div class="iconos">
                    <p class="animate__animated animate__fadeInLeft"><img src="../images/check.png" alt="check"> Más vendido</p>
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s"><img src="../images/grow.png" alt="grow"> Alta demanda laboral</p>
                    <p class="animate__animated animate__fadeInLeft animate__delay-2s"><img src="../images/student.png" alt="student"> 7642 alumnos nuevos</p>
                    <p class="animate__animated animate__fadeInLeft animate__delay-3s"><img src="../images/estrella-completa.png" alt="star"><img src="../images/estrella-completa.png" alt="star"><img src="../images/estrella-completa.png" alt="star"><img src="../images/estrella-completa.png" alt="star"><img src="../images/estrella-incompleta.png" alt="star"> 4.5</p>
                    <p class="animate__animated animate__fadeInLeft animate__delay-4s"><img src="../images/cv.png" alt="cv"> Hacé crecer tu CV</p>
                </div>
            </div>
            <!-- Aparece al ser Responsive -->
            <div class="container-imagen-curso d-none">
                <div class="container-buttons-curso">
                    <div class="box-precio">
                        <div class="actual">
                            <h1>$10000</h1>
                            <h5><span class="badge bg-success">50% descuento</span></h5>
                        </div>
                        <div class="anterior">
                            <p>antes: <span>$20000</span></p>
                            <p>¡Esta oferta termina en 5 horas!</p>
                        </div>
                    </div>
                    <div class="box-buttons">
                        <input type="button" class="btn btn-success compraDirecta" value="Comprar curso">
                        <input type="button" class="btn btn-dark addCarrito" value="Agregar al carrito">
                    </div>
                </div>
            </div>
            <!-- / Aparece al ser Responsive -->
            <hr>
            <div class="container-profesor">
                <h3>Instructor del curso</h3>
                <div class="card-profesor">
                    <div class="imagen-profesor"></div>
                    <div class="informacion-profesor">
                        <p>Claudio Montaner</p>
                        <p>3976 Estudiantes</p>
                        <p><img src="../images/estrella-completa.png" alt="star"><img src="../images/estrella-completa.png" alt="star"><img src="../images/estrella-completa.png" alt="star"><img src="../images/estrella-completa.png" alt="star"><img src="../images/estrella-completa.png" alt="star"> 5/5</p>
                    </div>
                </div>
            </div>
            <div class="container-descripcion">
                <h3>Descripción del curso</h3>
                <ul>
                    <li>En este curso vamos a estar viendo las diferentes monedas que existen en el mundo de las criptomonedas, su utilidad, sus operaciones y demás.</li>
                </ul>
            </div>
            <div class="container-modalidad">
                <h3>Modalidad online</h3>
                <ul>
                    <li>Una vez que se haga click en "Comprar Curso" y lo abone, se le darán las credenciales para ingresar al campus y usted tendrá acceso a:</li>
                    <ul class="info mt-3">
                        <li>Clases virtuales en campus</li>
                        <li>Manuales y videos de estudio</li>
                        <li>Consultas con profesor</li>
                        <li>Examen libre y sin costo</li>
                        <li>2 seminarios mensuales (o más)</li>
                        <li>Certificación nacional e internacional una vez aprobado el examen final</li>
                    </ul>
                </ul>
            </div>
            <div class="container-requisitos">
                <h3>Requisitos para hacer el curso</h3>
                <ul>
                    <li>Manejo básico de internet</li>
                    <li>Tener un emprendimiento o estar en curso de uno</li>
                    <li>Tener PC o celular</li>
                </ul>
            </div>
            <div class="container-contenido">
                <h3>Contenido del curso</h3>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Módulo 1: Introducción a la Transformación Digital
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Módulo 2: Transformación en los negocios
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Módulo 3: Siglo XXI y sus transformaciones digitales
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                Módulo 4: Un poco más de historia económica
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                                Módulo 5: Comenzando con el proyecto final
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                                Módulo 6: Entregas de proyecto final y demostración
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-certificaciones">
                <h3>Estas son nuestras certificaciones</h3>
                <div class="card-certificaciones">
                    <img src="../images/brand.png" alt="certificacion">
                    <img src="../images/brand.png" alt="certificacion">
                    <img src="../images/brand.png" alt="certificacion">
                    <img src="../images/brand.png" alt="certificacion">
                    <img src="../images/brand.png" alt="certificacion">
                    <img src="../images/brand.png" alt="certificacion">
                    <img src="../images/brand.png" alt="certificacion">
                </div>
            </div>
            <div class="container-conocenos">
                <h3>Conocenos un poco más</h3>
                <div class="botones">
                    <a type="button" class="btn btn-danger animate__animated animate__fadeIn animate__delay-1s" data-bs-toggle="modal" data-bs-target="#modal-historia"><img class="svgimg mx-2" src="../images/campus.png" alt="campus" width="20px">Historia</a>
                    <a type="button" class="btn btn-danger animate__animated animate__fadeIn animate__delay-1s" data-bs-toggle="modal" data-bs-target="#modal-metodologias"><img class="svgimg mx-2" src="../../images/metodologia.png" alt="metodologia" width="20px">Metodologías</a>
                    <a type="button" class="btn btn-danger animate__animated animate__fadeIn animate__delay-1s" data-bs-toggle="modal" data-bs-target="#modal-certificaciones"><img class="svgimg mx-2" src="../../images/certificaciones.png" alt="certificacion" width="20px">Certificaciones</a>
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
                </div>
            </div>
            <div class="container-ranking">
                <h3>Valoraciones del curso</h3>
                <div class="card-puntaje">
                    <div class="puntaje">
                        <h1>4.5</h1>
                        <p>
                            <img src="../images/estrella-completa.png" alt="star">
                            <img src="../images/estrella-completa.png" alt="star">
                            <img src="../images/estrella-completa.png" alt="star">
                            <img src="../images/estrella-completa.png" alt="star">
                            <img src="../images/estrella-incompleta.png" alt="star">
                    </p>
                    </div>
                    <div class="porcentaje column">
                        <div class="caja-barra-porcentaje row">
                            <div class="barra-porcentaje col-9">
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                                </div>
                            </div>
                            <div class="estrellas col-2">
                                <img src="../images/estrella-completa.png" alt="star">
                                <img src="../images/estrella-completa.png" alt="star">
                                <img src="../images/estrella-completa.png" alt="star">
                                <img src="../images/estrella-completa.png" alt="star">
                                <img src="../images/estrella-completa.png" alt="star">
                            </div>
                        </div>
                        <div class="caja-barra-porcentaje row">
                            <div class="barra-porcentaje col-9">
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                                </div>
                            </div>
                            <div class="estrellas col-2">
                                <img src="../images/estrella-completa.png" alt="star">
                                <img src="../images/estrella-completa.png" alt="star">
                                <img src="../images/estrella-completa.png" alt="star">
                                <img src="../images/estrella-completa.png" alt="star">
                                <img src="../images/estrella-vacia.png" alt="star">
                            </div>
                        </div>
                        <div class="caja-barra-porcentaje row">
                            <div class="barra-porcentaje col-9">
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                </div>
                            </div>
                            <div class="estrellas col-2">
                                <img src="../images/estrella-completa.png" alt="star">
                                <img src="../images/estrella-completa.png" alt="star">
                                <img src="../images/estrella-completa.png" alt="star">
                                <img src="../images/estrella-vacia.png" alt="star">
                                <img src="../images/estrella-vacia.png" alt="star">
                            </div>
                        </div>
                        <div class="caja-barra-porcentaje row">
                            <div class="barra-porcentaje col-9">
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                </div>
                            </div>
                            <div class="estrellas col-2">
                                <img src="../images/estrella-completa.png" alt="star">
                                <img src="../images/estrella-completa.png" alt="star">
                                <img src="../images/estrella-vacia.png" alt="star">
                                <img src="../images/estrella-vacia.png" alt="star">
                                <img src="../images/estrella-vacia.png" alt="star">
                            </div>
                        </div>
                        <div class="caja-barra-porcentaje row">
                            <div class="barra-porcentaje col-9">
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                </div>
                            </div>
                            <div class="estrellas col-2">
                                <img src="../images/estrella-completa.png" alt="star">
                                <img src="../images/estrella-vacia.png" alt="star">
                                <img src="../images/estrella-vacia.png" alt="star">
                                <img src="../images/estrella-vacia.png" alt="star">
                                <img src="../images/estrella-vacia.png" alt="star">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container-valoraciones">
                <div class="card-valoracion">
                    <div class="imagen">
                        <img src="../images/persona.jpeg" alt="alumno">
                    </div>
                    <div class="informacion">
                        <h1>Alberto Paredes</h1>
                        <div class="estrellas"><img src="../images/estrella-completa.png" alt="star">
                            <img src="../images/estrella-completa.png" alt="star">
                            <img src="../images/estrella-completa.png" alt="star">
                            <img src="../images/estrella-completa.png" alt="star">
                            <img src="../images/estrella-completa.png" alt="star">
                            <p>Hace 1 día</p>
                        </div>
                        <div class="valoracion">
                            <p>El curso fué genial, no me esperaba que sea tan completo y con un precio podría decirse que bastante económico, y encima con certificado de estados unidos, una genialidad.</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card-valoracion">
                    <div class="imagen">
                        <img src="../images/persona.jpeg" alt="alumno">
                    </div>
                    <div class="informacion">
                        <h1>Cristian Sanchez</h1>
                        <div class="estrellas">
                            <img src="../images/estrella-completa.png" alt="star">
                            <img src="../images/estrella-completa.png" alt="star">
                            <img src="../images/estrella-completa.png" alt="star">
                            <img src="../images/estrella-completa.png" alt="star">
                            <img src="../images/estrella-vacia.png" alt="star">
                            <p>Hace 2 días</p>
                        </div>
                        <div class="valoracion">
                            <p>Me gustó mucho el curso</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card-valoracion">
                    <div class="imagen">
                        <img src="../images/persona.jpeg" alt="alumno">
                    </div>
                    <div class="informacion">
                        <h1>Laura Roldan</h1>
                        <div class="estrellas"><img src="../images/estrella-completa.png" alt="star">
                            <img src="../images/estrella-completa.png" alt="star">
                            <img src="../images/estrella-completa.png" alt="star">
                            <img src="../images/estrella-completa.png" alt="star">
                            <img src="../images/estrella-completa.png" alt="star">
                            <p>Hace 5 días</p>
                        </div>
                        <div class="valoracion">
                            <p>Curso bastante completo, lo recomendaría totalmente.</p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container-cursos-recomendados">
                <h3>Cursos recomendados por nuestros estudiantes</h3>
                <hr>
                <div class="card-curso">
                    <div class="imagen">
                        <img src="../images/criptomonedas.jpeg" alt="curso">
                    </div>
                    <div class="titulo">
                        <p><span>Criptomonedas</span>:<br>Aprende a utilizar las monedas virtuales más famosas del momento.</p>
                        <p>14,5 horas de duración total</p>
                    </div>
                    <div class="valoracion">
                        <p>4,6 <img src="../images/estrella-completa.png" alt="star" width="13px"></p>
                    </div>
                    <div class="precio">
                        <p><span class="badge">$12000</span></p>
                    </div>
                    <div class="comprar-guardar">
                        <p><input type="button" class="btn btn-success compraDirecta"><img src="../images/buy.png" alt="comprar"></p>
                        <p><input type="button" class="btn btn-danger addCarrito"><img src="../images/add-cart.png" alt="agregar-al-carrito"></p>
                    </div>
                </div>
                <hr>
                <div class="card-curso">
                    <div class="imagen">
                        <img src="../images/facebook-ads.png" alt="curso">
                    </div>
                    <div class="titulo">
                        <p><span>Facebook Ads</span>:<br>Aprende a publicitar en la red social con más trayectoria en el mundo.</p>
                        <p>10,2 horas de duración total</p>
                    </div>
                    <div class="valoracion">
                        <p>5 <img src="../images/estrella-completa.png" alt="star" width="13px"></p>
                    </div>
                    <div class="precio">
                        <p><span class="badge">$11000</span></p>
                    </div>
                    <div class="comprar-guardar">
                        <p><input type="button" class="btn btn-success compraDirecta"><img src="../images/buy.png" alt="comprar"></p>
                        <p><input type="button" class="btn btn-danger addCarrito"><img src="../images/add-cart.png" alt="agregar-al-carrito"></p>
                    </div>
                </div>
                <hr>
                <div class="card-curso">
                    <div class="imagen">
                        <img src="../images/google-ads.jpeg" alt="curso">
                    </div>
                    <div class="titulo">
                        <p><span>Google Ads</span>:<br>Aprende a publicitar tu negocio o tus proyectos en la empresa más reconocida y valorada del mundo.</p>
                        <p>22,2 horas de duración total</p>
                    </div>
                    <div class="valoracion">
                        <p>4,4 <img src="../images/estrella-completa.png" alt="star" width="13px"></p>
                    </div>
                    <div class="precio">
                        <p><span class="badge">$13000</span></p>
                    </div>
                    <div class="comprar-guardar">
                        <p><input type="button" class="btn btn-success compraDirecta"><img src="../images/buy.png" alt="comprar"></p>
                        <p><input type="button" class="btn btn-danger addCarrito"><img src="../images/add-cart.png" alt="agregar-al-carrito"></p>
                    </div>
                </div>
                <hr>
                <div class="card-curso">
                    <div class="imagen">
                        <img src="../images/curso-html.png" alt="curso">
                    </div>
                    <div class="titulo">
                        <p><span>HTML</span>:<br>¿Querías aprender programación? Este es tu momento, aprende HTML, CSS y Javascript en un solo curso, de 0 a experto.</p>
                        <p>15 horas de duración total</p>
                    </div>
                    <div class="valoracion">
                        <p>4,0 <img src="../images/estrella-completa.png" alt="star" width="13px"></p>
                    </div>
                    <div class="precio">
                        <p><span class="badge">$15000</span></p>
                    </div>
                    <div class="comprar-guardar">
                        <p><input type="button" class="btn btn-success compraDirecta"><img src="../images/buy.png" alt="comprar"></p>
                        <p><input type="button" class="btn btn-danger addCarrito"><img src="../images/add-cart.png" alt="agregar-al-carrito"></p>
                    </div>
                </div>
                <hr>
                <div class="card-curso">
                    <div class="imagen">
                        <img src="../images/curso-office.png" alt="curso">
                    </div>
                    <div class="titulo">
                        <p><span>Microsoft Office</span>:<br>Comienza a utilizar el paquete de Microsoft más famoso y eficiente para uso personal o laboral.</p>
                        <p>31 horas de duración total</p>
                    </div>
                    <div class="valoracion">
                        <p>4,8 <img src="../images/estrella-completa.png" alt="star" width="13px"></p>
                    </div>
                    <div class="precio">
                        <p><span class="badge">$10000</span></p>
                    </div>
                    <div class="comprar-guardar">
                        <p><input type="button" class="btn btn-success compraDirecta"><img src="../images/buy.png" alt="comprar"></p>
                        <p><input type="button" class="btn btn-danger addCarrito"><img src="../images/add-cart.png" alt="agregar-al-carrito"></p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <!-- Compra Directa -->
        <div class="right-part animate__animated animate__fadeIn">
            <div class="container-form">
                <div class="imagen-curso"><img src="../images/transformacion-digital.jpeg" alt="transformacion-digital"></div>
                <div class="precio">
                    <div class="actual">
                        <h1>$10000</h1>
                        <h5><span class="badge bg-success">50% descuento</span></h5>
                    </div>
                    <div class="anterior">
                        <p>antes: <span>$20000</span></p>
                        <p>¡Esta oferta termina en 5 horas!</p>
                    </div>
                </div>
                <div class="botones">
                    <p><input class="btn btn-success comprar fw-light compraDirecta w-100" type="button" value="Comprar curso"></p>
                    <p><input class="btn btn-danger cesta fw-light addCarrito w-100" type="button" value="Agregar al carrito"></p>
                </div>
                <div class="informacion-extra">
                    <h5>Este curso incluye:</h5>
                    <p><img src="../images/icono1.svg" alt="campus"> Campus virtual las 24hs</p>
                    <p><img src="../images/icono2.svg" alt="diploma"> Certificado nacional e internacional</p>
                    <p><img src="../images/icono3.svg" alt=""> Profesor particular para ayudarte</p>
                    <!-- <p><img src="../images/icono4.svg" alt="diploma-iade"> Diploma avalado por nosotros</p> (Este ocultarlo) -->
                    <p><img src="../images/icono5.svg" alt="contenido-descargable"> Contenido descargable</p>
                    <p><img src="../images/icono6.svg" alt="acceso-de-por-vida"> Acceso de por vida</p>
                </div>
            </div>
        </div>
        <!-- Formulario -->
        <!-- <div class="right-part animate__animated animate__fadeIn">
            <div class="container-form contact-form">
                <h1>Contactate con nosotros y comenzá a estudiar!</h1>
                <hr>
                <form id="contact-form" method="post">
                    <p class="parrafo">
                        <label for="stopspam" class="campo-escondido">Si ves esto no rellenes el campo</label>
                        <input name="stopspam" id="escondido" class="campo-escondido" />
                    </p>
                    <p class="parrafo">
                        <label for="nombre">Nombre Completo</label>
                        <input id="nombre" type="text" required>
                    </p>
                    <p class="parrafo">
                        <label for="email">Email</label>
                        <input id="email" type="text" required>
                    </p>
                    <p class="parrafo">
                        <label for="provincia">Provincia</label>
                        <input id="provincia" type="text" required>
                    </p>
                    <p class="parrafo">
                        <label for="telefono">Teléfono</label>
                        <input id="telefono" type="number" required>
                    </p>
                    <p class="parrafo">
                        <label for="dia-contacto">Día/s de contacto</label>
                        <input id="dias-contacto" type="text" required>
                    </p>
                    <p class="parrafo">
                        <label for="horario-contacto">Horario/s de contacto</label>
                        <input id="horario-contacto" type="text" required>
                    </p>
                    <p class="parrafo">
                        <label for="curso">Curso/s de interés</label>
                        <input id="curso-interes" type="text" required>
                    </p>
                    <input class="btn-enviar btn btn-success fw-light" type="submit" value="Quiero más información *">
                    <p class="footer-card mt-3 mb-0">* Este formulario es una solicitud de información, no de inscripción.</p>
                    <p class="footer-card mt-1">* Asegúrese de ingresar bien sus datos, uno de nuestros ascesores se comunicará a la brevedad.</p>
                </form>
            </div>
        </div> -->
    </main>

    <footer id="footer">
        <div class="left-part text-left px-5 py-3">
            <h4>Conocenos un poco más</h4>
            <p>Escuelas IADE es una escuela fundada hace más de 50 años para todo el público que desée incorporarse a cualquier sector de cualquier empresa, porque sabemos que el saber no ocupa espacio, y es la puerta hacia un futuro exitoso.</p>
        </div>
        <div class="center-part text-center">
            <img src="../images/logo.png" alt="logo" width="170px">
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

    <section id="responsive-footer" class="animate__animated">
        <div class="contenido">
            <div class="precio">
                <div class="actual">
                    <h1>$10000</h1>
                    <h5><span class="badge bg-success">50% descuento</span></h5>
                </div>
                <div class="anterior">
                    <p>antes: <span>$20000</span></p>
                </div>
            </div>
            <input class="btn btn-success compraDirecta" type="button" value="Comprar">
            <input class="btn btn-dark addCarrito" type="button" value="Añadir al carrito">
        </div>
    </section>

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
    <script src="../js/jquery-3.6.0.min.js"></script>
    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Session File -->
    <script src="../../js/session.js"></script>
    <!-- JS Styles -->
    <script src="../js/index.js"></script>
    <!-- Validations File -->
    <script src="../js/validations.js"></script>
    <!-- Cart Section -->
</body>

</html>