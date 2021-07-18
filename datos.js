var botonEditar = document.getElementById('editar')
var vEditar = document.getElementById('v-editar')

function displayEditar() {
    vEditar.textContent='ventana de editar'
}

botonEditar.addEventListener('click', displayEditar)


var btnBorrar = document.getElementById('borrar')
console.log(btnBorrar)


btnBorrar.addEventListener('click', function alertaBorrado() {
    alert('¿Quiere borrar este registro?')
} )

var prueba = document.getElementById('prueba')


prueba.addEventListener('click', function alertaBorrado() {
    alert ('¿Quiere borrar este registro?')
} )