let paso=1;
let op;
document.addEventListener('DOMContentLoaded',function(){
    iniciarApp();
});
function iniciarApp(){
    
    mostrarSeccion();
    tabs();
    boto();
    Casilla();
    botonOn();
     
}
function mostrarSeccion(){
    const seccionAnterior=document.querySelector('.mostrar');
    if(seccionAnterior){
    seccionAnterior.classList.remove('mostrar');
    }
    
    const seccion= document.querySelector(`#paso-${paso}`);
    seccion.classList.add('mostrar');
    
   
    
}
function tabs(){
 const botones=document.querySelectorAll('.navs button');
 botones.forEach( boton=>{
        boton.addEventListener('click',function(e){
        paso= parseInt(e.target.dataset.paso);
        
        boto();
        mostrarSeccion();
        botonOn();
     
        
    });
 })
}
function Casilla(){
    const paso3=document.querySelector('#escuela');
    const newcampo=document.querySelector('#newcampo');  
    const newlabel=document.querySelector('#labell');  
    paso3.addEventListener("change", cambiar=>{
        op= paso3.options[paso3.selectedIndex].text; 
        if(op==="Otro.."){
            newcampo.classList.remove('ocultar');
            newlabel.classList.remove('ocultar');
            console.log(op);}
            
            else{
                newcampo.classList.add('ocultar');
                newlabel.classList.add('ocultar');
                console.log("HOLA");}
            
    });

}

function boto(){
    const boton=document.querySelector('#siguiente');
    boton.disabled=true;
    if(paso===2){
        Casilla();
        botonOn();
     
    }
    if(paso===3){
        boton.disabled=false;
        console.log("Ir al resumen");

    }


}

function botonOn(){
    const b1=document.querySelector('#b1');
    const b2=document.querySelector('#b2');
    const b3=document.querySelector('#b3');
    if(paso===1){
        b1.classList.add('colorOn');
        b2.classList.remove('colorOn');
        b3.classList.remove('colorOn');
    }
    if(paso===2){
        b2.classList.add('colorOn');
        b1.classList.remove('colorOn');
        b3.classList.remove('colorOn');
        
    }
    if(paso===3){
        b3.classList.add('colorOn');
        b1.classList.remove('colorOn');
        b2.classList.remove('colorOn');
    }

}
