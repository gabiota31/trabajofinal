var botonEditar = document.getElementById('editar')
var vEditar = document.getElementById('v-editar')

function displayEditar() {
    vEditar.textContent='ventana de editar'
}

botonEditar.addEventListener('click',displayEditar)
