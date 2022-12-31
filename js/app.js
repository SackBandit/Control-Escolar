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
     
}
function mostrarSeccion(){
    const seccionAnterior=document.querySelector('.mostrar');
    if(seccionAnterior){
    seccionAnterior.classList.remove('mostrar');}

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
    boton.classList.add('ocultar');
    if(paso===2){
        Casilla();
    }
    if(paso===3){
        boton.classList.remove('ocultar')
        console.log("Ir al resumen");

    }

    

}