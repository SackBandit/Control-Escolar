<?php

  //ACCESO A LA BD
  $user="root";
  $pass="root";
  $server="localhost";
  $basededatos="registro";

  //SE COMPRUEBA SI SE CONECTÓ CORRECTAMENTE
     $conectar=mysqli_connect($server,$user,$pass,$basededatos);
     if(!$conectar){
         echo "Error en la conección con el servidor";}

    //SECCION 0 DATOS DEL SALON
    $salon=$_POST['salon'];
    $horario=$_POST['horario'];
    //SECCION 1 DATOS PERSONALES 
    $boleta=$_POST['boleta'];
    $curp=$_POST['curp'];
    $nombre=$_POST['name'];
    $paterno=$_POST['apaterno'];
    $materno=$_POST['amaterno'];
    $date=$_POST['date'];
    $estado=$_POST['estado'];
    $genero=$_POST['genero'];
    

    //SECCION 2 DATOS ACADEMICOS 
    $escuela=$_POST['escuelap'];
    $promedio=$_POST['promedio'];


    //SECCION 3 CONTACTO
    $calle=$_POST['calle'];
    $numero=$_POST['numero'];
    $cp=$_POST['cp'];
    $colonia=$_POST['colonia'];
    $alcaldia=$_POST['alcaldias'];
    $phone=$_POST['phone'];
    $correo=$_POST['correo'];
    
    $sql="UPDATE prueba SET boleta='$boleta',curp='$curp',nombres='$nombre',apellidoPaterno='$paterno',apellidoMaterno='$materno',fechaNacimiento='$date',estadoNacimiento='$estado',genero='$genero',escuela='$escuela',promedio='$promedio',calle='$calle',numeroExt='$numero',cp='$cp',colonia='$colonia',alcaldia='$alcaldia',celular='$phone',correo='$correo',salonAsignado='$salon',horarioAsignado='$horario' WHERE boleta='$boleta' ";
    $query=mysqli_query($conectar,$sql);
    if($query){
      Header("Location:admin.php");
    }else{
      echo 'NO SE ACTUALIZÓ';
    }

      ?>
