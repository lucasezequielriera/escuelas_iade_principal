'use strict'

/////----- Main -----/////

// Consts //
const body = document.querySelector('body');
const modalWindow = document.querySelector('#modal');
const search = document.querySelector('#search');
const formSearch = document.querySelector('#formSearch');
const submitButton = document.querySelector('#submit-button');

// Listeners //
search.addEventListener("focus", showModal);
search.addEventListener("blur", hideModal);

// Show Modal Function //
function showModal() {
    modalWindow.style.zIndex = 9999;
    formSearch.style.zIndex = 10000;
    modalWindow.style.backgroundColor = 'rgba(0,0,0,0.7)';
    submitButton.classList.remove('btn-outline-danger');
    submitButton.classList.add('btn-danger');
}

// Hide Modal Function //
function hideModal() {
    modalWindow.style.zIndex = -1;
    modalWindow.style.backgroundColor = 'transparent';
    submitButton.classList.remove('btn-danger');
    submitButton.classList.add('btn-outline-danger');
    // Si hay problemas con el buscador, éste es el problema //
    formSearch.style.zIndex = 1;
}

/////----- / Main -----/////

/////----- Navbar -----/////

// Principal DOM //
const containerScroll = document.querySelector('.container-scroll');

// Utilizando AJAX para mostrar datos desde JSON con Promise //
let capturarDatos = new Promise((resolve, reject) => {

    setTimeout(() => {
        // AJAX //
        $(document).ready(function() {
            $.ajax({
                method: 'GET',
                url: './js/datos.json',
                dataType: 'json',
                success: function (data) {
                    sessionStorage.setItem("data", JSON.stringify(data));
                    console.log("Datos de JSON guardados en sessionStorage");
                } 
            });
        });
        if(sessionStorage.getItem("data")) {
            resolve(console.log("Lectura de datos por AJAX completa"));
        } else {
            reject(console.log("Algo falló en la lectura de datos en JSON"));
        }
    }, 500);

});

capturarDatos.then(resultado => {
    resultado;
})
.catch(err => {
    err;
})

