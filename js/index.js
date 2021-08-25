'use strict'

///////////////////////////////////////////////////////////////////////----- Main -----///////////////////////////////////////////////////////////////////////

// Url actual //
const urlActual = location.pathname;

/////----- Modal Window to Search -----/////

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

/////-----//  Modal Window to Search -----/////

/////----- Navbar -----/////

// fetch('./js/datos.js')
// .then( resp => resp.json() )
// .then( data => {
//     localStorage.setItem('data', JSON.stringify(data))
//     getData(data);
// })

// Principal DOM //
const containerScroll = document.querySelector('.container-scroll');

// // ESCUELAS (EN MAIN) //
// DOM Principal //
const containerEscuelas = document.querySelector(".container-escuelas");

// Consts //
const categoria = document.getElementsByClassName('categoria');
const botonCursos = document.querySelector('.dropdown-toggle');
const topSection = document.querySelector('.container-information-top');
const bottomSection = document.querySelector('.container-information-bottom');
const informacionEscuela = document.querySelector('.info-escuela').innerHTML;


// Listeners //
categoria.map((num) => {
    console.log(num)
    categoria[num].addEventListener("mouseover", mostrar)
});

// Add slideDown animation to Bootstrap dropdown when expanding.
$('.dropdown').on('show.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

// Add slideUp animation to Bootstrap dropdown when collapsing.
$('.dropdown').on('hide.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});

// Functions //
function mostrar() {
    if (num.path[0].id === "IT") {
        alert("Esto es IT")
    } else {
        alert("Esto no es IT")
    }
    topSection.innerHTML = informacionEscuela;
}

/////----- / Navbar -----/////

/////----- Formulario de Contacto para Comprar -----/////

// Consts //
const formulario = document.querySelector("#contact-form");
const inputSpam = document.querySelector("#escondido");
const inputNombre = document.querySelector("#nombre");
const inputEmail = document.querySelector("#email");
const inputProvincia = document.querySelector("#provincia");
const inputTelefono = document.querySelector("#telefono");
const inputDiasContacto = document.querySelector("#dias-contacto");
const inputHorarioContacto = document.querySelector("#horario-contacto");
const inputCursoInteres = document.querySelector("#curso-interes");

// Listeners //
formulario.addEventListener("submit", validarSpam)

// Functions //
function validarSpam(event) {
    if (inputSpam.value.length >= 1) {
        return vaciarInputs(event);
    } else {
        console.log("formulario sin spam")
    }
}
function vaciarInputs(event) {
    event.preventDefault()
    inputNombre.value = '';
    inputEmail.value = '';
    inputProvincia.value = '';
    inputTelefono.value = '';
    inputDiasContacto.value = '';
    inputHorarioContacto.value = '';
    inputCursoInteres.value = '';
}

/////----- / Formulario de Contacto -----/////

/////////////////////////////////////////////////////////////////////----- / Main -----//////////////////////////////////////////////////////////////////////