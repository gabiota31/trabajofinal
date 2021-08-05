const form = document.getElementById('form')
const inputs = document.querySelectorAll('#form input')

//expresiones regulares que dicen que tiene que tener los campos, si letras, numeros etc
const expresiones = {
	tema: /^[a-zA-Z0-9\_\-]{1,16}$/, // Letras, numeros, guion y guion_bajo
    fecha: /^(?:3[01]|[12][0-9]|0?[1-9])([\-/.])(0?[1-9]|1[1-2])\1\d{4}$/, //fechas 31.12.3013 01/01/2013 5-3-2013 15.03.2013
	precio: /^\d{1,14}$/ // 1 a 14 numeros.
}

//campos que tiene que estar llenos para enviar el form
const campos = {
    id_estud: false,
	tema: false,
    precio: false 
}

const validarForm = (e) => {
    switch (e.target.name) {
        case "tema":
            validarCampo(expresiones.tema, e.target, 'tema');
        break;
        case "precio":
            validarCampo(expresiones.precio, e.target, 'precio');
        break;
    };
};

const validarCampo = (expresion, input, campo) => {
    if(expresion.test(input.value)){
        document.getElementById(`grupo__${campo}`).classList.remove('grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('grupo-correcto');
        // document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        // document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__${campo} .input-error`).classList.remove('input-error-activo');
        campos[campo] = true
    } else {
        document.getElementById(`grupo__${campo}`).classList.add('grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('grupo-correcto');
        // document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        // document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__${campo} .input-error`).classList.add('input-error-activo');
        campos[campo] = false
    }
}

function validar(){
    if(document.form.id_estud.value == 0 || document.form.id_estud.value== ""){
        console.log("Selecciona Una opción");
        document.form.id_estud.focus();
    }
}


inputs.forEach((inputs) => {
    inputs.addEventListener('keyup', validarForm);
    inputs.addEventListener('blur', validarForm);
});

form.addEventListener("submit", e=>{
    if(campos.tema && campos.precio){
        console.log('todo ok');
        document.getElementById('msjError').classList.remove('msjError-activo');
    } else {
        e.preventDefault();
        document.getElementById('msjError').classList.add('msjError-activo');
    }
}
);














// //forma precaria/sencilla

// const form = document.getElementById('form')

// const nombre = document.getElementById('nombre')
// const apell = document.getElementById('apellido')
// const correo = document.getElementById('correo')
// const tel = document.getElementById('tel')
// const pWarnings = document.getElementById('warnings')


// form.addEventListener("submit", e=>{
//     e.preventDefault()
//     let warnings = ""
//     let entrar = false
//     let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
//     pWarnings.innerHTML = ""
//     if(nombre.value.length < 4){
//         warnings += 'el nombre no es valido <br>'
//         entrar = true
//     }
//     if(apell.value.length < 6){
//         warnings += 'el apellido no es valido <br>'
//         entrar = true
//     }
//     if(!regexEmail.test(correo.value)){
//         warnings += 'el email no es valido <br>'
//         entrar = true
//     }
//     if(tel.value.length < 10){
//         warnings += 'el telefono no es valido <br>'
//         entrar = true
//     }
//     if(entrar) {
//         pWarnings.innerHTML = warnings
//     } 
//     // else {
//     //     pWarnings.innerHTML = "Enviado"
//     // }
// }

// )