

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="../jquery/jquery-3.6.3.min.js"></script>
    <link href="../css/resumen2.css" rel="stylesheet">
  <script src="../bootstrap/js/bootstrap.min.js"></script>

  <script src="../js/resumen.js"></script>
    <script src="..//js/alert.js"></script> 
    <title>SubirDatos</title>
</head>


<body>

<header>
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><p class="d-inline">ESCOM IPN</p></a>
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
          <li class="nav-item">
            <a class="nav-link" href="admin.php">Vista Administrador</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
          <button style="background-color: #6f42c1; color:white; border:none;" class="rounded" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>
  
</header>
    
    
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
    session_start(); // Iniciar la sesión para recuperar los datos del resumen

    //SECCION 1 DATOS PERSONALES 
    if(isset($_SESSION["boleta"])){
    $boleta=$_SESSION["boleta"];
    $password=$_SESSION["pass"];
    $curp=$_SESSION["curp"];
    $nombre=$_SESSION["nombre"];
    $apaterno=$_SESSION["paterno"];
    $amaterno=$_SESSION["materno"];
    $nacimiento=$_SESSION["date"];
    $estado=$_SESSION["born"];
    $genero=$_SESSION["genero"];

    //SECCION 2 DATOS ACADEMICOS 
    $escuela=$_SESSION["escuela"];
    if($escuela=='otro'){
    $escuela=$_SESSION["opcion"];}
    $promedio=$_SESSION["promedio"];


    //SECCION 3 CONTACTO
    $calle=$_SESSION["calle"];
    $numero=$_SESSION["numero"];
    $cp=$_SESSION["cp"];
    $colonia=$_SESSION["colonia"];
    $alcaldia=$_SESSION["alcaldia"];
    $celular=$_SESSION["phone"];
    $correo=$_SESSION["correo"];
   
    
    //Consulta de la tabla prueba 
    $sql = "SELECT * FROM prueba";
    if ($result=mysqli_query($conectar,$sql)) {
    //Se obtiene el valor de las filas de la tabla "prueba"
    $rowcount=mysqli_num_rows($result);}

    //PRIMERA RONDA DE ALUMNOS (10:00am)
    if($rowcount<=25){
        $Numsalon=1;
        $horariAsignado='10:00am';
    }else if($rowcount<=50){
        $Numsalon=2;
        $horariAsignado='10:00am';
    }else if($rowcount<=75){
        $Numsalon=3;
        $horariAsignado='10:00am';
    }else if($rowcount<=100){
        $Numsalon=4;
        $horariAsignado='10:00am';
    }else if($rowcount<=125){
        $Numsalon=5;
        $horariAsignado='10:00am';
    }else if($rowcount<=150){
        $Numsalon=6;
        $horariAsignado='10:00am';
        //FIN DEL PRIMER HORARIO(10:45)
        //DESCANSO DE 15 MINUTOS
    }else if($rowcount<=175){
        //SEGUNDA RONDA DE ALUMNOS (11:00am)
        $Numsalon=1;
        $horariAsignado='11:00am';
    }else if($rowcount<=200){
        $Numsalon=2;
        $horariAsignado='11:00am';
    }else if($rowcount<=225){
        $Numsalon=3;
        $horariAsignado='11:00am';
    }else if($rowcount<=250){
        $Numsalon=4;
        $horariAsignado='11:00am';
    }else if($rowcount<=275){
        $Numsalon=5;
        $horariAsignado='11:00am';
    }else if($rowcount<=300){
        $Numsalon=6;
        $horariAsignado='11:00am';
    }else{
        echo "<script>";
        echo "sinlugares();";
        echo "</script>";
        
    }
    //INSERSIÓN DE LOS DATOS EN LA BASE DE DATOS
    $insertarDatos="INSERT INTO prueba VALUES('$boleta','$password','$curp','$nombre','$apaterno','$amaterno','$nacimiento','$estado','$genero','$escuela','$promedio','$calle','$numero','$cp','$colonia','$alcaldia','$celular','$correo','$Numsalon','$horariAsignado')";
    $ejecutar=mysqli_query($conectar,$insertarDatos);
    //SE COMPRUEBA SI SE AGREGARON LOS DATOS A LA BD
    if(!$ejecutar){
        //MENSAJE DE ERROR SI NO SE AGREGARON CORRECTAMENTE
        echo "<script>";
        echo "showMessageError();";
        echo "</script>";
    }else{
        //MENSAJE DE EXITO
        echo "<script>";
        echo "showMessageExito();";
        echo "</script>";
         echo $_SESSION["bole"]=$boleta;
    }
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    
    echo'
    <div class="container" style="text-align:center;">
    <small class="d-inline">
      <a  class="btn btn-success" href="pdf2.php" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">
      <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z"/>
    </svg>CLICK AQUÍ PARA DESCARGAR TU PDF</a>
    </small>
    
    </div>';
    
}else{
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo 'REGRESA AL INICIO';
    
}
        
        
    
    
  


    
?>

</body>
</html>


    