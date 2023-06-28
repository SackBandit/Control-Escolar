const formulario= document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones={//Esta funcionn hace expresiones regulares que indican las especificaciones de cada campo
    boleta: /(^(PE|PP|pp|pe)[0-9]{8}$)|(^[0-9]{10}$)/, //10 dijitos del 0 al 9
	curp:/^[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}$/,
    name: /^[a-zA-ZÁ-ÿ\s]{1,40}$/,
	apaterno: /^[a-zA-ZÁ-ÿ\s]{1,40}$/,
	amaterno: /^[a-zA-ZÁ-ÿ\s]{1,40}$/,
    password:/^.{4,12}$/,
    correo:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    phone: /^[0-9]{7,10}$/,
	promedio:/^([0-9](\.[0-9][0-9]?)?)$|^(10)$/,
	colonia:/^[a-zA-ZÁ-ÿ\s]{1,40}$/,
	numero:/^[0-9]+$/,
	cp:/^[0-9]{5}$/,
	calle:/^[a-zA-Z\.]{4,20}$/
}
const campos = {
	boleta: false,
	curp: false,
	name: false,
	apaterno: false,
	amaterno: false,
	password: false,
	correo: false,
	phone: false,
	colonia: false,
	numero: false,
	cp: false,
	calle: false
}
const validarFormulario = (e) => {
	switch (e.target.name) {//name de los input del formulario
		case "boleta":
			validarCampo(expresiones.boleta, e.target, 'boleta');
		break;
		case "curp":
			validarCampo(expresiones.curp, e.target, 'curp');
		break;
		case "password":
			validarCampo(expresiones.password, e.target, 'password');
		break;
		case "name":
			validarCampo(expresiones.name, e.target, 'name');
		break;
		case "apaterno":
			validarCampo(expresiones.apaterno, e.target, 'apaterno');
		break;
		case "amaterno":
			validarCampo(expresiones.amaterno, e.target, 'amaterno');
		break;
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
		case "phone":
			validarCampo(expresiones.phone, e.target, 'phone');
		break;
		case "promedio":
			validarCampo(expresiones.promedio, e.target, 'promedio');
		break;
		case "colonia":
			validarCampo(expresiones.colonia, e.target, 'colonia');
		break;
		case "numero":
			validarCampo(expresiones.numero, e.target, 'numero');
		break;
		case "cp":
			validarCampo(expresiones.cp, e.target, 'cp');
		break;
		case "calle":
			validarCampo(expresiones.calle, e.target, 'calle');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} .warn`).classList.remove('active');
		document.querySelector(`#grupo__${campo} .checado`).classList.add('active');		
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} .checado`).classList.remove('active');
		document.querySelector(`#grupo__${campo} .warn`).classList.add('active');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);//cada que levantas la tecla
	input.addEventListener('blur', validarFormulario);//cada que des un clic afuera del input
});

formulario.addEventListener('submit', (e) => {/*esta funcion es para el boton enviar*/
	/*Esta linea esta parcialmente puesta para que no se envie nada con el boton de enviar, hay que cambiar*/
	const terminos = document.getElementById('terminos');
	if(campos.boleta && campos.curp && campos.name && campos.apaterno && campos.amaterno && campos.password && campos.correo && campos.phone && campos.promedio && campos.colonia && campos.numero && campos.cp && campos.calle && terminos.checked ){
		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} else {
		e.preventDefault();
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});