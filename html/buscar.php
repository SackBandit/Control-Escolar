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


      $usuario=$_POST['boleta'];
      $passwor=$_POST['password'];
   
      //SE COMPRUEBA SI LOS DATOS DEL FORMULARIO SE ENCUENTRAN EN LA BD
      $consulta="SELECT * FROM prueba WHERE boleta='$usuario'";
      $resultado=mysqli_query($conectar,$consulta);
      session_start();
      // FILAS DEVUELVE UN 1 SI ENCONTRÓ AL USUARIO, Y UN 0 SI NO LO ENCONTRÓ
      $filas=mysqli_num_rows($resultado);
      $_SESSION["alert"]=$filas;
    

      if($filas){
        //Se encontró al usuario, así que extraemos todos sus campos
        $consulta2="SELECT *FROM prueba  WHERE boleta='$usuario'";
        $ejecutarConsulta= mysqli_query($conectar,$consulta2);
        $verFilas = mysqli_num_rows($ejecutarConsulta);
        $fila= mysqli_fetch_array($ejecutarConsulta);
    
     // Iniciar la sesión para recuperar los datos del resumen

    //SECCION 1 DATOS PERSONALES 
   
    
          $_SESSION["bol"]=$fila['boleta'];
          $_SESSION["curp"]= $fila['curp'];
          $_SESSION["name"]= $fila['nombres'];
          $_SESSION["ap"]= $fila['apellidoPaterno'];
          $_SESSION["am"]= $fila['apellidoMaterno'];
          $_SESSION["fn"]= $fila['fechaNacimiento'];
          $_SESSION["en"]= $fila['estadoNacimiento'];
          $_SESSION["gen"]= $fila['genero'];
          $_SESSION["es"]= $fila['escuela'];
          $_SESSION["prom"]= $fila['promedio'];
          $_SESSION["calle"]= $fila['calle'];
          $_SESSION["num"]= $fila['numeroExt'];
          $_SESSION["cp"]= $fila['cp'];
          $_SESSION["col"]= $fila['colonia'];
          $_SESSION["alca"]= $fila['alcaldia'];
          $_SESSION["cel"]= $fila['celular'];
          $_SESSION["correo"]= $fila['correo'];
          $_SESSION["salon"]= $fila['salonAsignado'];
          $_SESSION["horario"]= $fila['horarioAsignado'];

          //CREACIÓN DEL PDF PARA SER ENVIADO
    
          //FIN DE LA CREACION Y ENVIO DEL PDF

         
         Header("Location:pdf.php"); 
    }else{
        
         Header("Location:recuperar.php");
        
        

    }

    ?>
  

    
</body>
</html>