<?php
    /* Uso de Sesiones en PHP */
    session_start(); // Iniciar la sesión

    //SECCION 1 DATOS PERSONALES 
    $_SESSION["boleta"]=$_POST['boleta'];
    $boleta=$_SESSION["boleta"];


    $_SESSION["pass"]=$_POST['password'];
    $password=$_SESSION["pass"];

    $_SESSION["curp"]=$_POST['curp'];
    $curp=$_SESSION["curp"];

    $_SESSION["nombre"]=$_POST['name'];
    $nombre=$_SESSION["nombre"];

    $_SESSION["paterno"]=$_POST['apaterno'];
    $apaterno=$_SESSION["paterno"];

    $_SESSION["materno"]=$_POST['amaterno'];
    $amaterno=$_SESSION["materno"];


    $_SESSION["date"]=$_POST['date'];
    $nacimiento=$_SESSION["date"];

    $_SESSION["born"]=$_POST['estado'];
    $estado=$_SESSION["born"];

    $_SESSION["genero"]=$_POST['genero'];
    $genero=$_SESSION["genero"];

    //SECCION 2 DATOS ACADEMICOS 
    $_SESSION["escuela"]=$_POST['escuelap'];
    $escuela=$_SESSION["escuela"];

    if($escuela=='otro'){
    $_SESSION["opcion"]=$_POST['otro'];
    $escuela=$_SESSION["opcion"];
}

    $_SESSION["promedio"]=$_POST['promedio'];
    $promedio=$_SESSION["promedio"];


    //SECCION 3 CONTACTO

    $_SESSION["calle"]=$_POST['calle'];
    $calle=$_SESSION["calle"];

    $_SESSION["numero"]=$_POST['numero'];
    $numero=$_SESSION["numero"];

    $_SESSION["cp"]=$_POST['cp'];
    $cp=$_SESSION["cp"];

    $_SESSION["colonia"]=$_POST['colonia'];
    $colonia=$_SESSION["colonia"];

    $_SESSION["alcaldia"]=$_POST['alcaldias'];
    $alcaldia=$_SESSION["alcaldia"];

    $_SESSION["phone"]=$_POST['phone'];
    $celular=$_SESSION["phone"];

    $_SESSION["correo"]=$_POST['correo'];
    $correo=$_SESSION["correo"];

      ?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resumen</title>
    <link href="../css/resumen2.css" rel="stylesheet">
    <link rel="shortcut icon" href="../imgs/escom.png">
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
    <h6 class="border-bottom pb-2 mb-0"><?php echo "Hola "."$nombre  $apaterno $amaterno". ", verifica que los datos sean correctos";?></h6>





    <div class="pt-3">
    
        <div class="table-responsive-sm">
        <table class="table">
            <tr ><th colspan="3"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
</svg> Datos Personales</th></tr>
            <tr>
                <td>Boleta: <p><?php echo "$boleta";?><p></td>
                <td colspan="2">Curp: <p><?php echo "$curp";?><p></td>
                
            </tr>
            <tr>
                <td>Nombre(s): <p><?php echo "$nombre";?><p></td>
                <td>Apellido Paterno: <p><?php echo "$apaterno";?><p> </td>
                <td>Apellido Materno: <p><?php echo "$amaterno";?><p></td>
            </tr>
            <tr>
                <td>Fecha de Nacimiento: <p><?php echo "$nacimiento";?><p></td>
                <td>Entidad de Nacimiento:<p><?php echo "$estado";?><p> </td>
                <td>Genero: <p><?php echo "$genero";?><p> </td>
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
                <td>Escuela de Procedencia: <p class="d-inline font-weight-bold"><?php echo "$escuela";?><p> </td>
                <td colspan="">Promedio: <p class="d-inline font-weight-bold"><?php echo "$promedio";?><p> </td>
                
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
                <td>Calle: <p><?php echo "$calle";?><p></td>
                <td>Numero Exterior: <p><?php echo "$numero";?></p></td>
                <td>Código Postal: <p><?php echo "$cp";?></p></td>
                <td>Colonia: <p><?php echo "$colonia";?></p></td>
                <td>Alcaldia: <p><?php echo "$alcaldia";?></p></td>
                
            </tr>
            <tr>
                <td>Télefono: <p><?php echo "$celular";?></p></td>
                <td colspan="5">Correo:  <p><?php echo "$correo";?></p></td>
             
           
            </tr>
        </table>
      </div>




      
    </div>

    <small class="d-inline text-end">
      <a class="btn btn-secondary" href="cuenta.php" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg> Modificar Datos</a>
    </small>

    <small class="d-inline">
      <a class="btn btn-secondary" href="subir.php" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg> Enviar</a>
    </small>
    
  </div>

 
</main>


      <script type="text/javascript" src="../jquery/jquery-3.6.3.min.js"></script>
      <script type="text/javascript" src="../js/resumen.js"></script>
  </body>
</html>
