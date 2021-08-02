'use strict'

// Validación de sesión //
const estadoSesion = localStorage.getItem('sesion')

firebase.auth().onAuthStateChanged( user => {
  if (user) {
      user = user.R
    localStorage.setItem('sesion', user)
  } else {
      localStorage.setItem('sesion', user) }
})

// Consts (buttons) //
const buttonBuyCourse = document.querySelectorAll('.compraDirecta');
const buttonCartCourse = document.querySelectorAll('.addCarrito');

// Function de action al hacer click en buttons //
const hacerClick = (e) => {
    // Son 2 comprobaciones por cada button //
    const searchedWordInArray =  Array.from(e.path[1].classList).indexOf('compraDirecta') // IMPORTANTE // Si no es el uno es el otro ARRAY
    const searchedWordInClassName = (e.target.className).includes('compraDirecta') // IMPORTANTE // Si no es el uno es el otro WORDS
    // Si las comprobaciones de obtención de button y la sesión está iniciada, compra o add al carrito //
    if (estadoSesion !== 'null') {
        if (searchedWordInArray.length >= 1 || searchedWordInClassName >= 1) {
            console.log("Estas queriendo comprar")
        } else {
            console.log("Estas queriendo sumar al carrito")
        }
    }
}

// La página inicia agregando las clases o no, depende la sesión //
buttonBuyCourse.forEach( button => {
    button.addEventListener('click', hacerClick)
    if (estadoSesion === 'null') {
        button.setAttribute('data-bs-toggle', 'modal')
        button.setAttribute('data-bs-target', '#exampleModal')
    }
}, [estadoSesion])
buttonCartCourse.forEach( button => {
    button.addEventListener('click', hacerClick)
    if (estadoSesion === 'null') {
        button.setAttribute('data-bs-toggle', 'modal')
        button.setAttribute('data-bs-target', '#exampleModal')
    }
}, [estadoSesion])
