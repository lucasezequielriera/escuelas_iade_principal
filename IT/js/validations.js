'use strict'

// Consts (buttons) //
const buttonBuyCourse = document.querySelectorAll('.compraDirecta');
const buttonCartCourse = document.querySelectorAll('.addCarrito');

// Listeners //
const hacerClick = (e) => {
    // Son 2 comprobaciones por cada button //
    const searchedWordInArray =  Array.from(e.path[1].classList).indexOf('compraDirecta') // IMPROTANTE // Si no es el uno es el otro ARRAY
    const searchedWordInClassName = (e.target.className).includes('compraDirecta') // IMPORTANTE // Si no es el uno es el otro WORDS

    if (searchedWordInArray.length >= 1 || searchedWordInClassName >= 1) {
        alert("Estas queriendo comprar")
    } else {
        alert("Estas queriendo sumar al carrito")
    }
}

// Mapeo de buttons con classes "compraDirecta" y "addCarrito" //
buttonBuyCourse.forEach(button => {
    button.addEventListener('click', hacerClick)
})

buttonCartCourse.forEach(button => {
    button.addEventListener('click', hacerClick)
})