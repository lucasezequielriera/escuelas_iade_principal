'use strict'

/////----- Register -----/////

// Constantes //
const btnRegistrar = document.querySelector('#registrarse');
const registrarNombres = document.querySelector('.registrar-nombres');
const registrarApellidos = document.querySelector('.registrar-apellidos');
const registrarUbicacion = document.querySelector('.registrar-ubicacion');
const registrarTelefono = document.querySelector('.registrar-telefono');
const registrarUsuario = document.querySelector('.registrar-usuario');
const registrarPassword = document.querySelector('.registrar-password');
const ingresarUsuario = document.querySelector('.ingresar-usuario');
const ingresarPassword = document.querySelector('.ingresar-password');

// Listeners //
btnRegistrar.addEventListener("click", Registrarse);

// Funciones //
function Registrarse(e) {
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
            Swal.fire({
                text: "¡Usuario creado con éxito!",
                icon: "success",
                timer: 2000
            });
            // Limpiar values de inputs //
            registrarNombres.value = '';
            registrarApellidos.value = '';
            registrarUbicacion.value = '';
            registrarTelefono.value = '';
            registrarUsuario.value = '';
            registrarPassword.value = '';
            // ...
            setTimeout(() => {
                location.reload();
            }, 2000)
        })
        .catch((error) => {
            console.log(error)
            const errorMessage = error.message;
            Swal.fire({
                text: "¡Algunos datos son incorrectos!",
                icon: "error",
                timer: 2000,
                showConfirmButton: false
            });
        });
        firebase.database().ref('usuarios/' + usuario_id).set(usuario);
        // firebase.database().ref('usuarios/' + usuario_id).once('value').then(
        //     function(snapshot){
        //             var nombre = snapshot.val().nombre;
        //     }
        // )
        } else {
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
        const uid = user.uid
        console.log(user)
        console.log(uid)
        document.querySelector('#nombre-de-usuario').textContent = email_id;
    }

} else {
    document.querySelector('#usuario-desconectado').style.display = 'initial';
    document.querySelector('#usuario-conectado').style.display = 'none';
    console.log(user)
}});

function Login() {
    if (ingresarUsuario.value && ingresarPassword.value) {
        firebase.auth().signInWithEmailAndPassword(ingresarUsuario.value, ingresarPassword.value)
        .then((userCredential) => {
            // Signed in
            const user = userCredential.user;
            localStorage.setItem('uidKey', user)
            Swal.fire({
                text: "Bienvenido/a a Escuelas iade!",
                icon: "success",
                showCancelButton: false,
                showConfirmButton: false,
                timer: 2000,
            });
            setTimeout(() => {
                location.reload();
            }, 2000)
            }
        )
        .catch((error) => {
            Swal.fire({
                icon: 'error',
                text: error.message,
                showCancelButton: false,
                showConfirmButton: false,
                timer: 2000
            })
            // const errorCode = error.code;
        });
    } else {
        Swal.fire({
            icon: 'error',
            text: "No has ingresado datos en algun de los dos campos",
            showCancelButton: false,
            showConfirmButton: false,
            timer: 1500
        })
    }
}

function logOut() {
    firebase.auth().signOut().then(() => {
        Swal.fire({
            text: 'Estás seguro/a de cerrar sesión?',
            icon: 'warning',
            showDenyButton: true,
            showCancelButton: true,
            showConfirmButton: false,
            denyButtonText: 'Cerrar sesión',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isDenied) {
                Swal.fire({
                    title: 'Sesión cerrada con éxito!',
                    icon: 'success',
                    timer: 2000,
                    showCancelButton: false,
                    showConfirmButton: false
                })
                setTimeout(() => {
                    location.reload();
                }, 2000);
            };
        });
    }).catch((error) => {
        // An error happened.
    });
}

/////----- / Register -----/////

// Mostrar ventana de registrarse //
const ventanaRegistrarse = document.querySelector('#ventanaRegistrarse');
const botonVentanaRegistrarse = document.querySelector('#botonVentanaRegistrarse');

$(document).ready(function() {
    $('#botonVentanaRegistrarse').click(function() {
        $("#ventanaRegistrarse").slideToggle();
    });
});