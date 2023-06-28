function sinlugares(){
Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Lugares insuficientes',
    footer: '<a href="../html/recuperar.php">Inicia Sesión</a>'
  })
}
function showMessageError(){
Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Error al Registrar los datos / Usuario Existente!',
  footer: '<a href="../html/recuperar.php">Inicia Sesión</a>'
})
}


function showMessageExito(){
  Swal.fire(
    'Usuario Registrado!',
    'Puedes descargar tu archivo a continuación',
    'success',
    '<a href="../html/admin.php">Volver</a>' 
  )}


function Founded(){
    Swal.fire(
    'Usuario Encontrado!',
    'Te hemos enviado al correo tu archivo pdf',
    'success',
    '<a href="../html/admin.php">Volver</a>' 
    )}

function noFounded(){
      Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'USUARIO NO ENCONTRADO',
          footer: '<a href="../html/recuperar.php">Inicia Sesión</a>'
         
        })
      }