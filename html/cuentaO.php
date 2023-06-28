<?php
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
    <link rel="stylesheet" href="../css/validacion.css">
    <link href="../css/resumen2.css" rel="stylesheet">
    

    <title>Crear Cuenta</title>
    
    
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
    
    <div class="container">
        <div class="titulo">
            <h1>Crear Cuenta</h1>
            <p>Llena el siguiente formulario</p>
            </div>
    <nav class="navs contenedor navbar navbar-dark bg-primary" style="padding: 0;">
       
            
            <button type="button" class="boton col col-m-3 colorOn" id="b1" data-paso="1">Datos Personales</button>        
            <button type="button" class="boton col col-m-3 colorOn" id="b2" data-paso="2">Datos Escolares</button>
            <button type="button" class="boton col col-m-3 colorOn" id="b3" data-paso="3">Contacto</button>
    </nav>


    <form action="resumen2.php" method="POST" id="formulario">
    <div class="contenedor">


    <div id="paso-1" class="seccion" >
        
        <div class="row">
           <div class="col col-m-6">
            <label for="boleta">Boleta</label>
            <input name="boleta" type="text" placeholder="Número de Boleta" value="<?php if(isset($_SESSION["boleta"])){ echo $_SESSION["boleta"];} ?>" class="form-control">
          </div>
          <div class="col col-m-6">
          <label for="curp">Curp</label>
            <input type="text" placeholder="Curp" name="curp"  value="<?php if(isset($_SESSION["curp"])){ echo $_SESSION["curp"];} ?>" class="form-control">
          </div>
        </div>
        <div class="col col-m-12">
            <label for="password">Contraseña</label>
            <input type="password" placeholder="Tú contraseña" name="password" value="<?php if(isset($_SESSION["pass"])){ echo $_SESSION["pass"];} ?>" class="form-control">
        </div>
        <div class="row">
            <div class="col col-m-3" id="name">
            <label for="names">Nombre(s)</label>
            <input type="text" placeholder="Tú Nombre" name="name" value="<?php if(isset($_SESSION["nombre"])){ echo $_SESSION["nombre"];}?>" class="form-control">
            </div>
            
            <div class="col col-m-3">
            <label for="apaterno">Apellido Paterno</label>
            <input type="text" placeholder="Tú Apellido Paterno" name="apaterno" value="<?php if(isset($_SESSION["paterno"])){ echo $_SESSION["paterno"];} ?>" class="form-control">
            </div>

            <div class="col col-m-3">
            <label for="amaterno">Apellido Materno</label>
             <input type="text" placeholder="Tú Apellido Materno" name="amaterno" value="<?php if(isset($_SESSION["materno"])){ echo $_SESSION["materno"];} ?>"  class="form-control">
            </div>
        </div>
           
        <div class="row">
            <div class="col col-m-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-date-fill" viewBox="0 0 16 16">
                    <path d="M9.402 10.246c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zm-4.118 9.79c1.258 0 2-1.067 2-2.872 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684c.047.64.594 1.406 1.703 1.406zm-2.89-5.435h-.633A12.6 12.6 0 0 0 4.5 8.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675V7.354z"/>
                  </svg>
            <label for="date">Fecha de Nacimiento</label>
            <input type="date" name="date" value="<?php if(isset($_SESSION["date"])){ echo $_SESSION["date"];} ?>" class="form-control">
            </div>
            <div class="col col-m-6">
            <label for="estado">Entidad de Nacimiento</label>
            <select name="estado"  class="form-control d-inline">
                <option value="Aguascalientes">Aguascalientes</option>
                <option value="Baja California">Baja California</option>
                <option value="Baja California Sur">Baja California Sur</option>
                <option value="Campeche">Campeche</option>
                <option value="Chiapas">Chiapas</option>
                <option value="Chihuahua">Chihuahua</option>
                <option value="Ciudad de México">Ciudad de México</option>
                <option value="Coahuila">Coahuila</option>
                <option value="Colima">Colima</option>
                <option value="Durango">Durango</option>
                <option value="Estado de México">Estado de México</option>
                <option value="Guanajuato">Guanajuato</option>
                <option value="Guerrero">Guerrero</option>
                <option value="Hidalgo">Hidalgo</option>
                <option value="Jalisco">Jalisco</option>
                <option value="Michoacán">Michoacán</option>
                <option value="Morelos">Morelos</option>
                <option value="Nayarit">Nayarit</option>
                <option value="Nuevo León">Nuevo León </option>
                <option value="Oaxaca">Oaxaca</option>
                <option value="Puebla">Puebla</option>
                <option value="Querétaro">Querétaro</option>
                <option value="Quintana Roo">Quintana Roo</option>
                <option value="San Luis Potosí">San Luis Potosí</option>
                <option value="Sinaloa">Sinaloa</option>
                <option value="Sonora">Sonora</option>
                <option value="Tabasco">Tabasco</option>
                <option value="Tamaulipas">Tamaulipas</option>
                <option value="Tlaxcala">Tlaxcala</option>
                <option value="Veracruz">Veracruz</option>
                <option value="Yucatán">Yucatán</option>
                <option value="Zacatecas">Zacatecas </option>
              </select>
            </div>
        </div>
            <br>
            <label for="genero" class="d-inline">Género</label>
            <input type="radio"  name="genero" value="Mujer" class="d-inline">Mujer
            <input type="radio"  name="genero" value="Hombre" class="d-inline">Hombre
            
       
    
    </div>


    
    <div id="paso-2" class="seccion">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                 </svg>
                <label for="escuela">Escuela De Procedencia</label>
                <select id="escuela" name="escuelap" class="form-control d-inline">
                    <option value="CECyT No. 1 Gonzalo Vázquez Vela">CECyT No. 1 Gonzalo Vázquez Vela</option>
                    <option value="CECyT No. 2 Miguel Bernard">CECyT No. 2 Miguel Bernard</option>
                    <option value="CECyT No. 3 Estanislao Ramírez Ruiz">CECyT No. 3 Estanislao Ramírez Ruiz</option>
                    <option value="CECyT No. 4 Lázaro Cárdenas">CECyT No. 4 Lázaro Cárdenas</option>
                    <option value="CECyT No. 5 Benito Juárez">CECyT No. 5 Benito Juárez</option>
                    <option value="CECyT No. 6 Miguel Othón de Mendizábal">CECyT No. 6 Miguel Othón de Mendizábal</option>
                    <option value="CECyT No. 7 Cuauhtémoc">CECyT No. 7 Cuauhtémoc</option>
                    <option value="CECyT No. 8 Narciso Bassols">CECyT No. 8 Narciso Bassols</option>
                    <option value="CECyT No. 9 Juan de Dios Bátiz">CECyT No. 9 Juan de Dios Bátiz</option>
                    <option value="CECyT No. 10 Carlos Vallejo Márquez">CECyT No. 10 Carlos Vallejo Márquez</option>
                    <option value="CECyT No. 11 Wilfrido Massieu">CECyT No. 11 Wilfrido Massieu</option>
                    <option value="CECyT No. 12 José María Morelos">CECyT No. 12 José María Morelos</option>
                    <option value="CECyT No. 13 Ricardo Flores Magón">CECyT No. 13 Ricardo Flores Magón</option>
                    <option value="CECyT No. 14 Luis Enrique Erro">CECyT No. 14 Luis Enrique Erro</option>
                    <option value="CECyT No. 15 Diódoro Antúnez Echegaray">CECyT No. 15 Diódoro Antúnez Echegaray</option>
                    <option value="CECyT No. 16 Hidalgo">CECyT No. 16 Hidalgo</option>
                    <option value="CECyT No. 17 León, Guanajuato">CECyT No. 17 León, Guanajuato</option>
                    <option value="CECyT No. 18 Zacatecas">CECyT No. 18 Zacatecas</option>
                    <option value="CECyT No. 19 Leona Vicario">CECyT No. 19 Leona Vicario</option>
                    <option value="CET 1 Walter Cross Buchanan">CET 1 Walter Cross Buchanan</option>
                    <option value="otro">Otro..</option>
                  </select>
            </div>
                <label id="labell" for="otro" class="ocultar">Escribe el nombre de tu escuela </label>
                <input type="text" placeholder="Escuela de procedencia" name="otro" id="newcampo" class="ocultar form-control d-inline">
                <br>
                <label for="promedio">Promedio</label>
                <input type="number" placeholder="Promedio Obtenido" name="promedio"  value="<?php if(isset($_SESSION["promedio"])){ echo $_SESSION["promedio"];} ?>" class="form-control d-inline">
                <br>
          
        
    </div>    
   


    <div id="paso-3" class="seccion ">
               
                <div class="row">
                    
                    <div class="col col-m-2">
                    <label for="calle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-houses-fill" viewBox="0 0 16 16">
                        <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.51 2.51 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354L7.207 1Z"/>
                        <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Z"/>
                      </svg> Calle: </label>
                    <input type="text" name="calle" id="calle" placeholder="Nombre de la calle" value="<?php if(isset($_SESSION["calle"])){ echo $_SESSION["calle"];} ?>" class="form-control d-inline">
                    </div>
                    <div class="col col-m-2">
                    <label for="numero">Numero Exterior: </label>
                    <input type="number" name="numero" id="numero" placeholder="Número de la calle" value="<?php if(isset($_SESSION["numero"])){ echo $_SESSION["numero"];} ?>" class="form-control d-inline"></div>
                    
                    <div class="col col-m-2">
                    <label for="cp">Código postal: </label>
                    <input type="number" name="cp" id="cp" placeholder="C.P" value="<?php if(isset($_SESSION["cp"])){ echo $_SESSION["cp"];} ?>" class="form-control d-inline"></div>
                   
                    <div class="col col-m-2">
                    <label for="colonia">Colonia: </label>
                    <input type="text" name="colonia" id="colonia" placeholder="Colonia" value="<?php if(isset($_SESSION["colonia"])){ echo $_SESSION["colonia"];} ?>" class="form-control d-inline"></div>
                </div>
                <div>
                    <label for="alcaldias">Alcaldia: </label>
                        <select name="alcaldias" id="alcaldias" class="form-control d-inline">
                            <option value="Alcaldía Azcapotzalco">Alcaldía Azcapotzalco</option>
                            <option value="Alcaldía Álvaro Obregón">Alcaldía Álvaro Obregón</option>
                            <option value="Alcaldía Benito Juárez">Alcaldía Benito Juárez</option>
                            <option value="Alcaldía Coyoacán">Alcaldía Coyoacán</option>
                            <option value="Alcaldía Cuajimalpa de Morelos">Alcaldía Cuajimalpa de Morelos</option>
                            <option value="Alcaldía Cuauhtémo">Alcaldía Cuauhtémoc</option>
                            <option value="Alcaldía Gustavo A. Madero">Alcaldía Gustavo A. Madero</option>
                            <option value="Alcaldía Iztacalco">Alcaldía Iztacalco</option>
                            <option value="Alcaldía Iztapalapa">Alcaldía Iztapalapa</option>
                            <option value="Alcaldía La Magdalena Contreras">Alcaldía La Magdalena Contreras</option>
                            <option value="Alcaldía Miguel Hidalgo">Alcaldía Miguel Hidalgo</option>
                            <option value="Alcaldía Milpa Alta">Alcaldía Milpa Alta</option>
                            <option value="Alcaldía Tlalpan">Alcaldía Tlalpan</option>
                            <option value="Alcaldía Tláhuac">Alcaldía Tláhuac</option>
                            <option value="Alcaldía Venustiano Carranza">Alcaldía Venustiano Carranza</option>
                            <option value="Alcaldía Xochimilco">Alcaldía Xochimilco</option>
                        </select>
                </div>
                <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                         </svg>
                        <label for="phone">Télefono: </label>
                        <input type="tel" name="phone" id="phone" placeholder="Tu télefono" value="<?php if(isset($_SESSION["phone"])){ echo $_SESSION["phone"];} ?>" class="form-control d-inline">
                </div>

                <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                        <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                        <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
                        </svg>
                        <label for="correo">Correo electronico: </label>
                        <input type="email" name="correo" id="correo" placeholder="Tú correo" value="<?php if(isset($_SESSION["correo"])){ echo $_SESSION["correo"];} ?>" class="form-control d-inline">
                </div>


    </div> 
        
        
           
                <br>
                <br>
           
        </div>
        <input id="siguiente" type="submit" class="btn btn-primary col contenedor" disabled="disabled" value="ENVIAR">

    </form> 


   


    <div class="log contenedor">
        <a href="recuperar.php">¿Perdiste tu archivo PDF? Recuperalo Aquí</a> 
     </div>

    </div>

    <script type="text/javascript" src="../js/app.js"></script>
    <script type="text/javascript" src="../jquery/jquery-3.6.3.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/validacion.js"></script>
    <script src="../js/resumen.js"></script>
</body>
</html>


