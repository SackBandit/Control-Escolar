      
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

       $consulta="SELECT *FROM prueba";
       $ejecutarConsulta= mysqli_query($conectar,$consulta);
       $verFilas = mysqli_num_rows($ejecutarConsulta);
       $fila= mysqli_fetch_array($ejecutarConsulta);
       

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../imgs/escom.png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link href="../css/resumen2.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Administrador</title>
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
    <br>
    <br>
    <br>
    
    <div class="container">
        <div>
        <small class="d-inline">
      <a class="btn btn-success" href="cuenta.php" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
</svg> Agregar Usuario</a>
    </small>
         </div>
         <div>
    <table class="table table-dark table-striped">
        <tr>
            <th>Boleta</th>
            <th>Nombre(s)</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Grupo Asignado</th>
            <th>Horario</th>
            <th></th>
            <th></th>
        </tr>
          
          <?php
         
          if($fila==0){
            echo ' <tr><td colspan=8>SIN REGISTROS</td></tr>';
          }else{
          for($i=0; $i<=$fila;$i++){
           
            ?>
        <tr>
          
            <td><?php echo $fila['boleta'] ?></td>
            <td><?php echo $fila['nombres']?></td>
            <td><?php echo $fila['apellidoPaterno']?></td>
            <td><?php echo $fila['apellidoMaterno']?></td>
            <td><?php echo $fila['salonAsignado']?></td>
            <td><?php echo $fila['horarioAsignado']?></td>
            <td> <a class="btn btn-danger" href="eliminar.php?id=<?php echo $fila['boleta'] ?>" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
</svg>Eliminar</a></td>
            <td> <a class="btn btn-secondary" href="actualizar.php?id=<?php echo $fila['boleta'] ?>" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg>Editar</a></td>
            
           
        </tr>
        <?php
        $fila= mysqli_fetch_array($ejecutarConsulta);
          }
        }
        ?>
        
    </table>
    </div>
    </div>
   
  <script type="text/javascript" src="../jquery/jquery-3.6.3.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>

  <script src="../js/resumen.js"></script>
</body>
</html>