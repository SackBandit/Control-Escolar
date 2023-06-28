const formulario= document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');


const expresiones={//Esta funcionn hace expresiones regulares que indican las especificaciones de cada campo
    boleta: /^[0-9]{10,10}$/, //10 dijitos del 0 al 9
    nombre: /^[a-zA-ZÁ-ÿ\s]{1,40}$/,
    password:/^.{4,12}$/,
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    telefono: /^\d{7,10}/
}

const validarFormulario = (e) =>{
    switch(e.target.name){
        case "name":
            if(expresiones.nombre.test(e.target.value)){
                document.getElementById('name').classList.remove('formulario__grupo-incorrecto');
                document.getElementById('name').classList.add('formulario__grupo-correcto');
            }else{
                document.getElementById('name').classList.add('formulario__grupo-incorrecto');
            }
            break;
        
        }    
}

inputs.forEach((input)=>{
    input.addEventListener('keyup', validarFormulario); //el keyup sirve para que cada ves que escribo un elemento en el input se revise (tecla levantada)
    input.addEventListener('blur', validarFormulario);//el blur para algun click fuera
});

//Al parecer hay que validar todos los campos para que usemos esta función
/*
formulario.addEventListener('submit', (e) => {
    e.preventDefault();//es para evitar que se guarden los datos sin que estén bien llenos
});

*/