setTimeout(() => {
    // Datos JSON //
    const datos = JSON.parse(sessionStorage.getItem("data"));

    // Array (categories) //
    const categories = datos;

    // Map para extraer "categorías" del json //
    const categorias = categories.map( (item) => {
        return item.categoria;
    })
    // Map para extraer "url" del json //
    const urls = categories.map( (item) => {
        return item.url;
    })
    // Categories Iteration //
    categorias.forEach(function(item, index) {
        // li //
        const li = document.createElement("li");
        // imagen //
        const img = document.createElement("img");
        img.setAttribute('src', '../images/arrowright.svg');
        img.setAttribute('alt', 'arrow');
        img.style = 'position: absolute; right: 10px; top: 13px';
        // a //
        const a = document.createElement("a");
        a.classList.add("dropdown-item");
        a.classList.add(`categoria${index}`)
        a.setAttribute("href", urls[index]);
        a.textContent = `${item}`;
        a.style = 'position: relative';
        // br //
        const br = document.createElement("br");
        // span //
        const span = document.createElement("span");
        span.textContent = `cursos online`;
        // Insertar y vincular todo //
        a.appendChild(img);
        a.appendChild(br);
        a.appendChild(span);
        li.appendChild(a);
        containerScroll.appendChild(li);

        // `<li>
        //     <a class="dropdown-item" href="#">${index}${item} <br />
        //     <span>3 cursos</span></a>
        // </li>`
    });

    // Consts //
    const categoria0 = document.querySelector('.categoria0');
    const categoria1 = document.querySelector('.categoria1');
    const categoria2 = document.querySelector('.categoria2');
    const categoria3 = document.querySelector('.categoria3');
    const categoria4 = document.querySelector('.categoria4');
    const categoria5 = document.querySelector('.categoria5');
    const categoria6 = document.querySelector('.categoria6');
    const categoria7 = document.querySelector('.categoria7');
    const categoria8 = document.querySelector('.categoria8');
    const botonCursos = document.querySelector('.dropdown-toggle');
    const topSection = document.querySelector('.container-information-top');
    const bottomSection = document.querySelector('.container-information-bottom');


    // Listeners //
    categoria0.addEventListener("mouseover", mostrar0);
    categoria1.addEventListener("mouseover", mostrar1);
    categoria2.addEventListener("mouseover", mostrar2);
    categoria3.addEventListener("mouseover", mostrar3);
    categoria4.addEventListener("mouseover", mostrar4);
    categoria5.addEventListener("mouseover", mostrar5);
    categoria6.addEventListener("mouseover", mostrar6);
    categoria7.addEventListener("mouseover", mostrar7);
    categoria8.addEventListener("mouseover", mostrar8);

    // Add slideDown animation to Bootstrap dropdown when expanding.
    $('.dropdown').on('show.bs.dropdown', function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    // Add slideUp animation to Bootstrap dropdown when collapsing.
    $('.dropdown').on('hide.bs.dropdown', function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });


    // Functions //
    function mostrar0() {
        topSection.innerHTML = `
        <ul>
            <h6>Publicidad y Marketing</h6>
            <a href="./IT/views/transformacion_digital.html"><li>Transformación Digital</li></a>
            <a href="."><li>Facebook Ads</li></a>
            <a href="."><li>Google Ads</li></a>
            <a href="."><li>Microsoft Office</li></a>
        </ul>
        <ul>
            <h6>Desarrollo Web</h6>
            <a href="."><li>Programación en HTML</li></a>
            <a href="."><li>Criptomonedas</li></a>
        </ul>
        <div class="button-verCursos">
            <button class='btn btn-dark'>Ver todos los cursos</button>
        </div> `
    }
    function mostrar1() {
        topSection.innerHTML = `
        <ul>
            <h6>Oficios</h6>
            <a href="."><li>Transformación Digital</li></a>
            <a href="."><li>Facebook Ads</li></a>
            <a href="."><li>Google Ads</li></a>
            <a href="."><li>Microsoft Office</li></a>
        </ul>
        <ul>
            <a><li> </li></a><br>
            <a href="."><li>Programación en HTML</li></a>
            <a href="."><li>Criptomonedas</li></a>
        </ul>
        <div class="button-verCursos">
            <button class='btn btn-dark'>Ver todos los cursos</button>
        </div> `
    }
    function mostrar2() {
        topSection.innerHTML = `
        <ul>
            <h6>Electrónica</h6>
            <a href="."><li>Transformación Digital</li></a>
            <a href="."><li>Facebook Ads</li></a>
            <a href="."><li>Google Ads</li></a>
            <a href="."><li>Microsoft Office</li></a>
        </ul>
        <ul>
            <a><li> </li></a><br>
            <a href="."><li>Programación en HTML</li></a>
            <a href="."><li>Criptomonedas</li></a>
        </ul>
        <div class="button-verCursos">
            <button class='btn btn-dark'>Ver todos los cursos</button>
        </div> `
    }
    function mostrar3() {
        topSection.innerHTML = `
        <ul>
            <h6>Salud</h6>
            <a href="."><li>Transformación Digital</li></a>
            <a href="."><li>Facebook Ads</li></a>
            <a href="."><li>Google Ads</li></a>
            <a href="."><li>Microsoft Office</li></a>
        </ul>
        <ul>
            <a><li> </li></a><br>
            <a href="."><li>Programación en HTML</li></a>
            <a href="."><li>Criptomonedas</li></a>
        </ul>
        <div class="button-verCursos">
            <button class='btn btn-dark'>Ver todos los cursos</button>
        </div> `
    }
    function mostrar4() {
        topSection.innerHTML = `
        <ul>
            <h6>Estética</h6>
            <a href="."><li>Transformación Digital</li></a>
            <a href="."><li>Facebook Ads</li></a>
            <a href="."><li>Google Ads</li></a>
            <a href="."><li>Microsoft Office</li></a>
        </ul>
        <ul>
            <a><li> </li></a><br>
            <a href="."><li>Programación en HTML</li></a>
            <a href="."><li>Criptomonedas</li></a>
        </ul>
        <div class="button-verCursos">
            <button class='btn btn-dark'>Ver todos los cursos</button>
        </div> `
    }
    function mostrar5() {
        topSection.innerHTML = `
        <ul>
            <h6>Electricidad</h6>
            <a href="."><li>Transformación Digital</li></a>
            <a href="."><li>Facebook Ads</li></a>
            <a href="."><li>Google Ads</li></a>
            <a href="."><li>Microsoft Office</li></a>
        </ul>
        <ul>
            <a><li> </li></a><br>
            <a href="."><li>Programación en HTML</li></a>
            <a href="."><li>Criptomonedas</li></a>
        </ul>
        <div class="button-verCursos">
            <button class='btn btn-dark'>Ver todos los cursos</button>
        </div> `
    }
    function mostrar6() {
        topSection.innerHTML = `
        <ul>
            <h6>Mecánica</h6>
            <a href="."><li>Transformación Digital</li></a>
            <a href="."><li>Facebook Ads</li></a>
            <a href="."><li>Google Ads</li></a>
            <a href="."><li>Microsoft Office</li></a>
        </ul>
        <ul>
            <a><li> </li></a><br>
            <a href="."><li>Programación en HTML</li></a>
            <a href="."><li>Criptomonedas</li></a>
        </ul>
        <div class="button-verCursos">
            <button class='btn btn-dark'>Ver todos los cursos</button>
        </div> `
    }
    function mostrar7() {
        topSection.innerHTML = `
        <ul>
            <h6>Economía</h6>
            <a href="."><li>Transformación Digital</li></a>
            <a href="."><li>Facebook Ads</li></a>
            <a href="."><li>Google Ads</li></a>
            <a href="."><li>Microsoft Office</li></a>
        </ul>
        <ul>
            <a><li> </li></a><br>
            <a href="."><li>Programación en HTML</li></a>
            <a href="."><li>Criptomonedas</li></a>
        </ul>
        <div class="button-verCursos">
            <button class='btn btn-dark'>Ver todos los cursos</button>
        </div> `
    }
    function mostrar8() {
        topSection.innerHTML = `
        <ul>
            <h6>Cursos Rápidos y Certificados</h6>
            <a href="."><li>Transformación Digital</li></a>
            <a href="."><li>Facebook Ads</li></a>
            <a href="."><li>Google Ads</li></a>
            <a href="."><li>Microsoft Office</li></a>
        </ul>
        <ul>
            <a><li> </li></a><br>
            <a href="."><li>Programación en HTML</li></a>
            <a href="."><li>Criptomonedas</li></a>
        </ul>
        <div class="button-verCursos">
            <button class='btn btn-dark'>Ver todos los cursos</button>
        </div> `
    }

    // ESCUELAS (EN MAIN) //
    categorias.forEach((item, index) => {
        // DOM Principal //
        const containerEscuelas = document.querySelector(".container-escuelas");
        // Creando Instancias //
        const a = document.createElement("a");
        a.setAttribute("href", urls[index]);
        const escuela = document.createElement("div");
        escuela.classList.add("escuela");
        const p = document.createElement("p");
        p.textContent = item;
        // Vincular DOM //
        escuela.appendChild(p);
        a.appendChild(escuela);
        containerEscuelas.appendChild(a);
    });

}, 1500)

