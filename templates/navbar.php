<?php
foreach ($navbar as $navbar_item) { ?>

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
                        <a class="nav-link" href="./index.php"><?= utf8_encode($navbar_item["button1"]) ?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"> <?= utf8_encode($navbar_item["button2"]) ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="container-dropdown">
                                <div class="left-part-dropdown">
                                    <div class="container-scroll">
                                    <?php
                                    foreach ($escuelas as $key => $escuela) { ?>

                                        <li id="<?= utf8_encode($escuela['name']) ?>" class="<?= $key ?>">
                                            <a
                                            href="<?= $escuela['link'] ?>"
                                            id="<?= utf8_encode($escuela["name"]) ?>"
                                            style="position: relative; display: flex; align-items: center"
                                            class="dropdown-item categoria">
                                                <?= utf8_encode($escuela["name"]) ?>
                                                <img class="icono-navbar" style="position: absolute; right: 10px; top: 13px" src='./images/arrowright.svg'>
                                            </a>
                                        </li>

                                    <?php } ?>
                                    </div>
                                </div>
                                <div class="right-part-dropdown">
                                    <div class="container-information-top">
                                        <div class="information-top">
                                        </div>
                                        <div class="button-verCursos">
                                            <button class='btn btn-dark'>Ver todos los cursos</button>
                                        </div>
                                    </div>
                                    <div class="container-cursos" style="display: none">
                                        <?php
                                        foreach ($escuelas as $key => $escuela) { ?>
                                            
                                            <ul id="<?= $key ?>" class="info-escuela <?= utf8_encode($escuela['name']) ?>">
                                                <?php
                                                foreach ($cursos as $key => $curso)
                                                    if (utf8_encode($escuela['name']) === utf8_encode($curso['category'])) { ?>

                                                    <a href="./curso.php"><li><?= utf8_encode($curso['title']) ?></li></a>

                                                <?php } ?>
                                            </ul>

                                        <?php } ?>
                                        <div class="button-verCursos">
                                            <button class='btn btn-dark'>Ver todos los cursos</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./institucional.php"><?= utf8_encode($navbar_item["button3"]) ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./certificaciones.php"><?= utf8_encode($navbar_item["button4"]) ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger text-white"
                            href="http://www.escuelasiade.com/iade_campus_exp/login.php" tabindex="-1"
                            aria-disabled="true"><?= utf8_encode($navbar_item["button5"]) ?></a>
                    </li>
                </ul>
                <form id="formSearch" class="d-flex">
                    <input id="search" class="form-control me-2" type="search" placeholder="Buscar por curso"
                        aria-label="Search">
                    <button id="submit-button" class="btn btn-outline-danger" type="submit"><?= utf8_encode($navbar_item["button6"]) ?></button>
                </form>
                <!-- Iniciar sesión o Registrarse -->
                <button id="usuario-desconectado" class="btn btn-danger btn-login" type="button"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="imagen-login"></div>
                </button>
                <div class="modal fade ventanaModalSesion" id="exampleModal" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body text-center">
                                <h5 class="text-center mb-1 fw-light">Inicia sesión en tu cuenta</h5>
                                <p id="datos-ingreso">
                                    <label for="user" class="form-label"></label>
                                    <input type="email" class="form-control ingresar-usuario" id="user"
                                        placeholder="Ingresa tu email" onkeypress="if (event.keyCode===13) Login()">
                                    <label for="password" class="form-label"></label>
                                    <input type="password" class="form-control ingresar-password" id="password"
                                        placeholder="Ingresa tu contraseña"
                                        onkeypress="if (event.keyCode===13) Login()">
                                </p>
                                <input class="btn btn-success mt-2 text-white fw-light" id="botonVentanaRegistrarse"
                                    type="button" value="Registrarme">
                                <input class="btn btn-danger rounded mt-2 fw-light" id="botonVentanaIngresar"
                                    type="submit" value="Ingresar">
                            </div>
                            <div id="ventanaRegistrarse" class="modal-body text-center bg-light mt-1">
                                <hr class="mt-0">
                                <h5 class="text-center mb-4 fw-light">Registrate en Escuelas iade</h5>
                                <p class="parrafo-form d-flex justify-content-between">
                                    <label for="nombres" class="form-label">Nombres</label>
                                    <input type="text" class="form-control registrar-nombres" id="nombres"
                                        style="width: 300px;" onkeypress="if (event.keyCode===13) Registrarse()">
                                </p>
                                <p class="parrafo-form d-flex justify-content-between">
                                    <label for="apellidos" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control registrar-apellidos" id="user"
                                        style="width: 300px;" onkeypress="if (event.keyCode===13) Registrarse()">
                                </p>
                                <p class="parrafo-form d-flex justify-content-between">
                                    <label for="ubicacion" class="form-label">Ubicación</label>
                                    <input type="text" class="form-control registrar-ubicacion" id="ubicacion"
                                        style="width: 300px;" onkeypress="if (event.keyCode===13) Registrarse()">
                                </p>
                                <p class="parrafo-form d-flex justify-content-between">
                                    <label for="telefono" class="form-label">Teléfono</label>
                                    <input type="number" class="form-control registrar-telefono" id="user"
                                        style="width: 300px;" onkeypress="if (event.keyCode===13) Registrarse()">
                                </p>
                                <p class="parrafo-form d-flex justify-content-between">
                                    <label for="user" class="form-label">Ingresa tu email</label>
                                    <input type="email" class="form-control registrar-usuario" id="user"
                                        style="width: 300px;" onkeypress="if (event.keyCode===13) Registrarse()">
                                </p>
                                <p class="parrafo-form d-flex justify-content-between">
                                    <label for="password" class="form-label">Elige tu contraseña</label>
                                    <input type="password" class="form-control registrar-password" id="password"
                                        placeholder="(6 caracteres mínimo)" style="width: 300px;"
                                        onkeypress="if (event.keyCode===13) Registrarse()">
                                </p>
                                <input id="registrarse" class="btn btn-success px-2 rounded mt-2" type="button"
                                    value="Registrarme" style="width: 250px;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Iniciar sesión o Registrarse -->
                <!-- User -->
                <button id="usuario-conectado" class="btn-cart" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <div class="imagen-perfil"></div>
                </button>
                <div class="offcanvas offcanvas-end menu-usuario" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Hola <span
                                id="nombre-de-usuario">!</span></h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <ul class="list-group">
                            <a href="#">
                                <li class="list-group-item">Mi perfil</li>
                            </a>
                            <a href="#">
                                <li class="list-group-item">Mi aprendizaje</li>
                            </a>
                            <a href="#">
                                <li class="list-group-item">Cursos comprados</li>
                            </a>
                            <a href="./carrito.php">
                                <li class="list-group-item">Mi carrito</li>
                            </a>
                            <a href="#" onclick=logOut()>
                                <li class="list-group-item">Cerrar sesión</li>
                            </a>
                        </ul>
                    </div>
                </div>
                <!-- / User -->
            </div>
        </div>
    </nav>
    
<?php } ?>