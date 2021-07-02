const navbar = `
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.html"><img src="./images/logo.png" alt="logo_iade"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.html">Inicio</a>
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
                    <a class="nav-link" href="./institucional.html">Institucional</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./certificaciones.html">Certificaciones</a>
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
            <!-- User -->
            <button class="btn-cart" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><div class="imagen-perfil"></div>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasRightLabel">Hola #usuario!</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body small">
                    <a href="#" class="border"><p class="border">Mi perfil</p></a>
                    <a href="#" class="border"><p class="border">Mi aprendizaje</p></a>
                    <a href="#" class="border"><p class="border">Cursos comprados</p></a>
                    <a href="#" class="border"><p class="border">Mi carrito</p></a>
                    <a href="#" class="border"><p class="border">Cerrar mi sesión</p></a>
                </div>
            </div>
            <!-- / User -->
        </div>
    </div>
</nav>
`

export default navbar;