/////----- / Navbar -----/////

/////----- Main -----/////

// Información //
// Creando array con datos de iconos e información //
const informacionPieDePortada = [
    {
        imagen: "./images/diploma.png",
        informacion: "Certificacion Nacional e Internacional"
    },
    {
        imagen: "./images/university.png",
        informacion: "Avalados por España y Estados Unidos"
    },
    {
        imagen: "./images/campus.png",
        informacion: "Campus virtual para tu enseñanza"
    },
    {
        imagen: "./images/horario.png",
        informacion: "Horarios flexibles a tu ritmo"
    }
];
// Buscando datos para imprimir por pantalla mediante DOM //
informacionPieDePortada.map((item) => {
    // DOM Principal //
    const pieDePortada = document.querySelector(".container-informacion");
    // Creando Instancias //
    const card = document.createElement("div");
    card.classList.add("card");
    const icono = document.createElement("div");
    icono.classList.add("icono");
    const img = document.createElement("img");
    img.setAttribute("src", item.imagen);
    img.setAttribute("alt", "imagen_icono");
    const informacion = document.createElement("div");
    informacion.classList.add("informacion");
    const h5 = document.createElement("h5");
    h5.textContent = item.informacion;
    // Vincular DOM //
    informacion.appendChild(h5);
    icono.appendChild(img);
    card.appendChild(icono);
    card.appendChild(informacion);
    pieDePortada.appendChild(card);
});

/////----- / Main -----/////

/////----- Register -----/////

