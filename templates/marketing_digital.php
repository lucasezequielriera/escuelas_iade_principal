<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de Marketing Digital</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Icons -->
    <link rel="stylesheet" href="./css/courses.css">
    <link rel="stylesheet" href="./css/responsiveCourse.css">
    <link rel="shortcut icon" href="./images/tempo-logo.svg"/>
</head>

<body>


    <!-- Static Footer (Call & wsp numbers) -->
  <?php
  require("../templates/static_footer.php")
  ?>

    <!-- Modal Window -->
    <div id="modal" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; right: 0; bottom: 0; background-color: transparent; z-index: -1; transition: all .5s;"></div>

    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(0,0,0,0.79);">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php"><img src="./images/tempo-logo.svg" alt="Tempo Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white"
                                href="../index.php#work" tabindex="-1"
                                aria-disabled="true" style="padding-left: 7.5px; background-color: white; border-color: white; color: rgb(15 0 187 / 73%) !important; border-radius: 3px;">Ver m??s cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-danger text-white"
                                href="http://www.escuelasiade.com/iade_campus_exp/login.php" tabindex="-1"
                                aria-disabled="true" style="margin-left: 0;">CAMPUS</a>
                        </li>
                    </ul>
                    <!-- Iniciar sesi??n o Registrarse -->
                    <!-- <button id="usuario-desconectado" class="btn btn-danger btn-login" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="imagen-login"></div>
                    </button>
                    <div class="modal fade ventanaModalSesion" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <h5 class="text-center mb-1 fw-light">Inicia sesi??n en tu cuenta</h5>
                                    <p id="datos-ingreso">
                                        <label for="user" class="form-label"></label>
                                        <input type="email" class="form-control ingresar-usuario" id="user" placeholder="Ingresa tu email">
                                        <label for="password" class="form-label"></label>
                                        <input type="password" class="form-control ingresar-password" id="password" placeholder="Ingresa tu contrase??a">
                                    </p>
                                    <input id="botonVentanaRegistrarse" class="btn btn-dark px-5 mt-2 text-white fw-light" type="button" value="Registrarme">
                                    <input id="ingresar" class="btn btn-danger px-5 rounded mt-2 fw-light" type="submit" value="Ingresar">
                                </div>
                                <div id="ventanaRegistrarse" class="modal-body text-center bg-light mt-1">
                                    <h5 class="text-center mb-4 fw-light">Registrate en Escuelas iade</h5>
                                    <p class="parrafo-form d-flex justify-content-between">
                                        <label for="nombres" class="form-label">Nombres</label>
                                        <input type="text" class="form-control registrar-nombres" id="nombres" placeholder="Ej: Martin Ezequiel" style="width: 300px;">
                                    </p>
                                    <p class="parrafo-form d-flex justify-content-between">
                                        <label for="apellidos" class="form-label">Apellidos</label>
                                        <input type="text" class="form-control registrar-apellidos" id="user" placeholder="Ej: Rojas R??os" style="width: 300px;">
                                    </p>
                                    <p class="parrafo-form d-flex justify-content-between">
                                        <label for="ubicacion" class="form-label">Ubicaci??n</label>
                                        <input type="text" class="form-control registrar-ubicacion" id="ubicacion" placeholder="Ej: Buenos Aires, Argentina" style="width: 300px;">
                                    </p>
                                    <p class="parrafo-form d-flex justify-content-between">
                                        <label for="telefono" class="form-label">Tel??fono</label>
                                        <input type="number" class="form-control registrar-telefono" id="user" placeholder="Ej: +54 011 3578 9876" style="width: 300px;">
                                    </p>
                                    <p class="parrafo-form d-flex justify-content-between">
                                        <label for="user" class="form-label">Ingresa tu email</label>
                                        <input type="email" class="form-control registrar-usuario" id="user" placeholder="xxx@gmail.com" style="width: 300px;">
                                    </p>
                                    <p class="parrafo-form d-flex justify-content-between">
                                        <label for="password" class="form-label">Elige tu contrase??a</label>
                                        <input type="password" class="form-control registrar-password" id="password" placeholder="xxxxxx (6 caracteres m??nimo)" style="width: 300px;">
                                    </p>
                                    <input id="registrarse" class="btn btn-danger px-2 rounded" type="button" value="Registrarme" style="width: 250px;">
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- / Iniciar sesi??n o Registrarse -->
                    <!-- User -->
                    <!-- <button id="usuario-conectado" class="btn-cart" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><div class="imagen-perfil"></div>
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
                                <a href="#" onclick=logOut()><li class="list-group-item">Cerrar sesi??n</li></a>
                            </ul>
                        </div>
                    </div> -->
                    <!-- / User -->
                </div>
            </div>
        </nav>
    </header>

    <main id="main" class="main">
        <div class="left-part">
            <nav class="nav-curso" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../index.php#work" style="color: rgb(15 0 187 / 73%)">Todos los cursos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Marketing Digital</li>
                </ol>
            </nav>
            <div class="titulo-curso">
                <h1 class="animate__animated animate__fadeIn">Curso online de Marketing Digital</h1>
            </div>
            <div class="subtitulo-curso">
                <h2>Transforma tu negocio a la nueva generaci??n de mercado online mediante nuestro curso de Marketing digital, tu negocio en la web, con mayor rentabilidad, de la mano de <b>Tempo Education</b> </h2>
                <div class="iconos" style="background-color: rgb(15 0 187 / 73%);">
                    <p class="animate__animated animate__fadeInLeft"><img src="./images/check.png" alt="check"> M??s vendido</p>
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s"><img src="./images/grow.png" alt="grow"> Alta demanda laboral</p>
                    <p class="animate__animated animate__fadeInLeft animate__delay-2s"><img src="./images/student.png" alt="student"> 7642 alumnos nuevos</p>
                    <p class="animate__animated animate__fadeInLeft animate__delay-3s"><img src="./images/estrella-completa.png" alt="star"><img src="./images/estrella-completa.png" alt="star"><img src="./images/estrella-completa.png" alt="star"><img src="./images/estrella-completa.png" alt="star"><img src="./images/estrella-incompleta.png" alt="star"> 4.5</p>
                    <p class="animate__animated animate__fadeInLeft animate__delay-4s"><img src="./images/cv.png" alt="cv"> Hac?? crecer tu CV</p>
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
                            <p>??Esta oferta termina en 5 horas!</p>
                        </div>
                    </div>
                    <div class="box-buttons">
                        <button class="btn btn-success"> Comprar curso</button>
                        <button class="btn btn-dark"> Agregar al carrito</button>
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
                        <p><img src="./images/estrella-completa.png" alt="star"><img src="./images/estrella-completa.png" alt="star"><img src="./images/estrella-completa.png" alt="star"><img src="./images/estrella-completa.png" alt="star"><img src="./images/estrella-completa.png" alt="star"> 5</p>
                    </div>
                </div>
            </div>
            <div class="container-descripcion">
                <h3>Descripci??n del curso</h3>
                <ul>
                    <li>En este curso vamos a estar viendo las diferentes maneras de hacer marketing digital y su transofrmaci??n en el ambiente laboral y personal, su utilidad, sus operaciones y dem??s.</li>
                </ul>
            </div>
            <div class="container-modalidad">
                <h3>Modalidad online</h3>
                <ul>
                    <li>Una vez que usted compre el curso, se le dar??n las credenciales para ingresar al campus y tendr?? acceso a:</li>
                    <ul class="info mt-3">
                        <li>Clases virtuales en campus</li>
                        <li>Manuales y videos de estudio</li>
                        <li>Consultas con profesor</li>
                        <li>Examen libre y sin costo</li>
                        <li>Certificaci??n nacional e internacional una vez aprobado el examen final</li>
                    </ul>
                </ul>
            </div>
            <div class="container-requisitos">
                <h3>Requisitos para hacer el curso</h3>
                <ul>
                    <li>Manejo b??sico de internet</li>
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
                                M??dulo 1:
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <p>
                                    Presentaci??n del curso, duraci??n, definici??n de transformaci??n digital e introducci??n del proyecto como m??todo principal de evaluaci??n.<br>
                                    El c??mo dise??ar un proyecto innovador y pasos de una transformaci??n digital.<br>
                                    Exposici??n de los principales conceptos, objetivos y t??cnicas de comunicaci??n.<br>
                                    Explicaci??n de los principales conceptos de mercadeo digital<br>
                                     Exposici??n de conceptos b??sicos<br>
                                     Exposici??n de los las principales herramientas para optimizar la publicidad en Internet<br>
                                     Conversatorio sobre el estado actual del mercado educativo.<br>
                                     Exposici??n sobre la importancia de tener una plataforma digital propia, herramientas para desarrollarlas para diferentes presupuestos y an??lisis de este mercado como profesi??n y modelo de negocio.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                M??dulo 2:
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <p>
                                    Definici??n de la Inteligencia Artificial, explicaci??n t??cnica del estado actual de esta y exposici??n de casos de uso.<br>
                                     An??lisis legal de los aspectos a tener en cuenta sobre la gesti?? de datos de los clientes de una empresa<br>
                                     Exposici??n de la historia, actualidad y algunas herramientas actualmente disponibles para negocios que quieran tener una base digital<br>
                                     Exposici??n sobre innovaci??n, con ??nfasis en impresi??n 3D<br>
                                     Exposici??n sobre la importancia y aspectos m??s importantes de una auditor??a de una transformaci??n digital<br>
                                     Exposici??n detallada sobre experiencia de usuario como concepto.<br>
                                     Guiar a los estudiantes para que aseguren un sistema de comunicaci??n eficaz y que mantenga contacto con los usuarios, principalmente a trav??s de WhatsApp.<br>
                                     Exposici??n detallada de las caracter??sticas generales que deben de tener los proyectos, y la forma de presentarlos.<br>
                                     Explicaci??n del c??mo implementar conceptos de ingenier??a en las soluciones desarrolladas para sus proyectos<br>
                                     Exponer el c??mo los principios arquitecturales son importantes en el proceso de transformaci??n digital, con vistas a los proyectos de los estudiantes<br>
                                      Tutorial sobre los pasos necesarios para realizar una transmisi??n en vivo de calidad.<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-certificaciones">
                <h3>Estas son nuestras certificaciones</h3>
                <?php 
                    include '../templates/logos_certificaciones.php'
                ?>
            </div>
            <div class="container-conocenos">
                <h3>Conocenos un poco m??s</h3>
                <div class="botones">
                    <a type="button" class="btn btn-danger animate__animated animate__fadeIn animate__delay-1s" data-bs-toggle="modal" data-bs-target="#modal-historia"><img class="svgimg" src="./images/campus.png" alt="ghfh" width="25px" style="margin-right: 5px;">Historia</a>
                    <a type="button" class="btn btn-danger animate__animated animate__fadeIn animate__delay-1s" data-bs-toggle="modal" data-bs-target="#modal-metodologias"><img class="svgimg" src="./images/metodologia.png" alt="fghgh" width="25px" style="margin-right: 5px;">Metodolog??as</a>
                    <a type="button" class="btn btn-danger animate__animated animate__fadeIn animate__delay-1s" data-bs-toggle="modal" data-bs-target="#modal-certificaciones"><img class="svgimg" src="./images/certificaciones.png" alt="fdsfds" width="25px" style="margin-right: 5px;">Certificaciones</a>
                    <!-- Modal Historia -->
                    <div class="modal fade" id="modal-historia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nuestra historia</h5>
                                </div>
                                <div class="modal-body">
                                    En la d??cada de 1950 con el crecimiento demogr??fico de la Ciudad de Buenos Aires, C??rdoba, Rosario y el incremento de la actividad industrial, comercial y bancaria; se hizo necesario capacitar r??pidamente a la poblaci??n joven y de mediana edad para cubrir la demanda laboral especializada. Con este m??vil econ??mico, nacen pioneros en la ense??anza en ??reas como administraci??n, secretariados, carreras t??cnicas y de oficios.<br><br>
                                    De este modo, TEMPO Education fue fundada por iniciativa privada en 1959, con el prop??sito de satisfacer dichas necesidades educativas en la zona oeste del Gran Buenos Aires; proyecto educativo que con el crecimiento del pa??s super?? r??pidamente expectativas de ??xito comercial y profesional.<br>
                                    Se abrieron a??o tras a??o sucursales en el Gran Buenos Aires y pronto en la Capital Federal. Se sigui?? hacia el interior del pa??s, en las distintas provincias de la Argentina para luego trasladar esa misma educaci??n a pa??ses como Uruguay, Chile, Paraguay, Brasil.
                                    Atendiendo a la responsabilidad social, la direcci??n siempre planific?? contenidos, proyect?? y concret?? cursos para llegar a sectores poblacionales de menores recursos econ??micos, haciendo que nuestro ??nico requisito sea saber leer y escribir.<br><br>
                                    Hacia 1963, se sumaron cursos t??cnicos y  comenzaron poco a poco los cursos a distancia, por correo; llegando a los rincones m??s humildes de la Argentina, donde la educaci??n t??cnica era imposible. Esto fue el principio de la educaci??n que hoy brindamos online.
                                    Dada la filosof??a fundacional de planeamiento educativo y contenidos pr??cticos con fundamentos cient??ficos, se contrat?? a docentes especializados para siempre agregar valor acad??mico y constante atenci??n a las necesidades de cada alumno.<br>
                                    Se re??ne staff acad??mico, se analizan necesidades de empresas e industrias, planificando as?? contenidos para nuevos cursos.
                                    Desde su inicio, TEMPO Education sostiene que el saber no ocupa lugar y hoy,  gracias al pleno uso de internet, nuestros cursos llegan a todos los rincones del pa??s, incluso  sin necesidad de conexi??n .<br><br>
                                    Durante estos sesenta a??os, TEMPO Education adapt?? y planific?? cursos propios en ??reas t??cnicas, empresarial, jur??dico/comercial, salud, bienestar, belleza, moda, hoteler??a y muchas m??s. Hoy en d??a nuestros cursos est??n homologados por Standard Lift bajo las normas ISO 9000 e ISO 9002, adem??s de contar con el respaldo de la C??mara Argentina de Refrigeraci??n.<br><br>
                                    En la actualidad, buscamos ofrecer incluso una mayor accesibilidad ampliando nuestro abanico de cursos disponibles en las ??reas de Salud, est??tica, finanzas y nuevas tecnolog??as y adaptando los costos a la necesidad y posibilidad de cada sector. Con ya cuatro millones (4.000.000) de graduados, TEMPO Education siempre va por m??s y a vencer nuevos desaf??os.<br><br>
                                    <h3>Universidades afiliadas a nosotros</h3>
          <p style="color: black; font-weight: 600; font-size: 17px;">Damos la mejor ense??anza con las mejores universidades de Estados Unidos, entre ellas: <br><br>
            <strong>1)</strong> David University USA<br>
            <strong>2)</strong> Holy Spirit Atlanta<br>
            <strong>3)</strong> St Johns American University Florida<br>
            <strong>4)</strong> Boston Christian University USA<br>
            <strong>5)</strong> Instituto Iberoamericano de investigaci??n y Desarrollo IBIDE, Nicaragua<br>
            <strong>6)</strong> Asociaci??n Costarricense de Masajes y Criropaticos Costa Rica<br>
            <strong>7)</strong> My Bless University Costa Rica<br>
            <strong>8)</strong> Saint Peter World Scientific University Fundatuon USA<br>
            <strong>9)</strong> Faculty Of Bible scienses and World Misions USA<br>
            <strong>10)</strong> William C. MORRIS Theological Univerty Argentina</p>
          <p>Nuestro objetivo es brindar la posibilidad del crecimiento personal mediante la capacitaci??n y desarrollo
            de habilidades t??cnicas individuales en el lugar y en el tiempo que disponga el interesado y lograr as?? una
            posible y r??pida salida laboral que mejore su calidad de vida.</p>
          
          </p><br>
          <h3>Certificaciones Homologadas</h3>
          <p>Durante 40 a??os, <b>Tempo Education</b> adapt?? y planific?? cursos propios en ??reas t??cnicas, empresarial, jur??dico/comercial, salud, bienestar, belleza, moda, hoteler??a y muchas m??s. Hoy en d??a nuestros cursos est??n homologados por Standard Lift bajo las normas ISO 9000 e ISO 9002.
          </p>
          <br>  
          <h4>Standard Lift</h4>
          <p> 
             Ofrecemos a nuestros alumnos la posibilidad de certificarse nacional e internacionalmente por medio de nuestro convenio con Standard Lift, de manera que al finalizar nuestro curso puedan ejercer su profesi??n de forma legal en Argentina o bien dentro del Mercosur, ya que es una matr??cula privada que otorga un lugar en el padr??n donde se confirma la certificaci??n dentro de Standard Lift.
            </p>
            <br>
          <h4>BENEFICIOS DE OBTENER CERTIFICACI??N O MATR??CULA DE STANDARD LIFT.</h4>
          <br>
          <p><li>Podr??n desempe??ar su empleo de forma PROFESIONAL dentro de un marco legal, en cumplimiento de normativas nacionales e internacionales reconocidas por el Estado y las diferentes aseguradoras.</li></p>
           <p><li>Realizamos un proceso de evaluaci??n y validaci??n de los conocimientos de un trabajador en cualquier rol profesional, lo cual promueve su inserci??n y promoci??n, otorg??ndole ventajas competitivas. Aseguramos que dispone de la competencia m??nima, con el aval de una entidad independiente a trav??s de un proceso de certificaci??n adecuado e imparcial. De esta manera mejora las oportunidades de empleo, incentiva el desarrollo de habilidades adquiridas y otorga un reconocimiento p??blico de la experiencia laboral.</li></p>
           <p><li>Contribuye a su desarrollo personal y profesional, lo que le da la seguridad de poseer las pautas adecuadas para llevar a cabo su trabajo. En s??ntesis, mejora su empleabilidad.</li></p>
           <p><li>Trazabilidad, quienes contraten al alumno/a podr??n buscar en nuestro portal quienes est??n certificados (siempre que acepten ser visualizados). (Texto brindado por Standard Lift http://www.standardlift.com.ar/ )</li></p>
            <br>
            <h4>Certificado IRCU:</h4>
            <p>Por otro lado, brindamos la opci??n de revalidaci??n de nuestro certificado de tempo por <b>???INTERNATIONAL REDEEMED CHRISTIAN UNIVERSITY???</b>, que acredita el curso como tecnicatura y permite ejercer el oficio en Estados Unidos y Centroam??rica.</p>
             <h4>Explicaci??n breve de como hacerlos:</h4>
             <br>
             <p>En todos los casos el alumno solo debe dirigirse al asesor correspondiente y este har?? el tr??mite, garantizando un f??cil y efectivo acceso a cada certificaci??n.
Desde nuestro lugar brindamos la capacitaci??n hasta la certificaci??n, ofreciendo a cada alumno la posibilidad del crecimiento y desarrollo en el ??mbito laboral, adapt??ndonos a cada necesidad y obst??culo que se presente para garantizar la igualdad de oportunidades para cada persona.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Metodolog??as -->
                    <div class="modal fade" id="modal-metodologias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Metodolog??a de estudio</h5>
                                </div>
                                <div class="modal-body">
                                    Nuestros cursos son completamente a distancia, no hay clases ni pr??cticas presenciales.<br><br>
                                    Al inscribirse cada persona tiene ingreso a un campus en el cual podr?? acceder al material correspondiente al curso adquirido; este consta de clases audiovisuales pre grabadas y manuales de lectura en formato PDF.<br>
                                    El material puede ser descargado y las clases son asincr??nicas por lo que cada alumno regula sus tiempos de estudio seg??n sus necesidades; es decir, cada alumno estudia cuando y donde quiere independientemente de tener o no conexi??n a internet. Adem??s, se cuenta con la asistencia personalizada de un profesor para resolver cualquier tipo de consulta.<br><br>
                                    Una vez finaliza de estudiar el material brindado y despeja cualquier duda con el profesor, cada alumno debe rendir un examen final, el cual puede ver en el campus desde el momento en que tiene acceso a todo el material. Con la aprobaci??n de este examen se da por finalizado el curso y se confecciona el certificado de TEMPO; el cual acredita la aprobaci??n del curso y permite (opcionalmente) obtener los profesionales.
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
                                    Durante estos sesenta y tres a??os, TEMPO Education adapt?? y planific?? cursos propios en ??reas t??cnicas, empresarial, jur??dico/comercial, salud, bienestar, belleza, moda, hoteler??a y muchas m??s. Hoy en d??a nuestros cursos est??n homologados por Standard Lift bajo las normas ISO 9000 e ISO 9002.<br><br>
                                    Standard lift:<br>
                                    Ofrecemos a nuestros alumnos la posibilidad de certificarse nacional e internacionalmente por medio de nuestro convenio con Standard Lift, de manera que al finalizar nuestro curso puedan ejercer su profesi??n de forma legal en Argentina o bien dentro del Mercosur, ya que es una matr??cula privada que otorga un lugar en el padr??n donde se confirma la certificaci??n dentro de Standard Lift.<br><br>
                                    BENEFICIOS DE OBTENER CERTIFICACI??N O MATR??CULA DE STANDARD LIFT.<br>
                                    ??? Podr??n desempe??ar su empleo de forma PROFESIONAL dentro de un marco legal, en cumplimiento de normativas nacionales e internacionales reconocidas por el Estado y las diferentes aseguradoras.<br>
                                    ??? Realizamos un proceso de evaluaci??n y validaci??n de los conocimientos de un trabajador en cualquier rol profesional, lo cual promueve su inserci??n y promoci??n, otorg??ndole ventajas competitivas. Aseguramos que dispone de la competencia m??nima, con el aval de una entidad independiente a trav??s de un proceso de certificaci??n adecuado e imparcial. De esta manera mejora las oportunidades de empleo, incentiva el desarrollo de habilidades adquiridas y otorga un reconocimiento p??blico de la experiencia laboral.<br>
                                    ??? Contribuye a su desarrollo personal y profesional, lo que le da la seguridad de poseer las pautas adecuadas para llevar a cabo su trabajo. En s??ntesis, mejora su empleabilidad.<br>
                                    ??? Trazabilidad, quienes contraten al alumno/a podr??n buscar en nuestro portal quienes est??n certificados (siempre que acepten ser visualizados).
                                    (Texto brindado por Standard Lift thttp://www.standardlift.com.ar/ )<br><br>
                                    Matr??cula de refrigeraci??n:<br>
                                    En cuanto a matr??culas oficiales, nos complace ofrecer la matriculaci??n en refrigeraci??n contando con el respaldo de la C??mara Argentina de Refrigeraci??n.<br>
                                    Esta sirve para poder reparar e instalar equipos de Aire Acondicionado y heladeras con garant??a sin quitar la misma (que quede cubierto el arreglo); y lo m??s importante, ejercer la profesi??n<br><br>
                                    Certificado IRCU:<br>
                                    Por otro lado, brindamos la opci??n de revalidaci??n de nuestro certificado de TEMPO por ???INTERNATIONAL REDEEMED CHRISTIAN UNIVERSITY???, que acredita el curso como tecnicatura y permite ejercer el oficio en Estados Unidos y Centroam??rica.<br><br>
                                    Explicaci??n breve de como hacerlos:<br>
                                    En todos los casos el alumno solo debe dirigirse al asesor correspondiente y este har?? el tr??mite, garantizando un f??cil y efectivo acceso a cada certificaci??n.<br>
                                    Desde nuestro lugar brindamos la capacitaci??n hasta la certificaci??n, ofreciendo a cada alumno la posibilidad del crecimiento y desarrollo en el ??mbito laboral, adapt??ndonos a cada necesidad y obst??culo que se presente para garantizar la igualdad de oportunidades para cada persona.
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
                            <img src="./images/estrella-completa.png" alt="star">
                            <img src="./images/estrella-completa.png" alt="star">
                            <img src="./images/estrella-completa.png" alt="star">
                            <img src="./images/estrella-completa.png" alt="star">
                            <img src="./images/estrella-incompleta.png" alt="star">
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
                                <img src="./images/estrella-completa.png" alt="star">
                                <img src="./images/estrella-completa.png" alt="star">
                                <img src="./images/estrella-completa.png" alt="star">
                                <img src="./images/estrella-completa.png" alt="star">
                                <img src="./images/estrella-completa.png" alt="star">
                            </div>
                        </div>
                        <div class="caja-barra-porcentaje row">
                            <div class="barra-porcentaje col-9">
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
                                  </div>
                            </div>
                            <div class="estrellas col-2">
                                <img src="./images/estrella-completa.png" alt="star">
                                <img src="./images/estrella-completa.png" alt="star">
                                <img src="./images/estrella-completa.png" alt="star">
                                <img src="./images/estrella-completa.png" alt="star">
                                <img src="./images/estrella-vacia.png" alt="star">
                            </div>
                        </div>
                        <div class="caja-barra-porcentaje row">
                            <div class="barra-porcentaje col-9">
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                  </div>
                            </div>
                            <div class="estrellas col-2">
                                <img src="./images/estrella-completa.png" alt="star">
                                <img src="./images/estrella-completa.png" alt="star">
                                <img src="./images/estrella-completa.png" alt="star">
                                <img src="./images/estrella-vacia.png" alt="star">
                                <img src="./images/estrella-vacia.png" alt="star">
                            </div>
                        </div>
                        <div class="caja-barra-porcentaje row">
                            <div class="barra-porcentaje col-9">
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                  </div>
                            </div>
                            <div class="estrellas col-2">
                                <img src="./images/estrella-completa.png" alt="star">
                                <img src="./images/estrella-completa.png" alt="star">
                                <img src="./images/estrella-vacia.png" alt="star">
                                <img src="./images/estrella-vacia.png" alt="star">
                                <img src="./images/estrella-vacia.png" alt="star">
                            </div>
                        </div>
                        <div class="caja-barra-porcentaje row">
                            <div class="barra-porcentaje col-9">
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                  </div>
                            </div>
                            <div class="estrellas col-2">
                                <img src="./images/estrella-completa.png" alt="star">
                                <img src="./images/estrella-vacia.png" alt="star">
                                <img src="./images/estrella-vacia.png" alt="star">
                                <img src="./images/estrella-vacia.png" alt="star">
                                <img src="./images/estrella-vacia.png" alt="star">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container-valoraciones">
                <div class="card-valoracion">
                    <div class="imagen">
                        <img src="./images/persona.jpeg" alt="alumno">
                    </div>
                    <div class="informacion">
                        <h1>Alberto Paredes</h1>
                        <div class="estrellas"><img src="./images/estrella-completa.png" alt="star">
                            <img src="./images/estrella-completa.png" alt="star">
                            <img src="./images/estrella-completa.png" alt="star">
                            <img src="./images/estrella-completa.png" alt="star">
                            <img src="./images/estrella-completa.png" alt="star">
                            <p class="fechaComentario1"></p>
                        </div>
                        <div class="valoracion">
                            <p>El curso fu?? genial, no me esperaba que sea tan completo y con un precio podr??a decirse que bastante econ??mico, y encima con certificado de estados unidos, una genialidad.</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card-valoracion">
                    <div class="imagen">
                        <img src="./images/persona.jpeg" alt="alumno">
                    </div>
                    <div class="informacion">
                        <h1>Cristian Sanchez</h1>
                        <div class="estrellas">
                            <img src="./images/estrella-completa.png" alt="star">
                            <img src="./images/estrella-completa.png" alt="star">
                            <img src="./images/estrella-completa.png" alt="star">
                            <img src="./images/estrella-completa.png" alt="star">
                            <img src="./images/estrella-vacia.png" alt="star">
                            <p class="fechaComentario2"></p>
                        </div>
                        <div class="valoracion">
                            <p>Me gust?? mucho el curso</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card-valoracion">
                    <div class="imagen">
                        <img src="./images/persona.jpeg" alt="alumno">
                    </div>
                    <div class="informacion">
                        <h1>Laura Roldan</h1>
                        <div class="estrellas"><img src="./images/estrella-completa.png" alt="star">
                            <img src="./images/estrella-completa.png" alt="star">
                            <img src="./images/estrella-completa.png" alt="star">
                            <img src="./images/estrella-completa.png" alt="star">
                            <img src="./images/estrella-completa.png" alt="star">
                            <p class="fechaComentario3"></p>
                        </div>
                        <div class="valoracion">
                            <p>Curso bastante completo, lo recomendar??a totalmente.</p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!-- <div class="container-cursos-recomendados">
                <h3>Cursos recomendados por nuestros estudiantes</h3>
                <hr>
                <div class="card-curso">
                    <div class="imagen">
                        <img src="./images/criptomonedas.jpeg" alt="curso">
                    </div>
                    <div class="titulo">
                        <p><span>Criptomonedas</span>:<br>Aprende a utilizar las monedas virtuales m??s famosas del momento.</p>
                        <p>14,5 horas de duraci??n total</p>
                    </div>
                    <div class="valoracion">
                        <p>4,6 <img src="./images/estrella-completa.png" alt="star" width="13px"></p>
                    </div>
                    <div class="precio">
                        <p><span class="badge">$12000</span></p>
                    </div>
                    <div class="comprar-guardar">
                        <p><img class="btn btn-success" src="./images/buy.png" alt="comprar"></p>
                        <p><img class="btn btn-danger" src="./images/add-cart.png" alt="agregar-al-carrito"></p>
                    </div>
                </div>
                <hr>
                <div class="card-curso">
                    <div class="imagen">
                        <img src="./images/facebook-ads.png" alt="curso">
                    </div>
                    <div class="titulo">
                        <p><span>Facebook Ads</span>:<br>Aprende a publicitar en la red social con m??s trayectoria en el mundo.</p>
                        <p>10,2 horas de duraci??n total</p>
                    </div>
                    <div class="valoracion">
                        <p>5 <img src="./images/estrella-completa.png" alt="star" width="13px"></p>
                    </div>
                    <div class="precio">
                        <p><span class="badge">$11000</span></p>
                    </div>
                    <div class="comprar-guardar">
                        <p><img class="btn btn-success" src="./images/buy.png" alt="comprar"></p>
                        <p><img class="btn btn-danger" src="./images/add-cart.png" alt="agregar-al-carrito"></p>
                    </div>
                </div>
                <hr>
                <div class="card-curso">
                    <div class="imagen">
                        <img src="./images/google-ads.jpeg" alt="curso">
                    </div>
                    <div class="titulo">
                        <p><span>Google Ads</span>:<br>Aprende a publicitar tu negocio o tus proyectos en la empresa m??s reconocida y valorada del mundo.</p>
                        <p>22,2 horas de duraci??n total</p>
                    </div>
                    <div class="valoracion">
                        <p>4,4 <img src="./images/estrella-completa.png" alt="star" width="13px"></p>
                    </div>
                    <div class="precio">
                        <p><span class="badge">$13000</span></p>
                    </div>
                    <div class="comprar-guardar">
                        <p><img class="btn btn-success" src="./images/buy.png" alt="comprar"></p>
                        <p><img class="btn btn-danger" src="./images/add-cart.png" alt="agregar-al-carrito"></p>
                    </div>
                </div>
                <hr>
                <div class="card-curso">
                    <div class="imagen">
                        <img src="./images/curso-html.png" alt="curso">
                    </div>
                    <div class="titulo">
                        <p><span>HTML</span>:<br>??Quer??as aprender programaci??n? Este es tu momento, aprende HTML, CSS y Javascript en un solo curso, de 0 a experto.</p>
                        <p>15 horas de duraci??n total</p>
                    </div>
                    <div class="valoracion">
                        <p>4,0 <img src="./images/estrella-completa.png" alt="star" width="13px"></p>
                    </div>
                    <div class="precio">
                        <p><span class="badge">$15000</span></p>
                    </div>
                    <div class="comprar-guardar">
                        <p><img class="btn btn-success" src="./images/buy.png" alt="comprar"></p>
                        <p><img class="btn btn-danger" src="./images/add-cart.png" alt="agregar-al-carrito"></p>
                    </div>
                </div>
                <hr>
                <div class="card-curso">
                    <div class="imagen">
                        <img src="./images/curso-office.png" alt="curso">
                    </div>
                    <div class="titulo">
                        <p><span>Microsoft Office</span>:<br>Comienza a utilizar el paquete de Microsoft m??s famoso y eficiente para uso personal o laboral.</p>
                        <p>31 horas de duraci??n total</p>
                    </div>
                    <div class="valoracion">
                        <p>4,8 <img src="./images/estrella-completa.png" alt="star" width="13px"></p>
                    </div>
                    <div class="precio">
                        <p><span class="badge">$10000</span></p>
                    </div>
                    <div class="comprar-guardar">
                        <p><img class="btn btn-success" src="./images/buy.png" alt="comprar"></p>
                        <p><img class="btn btn-danger" src="./images/add-cart.png" alt="agregar-al-carrito"></p>
                    </div>
                </div>
                <hr>
            </div> -->
        </div>
        <!-- <div class="right-part animate__animated animate__fadeIn">
            <div class="container-form">
                <div class="imagen-curso"><img src="./images/transformacion-digital.jpeg" alt="transformacion-digital"></div>
                <div class="precio">
                    <div class="actual">
                        <h1>$10000</h1>
                        <h5><span class="badge bg-success">50% descuento</span></h5>
                    </div>
                    <div class="anterior">
                        <p>antes: <span>$20000</span></p>
                        <p>??Esta oferta termina en 5 horas!</p>
                    </div>
                </div>
                <div class="botones">
                    <button class="btn btn-success comprar fw-light">Comprar curso</button>
                    <button class="btn btn-danger cesta fw-light">Agregar al carrito</button>
                </div>
                <div class="informacion-extra">
                    <h5>Este curso incluye:</h5>
                    <p><img src="./images/icono1.svg" alt="campus"> Campus virtual las 24hs</p>
                    <p><img src="./images/icono2.svg" alt="diploma"> Certificado nacional e internacional</p>
                    <p><img src="./images/icono3.svg" alt=""> Profesor particular para ayudarte</p>
                    <p><img src="./images/icono4.svg" alt="diploma-iade"> Diploma avalado por nosotros</p> (Este ocultarlo)
                    <p><img src="./images/icono5.svg" alt="contenido-descargable"> Contenido descargable</p>
                    <p><img src="./images/icono6.svg" alt="acceso-de-por-vida"> Acceso de por vida</p>
                </div>
            </div>
        </div> -->
        <div class="right-part animate__animated animate__fadeIn">
            <div class="container-form contact-form">
                <h1>Contactate con nosotros y comenz?? a estudiar!</h1>
                <hr>
                <form id="contact-form" action="#" method="post">
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
                        <label for="telefono">Tel??fono</label>
                        <input id="telefono" type="number" required>
                    </p>
                    <p class="parrafo">
                        <label for="dia-contacto">D??a/s de contacto</label>
                        <input id="dias-contacto" type="text" required>
                    </p>
                    <p class="parrafo">
                        <label for="horario-contacto">Horario/s de contacto</label>
                        <input id="horario-contacto" type="text" required>
                    </p>
                    <p class="parrafo">
                        <label for="curso">Curso/s de inter??s</label>
                        <input id="curso-interes" type="text" required>
                    </p>
                    <input class="btn-enviar btn btn-success fw-light" type="submit" value="Quiero m??s informaci??n *">
                    <p class="footer-card mt-3 mb-0">* Este formulario es una solicitud de informaci??n, no de inscripci??n.</p>
                    <p class="footer-card mt-1">* Aseg??rese de ingresar bien sus datos, uno de nuestros ascesores se comunicar?? a la brevedad.</p>
                </form>
            </div>
        </div>
    </main>

    <footer id="footer">
        <div class="left-part">
            <p><a href="#">T??rminos de Uso</a></p>
            <p><a href="#">Preguntar Frecuentes</a></p>
            <p><a href="#">Protecci??n de Datos Personales</a></p>
        </div>
        <div class="right-part">
            <p>All Right Reserved 2021 | Designed & Engineered by <span>Agrowd</span></p>
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
            <input class="btn btn-success" type="button" value="Comprar"></input>
            <input class="btn btn-dark" type="button" value="A??adir al carrito"></input>
        </div>
    </section>

    <!-- Botones Flotantes -->
  <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 
  <a href="https://api.whatsapp.com/send?phone=541130112419&text=Me%20gustar%C3%ADa%20saber%20sobre%20los%20cursos%20&source=&data=&app_absent=" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
  <a class='flotante' href='tel:+541121641442'><i class="fa fa-phone my-phone" aria-hidden="true"></i></a>

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
    <!-- JS Styles -->
    <script src="./js/index.js"></script>
</body>

</html>