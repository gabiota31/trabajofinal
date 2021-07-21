var cardsEstud = document.getElementById('cardsEstud')
var cardsClases = document.getElementById('cardsClases')

var bClases = document.getElementById('b-clases')
var bEstud = document.getElementById('b-estud')

function alerta(){
    alert('buenas')
}

function cambiaClases(){
    cardsEstud.style.display = 'none'
    cardsClases.style.display = 'block'
    bClases.style.backgroundColor= 'rgb('+ [215,224,13].join(',') + ')'
    bClases.style.borderWidth = '1.5px'
    // bClases.style.border = 'none'
    bEstud.style.backgroundColor= 'white'
    // bEstud.style.borderStyle = 'solid'
    // bEstud.style.borderColor = 'olive'
    bEstud.style.borderWidth = '1px'
}

function cambiaEstud(){
    cardsClases.style.display = 'none'
    cardsEstud.style.display = 'block'
    bEstud.style.backgroundColor= '#d7e00d'
    bEstud.style.borderWidth = '1.5px'
    // bEstud.style.border = 'none'
    bClases.style.backgroundColor= 'white'
    // bClases.style.borderStyle = 'solid'
    // bClases.style.borderColor = 'olive'
    bClases.style.borderWidth = '1px'
}

bClases.addEventListener('click',cambiaClases)
bEstud.addEventListener('click',cambiaEstud)


