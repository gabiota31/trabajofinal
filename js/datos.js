var botonEditar = document.getElementById('editar')
var vEditar = document.getElementById('v-editar')

var btnBorrar = document.getElementById('borrar')
console.log(btnBorrar)

var prueba = document.getElementById('prueba')

function displayEditar() {
    vEditar.textContent='ventana de editar'
}

botonEditar.addEventListener('click', displayEditar)

btnBorrar.addEventListener('click', function alertaBorrado() {
    alert('¿Quiere borrar este registro?')
} )

prueba.addEventListener('click', function alertaBorrado() {
    alert ('¿Quiere borrar este registro?')
} )

////////////////////////////////////////////////////////////////////////////////////////////////////////

var bNuevEstud = document.getElementById('b-nuev-estud')
var contenedor = document.getElementById('contenedor')
var submit = document.getElementById('submit')

function nuevEstud() {
    contenedor.style.display = 'inline'
}

// function cerrarVentana(){
//     contenedor.style.display = 'none'
// }

bNuevEstud.addEventListener('click', nuevEstud)
// submit.addEventListener('click', cerrarVentana)