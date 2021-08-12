<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuelas IADE IT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="shortcut icon" href="./favicon.png"/>
</head>

<body>
    <!-- Modal Window -->
    <div id="modal" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; right: 0; bottom: 0; background-color: transparent; z-index: -1; transition: all .5s;"></div>

    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php"><img src="./images/logo.png" alt="logo_iade"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" aria-current="page" href="#" id="navbarDropdown" role="button"
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
                            <a class="nav-link" href="../institucional.php">Conocenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../certificaciones.php">Certificaciones</a>
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
        <div class="top-part">
            <div class="left-part part col">
                <h1>Escuelas <span class="iade">iade</span> <span class="it">IT</span></h1>
                <p>Marketing y Tecnología</p>


            </div>
            <div class="right-part part col">
                <img src="./images/1.png" class="d-block w-100" alt="imagen">
                <img src="./images/2.png" class="d-block w-100" alt="imagen">
            </div>
        </div>

        <div class="middle-part">
            <div class="card">
                <div class="icono">
                    <img class="animate__animated animate__fadeInRight animate__delay-1s" src="./images/diploma.png" alt="diploma">
                </div>
                <div class="informacion">
                    <h5 class="animate__animated animate__fadeInLeft">Certificacion Nacional e Internacional
                        <!-- <a href="#">Hola</a> -->
                    </h5>
                </div>
            </div>
            <div class="card">
                <div class="icono">
                    <img class="animate__animated animate__fadeInRight animate__delay-1s" src="./images/university.png" alt="diploma">
                </div>
                <div class="informacion">
                    <h5 class="animate__animated animate__fadeInLeft">Avalados por España y Estados Unidos</h5>
                </div>
            </div>
            <div class="card">
                <div class="icono">
                    <img class="animate__animated animate__fadeInRight animate__delay-1s" src="./images/campus.png" alt="diploma">
                </div>
                <div class="informacion">
                    <h5 class="animate__animated animate__fadeInLeft">Campus virtual para tu enseñanza</h5>
                </div>
            </div>
            <div class="card">
                <div class="icono">
                    <img class="animate__animated animate__fadeInRight animate__delay-1s" src="./images/horario.png" alt="diploma">
                </div>
                <div class="informacion">
                    <h5 class="animate__animated animate__fadeInLeft">Horarios flexibles a tu ritmo</h5>
                </div>
            </div>
        </div>

        <div class="bottom-part">
            <div class="right-part part">
                <div class="container-courses">
                    <a href="./views/transformacion_digital.php">
                        <div class="course">
                            <span class="badge bg-success">Nuevo curso</span>
                            <span class="badge bg-primary text-white">Certificación Internacional</span>
                            <p>Transformación Digital</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="course">
                            <span class="badge bg-warning text-dark">Promoción especial</span>
                            <p>HTML</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="course">
                            <p>Facebook Ads</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="course">
                            <span class="badge bg-success">Nuevo curso</span>
                            <p>Criptomonedas</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="course">
                            <p>Google Ads</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="course">
                            <p>Microsoft Office</p>
                        </div>
                    </a>
                </div>
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
    <script src="../js/session.js"></script>
    <!-- JS Styles -->
    <script src="./js/index.js"></script>
</body>

</html>