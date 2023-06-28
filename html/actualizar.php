<?php
    //ACCESO A LA BD
    $user="root";
    $pass="root";
    $server="localhost";
    $basededatos="registro";
  
    //SE COMPRUEBA SI SE CONECTÓ CORRECTAMENTE
       $conectar=mysqli_connect($server,$user,$pass,$basededatos);
       if(!$conectar){
           echo "Error en la conección con el servidor";
       } 

      $codigo=$_GET['id'];
      $sql="SELECT * FROM prueba WHERE boleta='$codigo'";
      $query=mysqli_query($conectar,$sql);
      $fila= mysqli_fetch_array($query);
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resumen</title>
    <link href="../css/resumen2.css" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    
  </head>
  <body class="bg-light">
    
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ESCOM IPN</a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Conócenos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Oferta Educativa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Escomunidad</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">SSEIS</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button style="background-color: #6f42c1; color:white; border:none;" class="rounded" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>



<main class="container">





  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm" style="background-color:#6f42c1;">
    <img class="me-3" src="../imgs/escomwhite.png" alt="" width="60" height="50">
    <div class="lh-1">
      <h1 class="h6 mb-0 text-white lh-1">Datos del Registro</h1>
      <small>2023</small>
    </div>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">Datos del Alumno: <?php echo $fila['nombres'].' '.$fila['apellidoPaterno'].' '.$fila['apellidoMaterno']?> </h6>


<form action="update.php" method="POST">
    <div class="pt-3">
    
    <div class="table-responsive-sm">
    <table class="table">
        <tr ><th colspan="3"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
  <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z"/>
  <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z"/>
</svg> Datos de Asignación</th></tr>
        <tr>
            <td>Salón Asignado: <input type="text" name="salon" class="form-control" value="<?php echo $fila['salonAsignado']?>"></td>
            <td colspan="2">Horario Asignado: <input name="horario" type="text" class="form-control" value="<?php echo $fila['horarioAsignado']?>"></td>

    </table>
  </div>

  
  
</div>


    <div class="pt-3">
    
        <div class="table-responsive-sm">
        <table class="table">
            <tr ><th colspan="3"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
</svg> Datos Personales</th></tr>
       
            <tr>
                <td>Boleta:<input name="boleta" type="text" class="form-control" value="<?php echo $fila['boleta']?>"></td>
                <td colspan="2">Curp: <input name="curp" type="text" class="form-control" value="<?php echo $fila['curp']?>"></td>
                
            </tr>
            <tr>
                <td>Nombre(s): <input type="text" name="name" class="form-control" value="<?php echo $fila['nombres']?>"></td>
                <td>Apellido Paterno:<input type="text" name="apaterno" class="form-control" value="<?php echo $fila['apellidoPaterno']?>"></td>
                <td>Apellido Materno:<input type="text" name="amaterno" class="form-control" value="<?php echo $fila['apellidoMaterno']?>"></td>
            </tr>
            <tr>
                <td>Fecha de Nacimiento: <input type="text" name="date" class="form-control" value="<?php echo $fila['fechaNacimiento']?>"></td>
                <td>Entidad de Nacimiento:<input type="text" name="estado" class="form-control" value="<?php echo $fila['estadoNacimiento']?>"></td>
                <td>Genero: <input type="text" class="form-control" name="genero" value="<?php echo $fila['genero']?>"> </td>
            </tr>
        </table>
      </div>
    
      
      
    </div>
    




    <div>
      <div class="table-responsive-lg">
        <table class="table">
            <tr><th colspan="3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
</svg> Datos Académicos</th></tr>
            <tr>
                <td>Escuela de Procedencia: <input name="escuelap" type="text" class="form-control" value="<?php echo $fila['escuela']?>"></td>
                <td colspan="">Promedio: <input name="promedio" type="text" class="form-control" value="<?php echo $fila['promedio']?>"></td>
                
            </tr>
        </table>
      </div>
      
    </div>





    <div class="">
      <div class="table-responsive-xl">
        <table class="table">
            <tr><th colspan="5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z"/>
</svg> Datos De Contacto</th></tr>
            <tr>
                <td>Calle:<input type="text" name="calle" class="form-control" value="<?php echo $fila['calle']?>"></td>
                <td>Numero Exterior: <input name="numero" type="text" class="form-control" value="<?php echo $fila['numeroExt']?>"></td>
                <td>Código Postal:<input  name="cp" type="text" class="form-control" value="<?php echo $fila['cp']?>"></td>
                <td>Colonia: <input type="text" name="colonia" class="form-control" value="<?php echo $fila['colonia']?>"></td>
                <td>Alcaldia: <input type="text" name="alcaldias" class="form-control" value="<?php echo $fila['alcaldia']?>"></td>
                
            </tr>
            <tr>
                <td>Télefono: <input type="text" name="phone" class="form-control" value="<?php echo $fila['celular']?>"></td>
                <td colspan="5">Correo:  <input name="correo" type="text" class="form-control" value="<?php echo $fila['correo']?>"></td>
             
           
            </tr>
        </table>
      </div>
       <input type="submit" class="btn btn-secondary" value="Actualizar">
       
      </form>


      
    </div>
       <br>
    <small class="d-inline text-end">
      <a class="btn btn-secondary" href="admin.php" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg>Ir atrás</a>
    </small>

    
    
  </div>

 
</main>


      <script type="text/javascript" src="../jquery/jquery-3.6.3.min.js"></script>
      <script type="text/javascript" src="../js/resumen.js"></script>
  </body>
</html>
