<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
    <script src="..//js/alert.js"></script> 
    <title>Document</title>
</head>
<body>
    
</body>
</html>

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
      $sql="DELETE FROM prueba WHERE boleta='$codigo'";
      $query=mysqli_query($conectar,$sql);
      if($query){
        
      
      Header("Location: admin.php");}
?>