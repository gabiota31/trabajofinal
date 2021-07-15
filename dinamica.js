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
    bClases.style.backgroundColor= 'black'
    bEstud.style.backgroundColor= 'white'
}

function cambiaEstud(){
    cardsClases.style.display = 'none'
    cardsEstud.style.display = 'block'
    bEstud.style.backgroundColor= 'black'
    bClases.style.backgroundColor= 'white'
}

bClases.addEventListener('click',cambiaClases)
bEstud.addEventListener('click',cambiaEstud)


