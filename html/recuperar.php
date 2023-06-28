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
       session_start();
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imgs/escom.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
    <script src="..//js/alert.js"></script> 
    <link href="../css/resumen2.css" rel="stylesheet">
    <style>
        body{
            overflow: hidden;
        }
    </style>
    
    <title>Index</title>
</head>
<body>
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



    <div class="centrar">
    <div class="container row">
    <h1 style="text-align: center;">Identificate</h1>
        <div class="centrar1">
    <form class="formulario" method="POST" action="buscar.php">
            <div class="w-50 col col-m-12">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                  </svg>
            <label for="boleta">Boleta</label>
            <input type="text" placeholder="Número de Boleta" name="boleta" class="form-control" required>
            </div>
            <div class="w-50 col col-m-12">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-lock2" viewBox="0 0 16 16">
                    <path d="M8 5a1 1 0 0 1 1 1v1H7V6a1 1 0 0 1 1-1zm2 2.076V6a2 2 0 1 0-4 0v1.076c-.54.166-1 .597-1 1.224v2.4c0 .816.781 1.3 1.5 1.3h3c.719 0 1.5-.484 1.5-1.3V8.3c0-.627-.46-1.058-1-1.224z"/>
                    <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                  </svg>
            <label for="password">Contraseña</label>
            <input type="password" placeholder="Tú contraseña" name="password" class="form-control"required>
            </div>
        <br>
        <div class=" w-50 col col-m-12">
        <input type="submit" class="btn btn-primary  col w-100 " value="Solicitar" >
        </div>
       
    </form>
    <div class="crear">
       <a href="cuenta.php">¿No tienes cuenta? Crear Cuenta</a> 
    </div>
</div>
</div>

</div>
    <?php 
  
   if(isset($_SESSION["alert"])){ 
     $resultado=$_SESSION["alert"];
    if($resultado==1){
      echo "<script>";
      echo "Founded();";
      echo "</script>";
    }else{
      echo "<script>";
      echo "noFounded();";
      echo "</script>";
    }
    }
    session_destroy()

    ;?>
    <script type="text/javascript" src="../jquery/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/resumen.js"></script>
</body>
</html>