// Constantes //
const btnRegistrar = document.querySelector('#registrarse');
const registrarNombres = document.querySelector('.registrar-nombres');
const registrarApellidos = document.querySelector('.registrar-apellidos');
const registrarUbicacion = document.querySelector('.registrar-ubicacion');
const registrarTelefono = document.querySelector('.registrar-telefono');
const registrarUsuario = document.querySelector('.registrar-usuario');
const registrarPassword = document.querySelector('.registrar-password');
const btnLogin = document.querySelector('#ingresar');
const ingresarUsuario = document.querySelector('.ingresar-usuario');
const ingresarPassword = document.querySelector('.ingresar-password');

// Listeners //
btnRegistrar.addEventListener("click", Registrarse);
btnLogin.addEventListener("click", Login);

// Funciones //
function Registrarse(e) {
    e.preventDefault();
    if (registrarNombres.value && registrarApellidos.value && registrarUbicacion.value && registrarTelefono.value && registrarUsuario.value && registrarPassword.value) {
        const nuevoUsuario = [{
            id: Math.floor(Math.random() * 1000000),
            nombre: registrarNombres.value,
            apellido: registrarApellidos.value,
            ubicacion: registrarUbicacion.value,
            telefono: registrarTelefono.value,
            usuario: registrarUsuario.value,
            password: registrarPassword.value
        }]
        const usuario_id = nuevoUsuario[0].id;
        const usuario = {
            'nombre': registrarNombres.value,
            'apellido': registrarApellidos.value,
            'ubicacion': registrarUbicacion.value,
            'telefono': registrarTelefono.value,
            'usuario': registrarUsuario.value,
            'password': registrarPassword.value
            }
        firebase.auth().createUserWithEmailAndPassword(registrarUsuario.value, registrarPassword.value)
        .then((userCredential) => {
            // Signed in
            const user = userCredential.user;
            alert("perfecto")
            console.log(user)
            // ...
        })
        .catch((error) => {
            const errorCode = error.code;
            const errorMessage = error.message;
            alert("algo falló")
            // ..
        });
        firebase.database().ref('usuarios/' + usuario_id).set(usuario);
        firebase.database().ref('usuarios/' + usuario_id).once('value').then(
            function(snapshot){
                    var nombre = snapshot.val().nombre;
                    console.log(nombre);
            }
        )} else {
            alert("Te faltó completar algún campo");
        }
}

firebase.auth().onAuthStateChanged((user) => {
if (user) {
    document.querySelector('#usuario-desconectado').style.display = 'none';
    document.querySelector('#usuario-conectado').style.display = 'initial';

    const user = firebase.auth().currentUser;
    if(user != null) {
        const email_id = user.email;
        document.querySelector('#submit-button').textContent = email_id;
    }

} else {
    document.querySelector('#usuario-desconectado').style.display = 'initial';
    document.querySelector('#usuario-conectado').style.display = 'none';
}});

function Login(e) {
    e.preventDefault();
    if (ingresarUsuario.value && ingresarPassword.value) {
        firebase.auth().signInWithEmailAndPassword(ingresarUsuario.value, ingresarPassword.value)
        .then((userCredential) => {
            // Signed in
            const user = userCredential.user;
            swal({
                title: "Bienvenido/a!",
                icon: "success",
                button: "Aceptar",
                timer: 2000
            });
            setTimeout(() => {
                location.reload();
            }, 2000)
            }
        )
        .catch((error) => {
            var errorCode = error.code;
            var errorMessage = error.message;
            alert(errorCode)
            alert(errorMessage)
        });
    } else {
        alert("Has ingresado mal los datos o no tienes un usuario registrado");
    }
}

function logOut() {
    firebase.auth().signOut().then(() => {
        swal({
            title: "Sesión cerrada con éxito!",
            icon: "success",
            timer: 2000
        });
        setTimeout(() => {
            location.reload();
        }, 2000)
    }).catch((error) => {
        // An error happened.
    });
}



/////----- / Register -----/////

// FIREBASE //

// var usuario_id = (usuario_id === usuario_id ? usuario_id++ : usuario_id);
// var usuario = {
//         'title': 'Conectar Firebase con tu app de JavaScript',
//         }

// firebase.database().ref('usuarios/' + usuario_id).set(usuario);

// firebase.database().ref('usuarios/' + usuario_id).once('value').then(
//     function(snapshot){
//             var nombredsa = snapshot.val().nombredsa;
//             console.log(nombredsa);
//     }
// )

// firebase.database().ref('usuarios/' + usuario_id).once('value').then(
//     function(snapshot){
//             var nombre = snapshot.val().nombre;
//             console.log(nombre);
//     }
// )

// / FIREBASE //