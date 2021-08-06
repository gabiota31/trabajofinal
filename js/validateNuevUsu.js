const form = document.getElementById('form')
const inputs = document.querySelectorAll('#form input')


const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

const campos = {
    usuario: false,
	nombre: false,
	apellido: false,
	correo: false,
    pass: false,
    tel: false 
}

const validarForm = (e) => {
    switch (e.target.name) {
        case "usuario":
            validarCampo(expresiones.usuario, e.target, 'usuario');
        break;
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
        break;
        case "apellido":
            validarCampo(expresiones.nombre, e.target, 'apellido');
        break;
        case "correo":
            validarCampo(expresiones.correo, e.target, 'correo');
        break;
        case "tel":
            validarCampo(expresiones.telefono, e.target, 'tel');
        break;
        case "pass":
            validarCampo(expresiones.password, e.target, 'pass');
        break;};
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

inputs.forEach((inputs) => {
    inputs.addEventListener('keyup', validarForm);
    inputs.addEventListener('blur', validarForm);
});

form.addEventListener("submit", e=>{
    if(campos.usuario && campos.nombre && campos.apellido && campos.correo && campos.pass && campos.tel){
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