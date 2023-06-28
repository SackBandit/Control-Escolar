<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imgs/escom.png" type="image/png">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilos2.css">
	<link href="../css/resumen2.css" rel="stylesheet">
	<title>Validación de Formulario con Javascript</title>
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
	
	
	<main>
		<div class="container">
			<div class="titulo">
			<div class="pos d-inline">
		<img src="../imgs/ipn.png" alt="" height="60px">
	
				<h1 class="d-inline">Crear Cuenta</h1>
				</div>
				<div class="pos d-inline">
		<img src="../imgs/escom.png" alt="" height="60px">
	</div>
				<p>Llena el siguiente formulario</p>
			</div>
			<nav class="navs contenedor navbar navbar-dark bg-primary" style="padding: 0;">
			<button type="button" class="boton col col-m-3 colorOn" id="b1" data-paso="1">Datos Personales</button>        
			<button type="button" class="boton col col-m-3 colorOn" id="b2" data-paso="2">Datos Escolares</button>
			<button type="button" class="boton col col-m-3 colorOn" id="b3" data-paso="3">Contacto</button>
			</nav>
			<form class="formulario" method="POST"action="resumen2.php" id="formulario">
				<div class="contenedor">
					<div id="paso-1" class="seccion" >
						<div class="row">
						
							<!--BOLETA-->
							<div class="formulario__grupo" id="grupo__boleta">
								<label for="boleta" class="formulario__label">Boleta</label><!--al darle clic al nombre se selecciona la casilla-->
								<div class="formulario__grupo-input"><!--Este div es para meter el input y el icono en el mismo div-->
									<input type="text" class="formulario__input form-control" name="boleta" id="boleta" value="<?php if(isset($_SESSION["boleta"])){ echo $_SESSION["boleta"];} ?>" placeholder="2019630225">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado warn" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 10 0 0 0-2z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado checado" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
								</div> 
								<p class="formulario__input-error">La boleta tiene que tener 10 dígitos puede tener las letras PE o PP seguidas de 8 dígitos o bien, el número de boleta.</p>
							</div>
							<!--CURP-->
							<div class="formulario__grupo" id="grupo__curp">
								<label for="curp" class="formulario__label">Curp</label>
								<div class="formulario__grupo-input">
									<input type="text" class="formulario__input form-control" name="curp" id="curp"  value="<?php if(isset($_SESSION["curp"])){ echo $_SESSION["curp"];} ?>" placeholder="FABM770222MMSJNR00">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado warn" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 10 0 0 0-2z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado checado" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
								</div> 
								<p class="formulario__input-error">ingresa 18 caracteres (los primeros 4 deberán ser letras, los siguientes 6 serán números, los siguientes 6 serán letras y para los últimos dos podrán ser números, letras o la combinación de éstos).</p>
							</div>
							<!--CONTRASEÑA-->
							<div class="formulario__grupo" id="grupo__password">
								<label for="password" class="formulario__label">Contraseña</label>
								<div class="formulario__grupo-input">
									<input type="password" class="formulario__input form-control" name="password" id="password" value="<?php if(isset($_SESSION["pass"])){ echo $_SESSION["pass"];} ?>" placeholder="contra$ena2023">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado warn" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 10 0 0 0-2z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado checado" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
								</div>
								<p class="formulario__input-error">La contraseña debe tener de 4 a 10 dígitos</p>
							</div>
							<!--NOMBRE-->
							<div class="formulario__grupo" id="grupo__name">
								<label for="name" class="formulario__label">Nombre(S)</label>
								<div class="formulario__grupo-input">
									<input type="text" class="formulario__input form-control" name="name" id="name" value="<?php if(isset($_SESSION["nombre"])){ echo $_SESSION["nombre"];}?>" placeholder="Jenifer Elizabeth">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado warn" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 10 0 0 0-2z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado checado" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
								</div>
								<p class="formulario__input-error">El nombre solo contiene letras y espacios</p>
							</div>
							<!--APELLIDO PATERNO-->
							<div class="formulario__grupo" id="grupo__apaterno">
								<label for="apaterno" class="formulario__label">Apellido Paterno</label>
								<div class="formulario__grupo-input">
									<input type="text" class="formulario__input form-control" name="apaterno" id="apaterno" value="<?php if(isset($_SESSION["paterno"])){ echo $_SESSION["paterno"];} ?>" placeholder="Juarez">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado warn" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 10 0 0 0-2z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado checado" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
								</div>
								<p class="formulario__input-error">Solo debe tener letras</p>
							</div>
							<!--APELLIDO MATERNO-->
							<div class="formulario__grupo" id="grupo__amaterno">
								<label for="amaterno" class="formulario__label">Apellido Materno</label>
								<div class="formulario__grupo-input">
									<input type="text" class="formulario__input form-control" name="amaterno" id="amaterno" value="<?php if(isset($_SESSION["materno"])){ echo $_SESSION["materno"];} ?>"  placeholder="Flores">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado warn" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 10 0 0 0-2z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado checado" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
								</div>
								<p class="formulario__input-error">Solo debe tener letras</p>
							</div>
							<!--FECHA DE NACIMIENTO-->
							<div class="row">
								<div class="col col-m-6">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-date-fill" viewBox="0 0 16 16"><path d="M9.402 10.246c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2z"/><path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zm-4.118 9.79c1.258 0 2-1.067 2-2.872 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684c.047.64.594 1.406 1.703 1.406zm-2.89-5.435h-.633A12.6 12.6 0 0 0 4.5 8.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675V7.354z"/></svg>
									<label for="date">Fecha de Nacimiento</label>
									<input type="date" name="date" value="<?php if(isset($_SESSION["date"])){ echo $_SESSION["date"];} ?>" class="form-control">
								</div>
							</div>
							<!--ENTIDAD-->
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
									<option value="Tlaxcala">Tlaxcala</option><option value="Veracruz">Veracruz</option>
									<option value="Yucatán">Yucatán</option>
									<option value="Zacatecas">Zacatecas </option>
								</select>
							</div>
							<br>
							<label for="genero" class="d-inline">Género</label>
							<input type="radio"  name="genero" value="Mujer" class="d-inline">Mujer
							<input type="radio"  name="genero" value="Hombre" class="d-inline">Hombre
						</div>
					</div><!--cierra div de paso 1--></br></br>
					
					<div id="paso-2" class="seccion">
						<div>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16"><path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/></svg>
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
						<div class="formulario__grupo" id="grupo__promedio">
								<label for="promedio" class="formulario__label">promedio</label>
								<div class="formulario__grupo-input">
									<input type="number" class="formulario__input form-control form-control d-inline" step="0.01" min="0" max="10" name="promedio" id="promedio" placeholder="Promedio Obtenido" value="<?php if(isset($_SESSION["promedio"])){ echo $_SESSION["promedio"];} ?>">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado warn" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 10 0 0 0-2z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado checado" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
								</div> 
								<p class="formulario__input-error">El promedio puede tener hasta dos decimales</p>
						</div></br>
					</div><!--cierra div de paso 2-->
					
					<div id="paso-3" class="seccion" >
						<div class="row">
							
							<div class="formulario__grupo" id="grupo__calle">
								<label for="calle" class="formulario__label">Calle: </label>
								<div class="formulario__grupo-input">
									<input type="text" class="formulario__input form-control form-control d-inline" name="calle" id="calle" placeholder="Nombre de la calle" value="<?php if(isset($_SESSION["calle"])){ echo $_SESSION["calle"];} ?>">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado warn" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 10 0 0 0-2z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado checado" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
								</div>
								<p class="formulario__input-error">Solo contiene letras</p>
							</div>
							<div class="formulario__grupo" id="grupo__numero">
								<label for="numero" class="formulario__label">Número exterior:  </label>
								<div class="formulario__grupo-input">
									<input type="number" class="formulario__input form-control form-control d-inline" name="numero" id="numero" placeholder="Número de calle" value="<?php if(isset($_SESSION["numero"])){ echo $_SESSION["numero"];} ?>">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado warn" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 10 0 0 0-2z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado checado" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
								</div>
								<p class="formulario__input-error">Solo debe tener números</p>
							</div>
							
							<div class="formulario__grupo" id="grupo__cp">
								<label for="cp" class="formulario__label">Código postal:  </label>
								<div class="formulario__grupo-input">
									<input type="number" class="formulario__input form-control form-control d-inline" name="cp" id="cp" placeholder="C.P" value="<?php if(isset($_SESSION["cp"])){ echo $_SESSION["cp"];} ?>">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado warn" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 10 0 0 0-2z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado checado" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
								</div>
								<p class="formulario__input-error">Solo debe contener numeros de 5 dígitos</p>
							</div>
							<div class="formulario__grupo" id="grupo__colonia">
								<label for="colonia" class="formulario__label">Colonia: </label>
								<div class="formulario__grupo-input">
									<input type="text" class="formulario__input form-control form-control d-inline" name="colonia" id="colonia" placeholder="Nextlalpan" value="<?php if(isset($_SESSION["colonia"])){ echo $_SESSION["colonia"];} ?>">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado warn" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 10 0 0 0-2z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado checado" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
								</div>
								<p class="formulario__input-error">Solo contiene letras y puntos</p>
							</div>
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
						
						<div class="formulario__grupo" id="grupo__phone">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>
							<label for="phone" class="formulario__label">Teléfono: </label>
							<div class="formulario__grupo-input">
								<input type="tel" class="formulario__input form-control form-control d-inline" name="phone" id="phone" placeholder="5574926934" value="<?php if(isset($_SESSION["phone"])){ echo $_SESSION["phone"];} ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado warn" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 10 0 0 0-2z"/></svg>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado checado" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
							</div>
							<p class="formulario__input-error">Solo se pueden ingresar de 7 a 10 dígitos</p>
						</div>
						<div class="formulario__grupo" id="grupo__correo">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telecorreo-fill" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>
							<label for="correo" class="formulario__label">Correo electronico: </label>
							<div class="formulario__grupo-input">
								<input type="email" class="formulario__input form-control form-control d-inline" name="correo" id="correo" placeholder="5574926934" value="<?php if(isset($_SESSION["correo"])){ echo $_SESSION["correo"];} ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado warn" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 10 0 0 0-2z"/></svg>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario__validacion-estado checado" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/></svg>
							</div>
							<p class="formulario__input-error">El correo no es válido</p>
						</div>
					</div><!--cierra div de paso 3--></br></br>
				</div>
				<!-- He enviado todos mis datos correctamente -->
				<div class="formulario__grupo" id="grupo__terminos">
					<label class="formulario__label">
						<input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
						He enviado correctamente todos mis datos.
					</label>
				</div>

				<div class="formulario__mensaje" id="formulario__mensaje">
					<p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-diamond" viewBox="0 0 16 16"><path d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z"/><path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/></svg>
						<B>Error</B> Por favor rellena el formulario
					</p>
				</div></br>

				<div class="formulario__grupo formulario__grupo-btn-enviar">
				 <input id="siguiente" type="submit" class="formulario__btn btn btn-primary col contenedor" disabled="disabled" value="ENVIAR">
					<!-- <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">¡¡Enviado con éxito!!</p> -->
				</div>
				<!-- <input id="siguiente" type="submit" class="btn btn-primary col contenedor" disabled="disabled" value="ENVIAR">  -->
			</form>
			<div class="log contenedor">
				<a href="recuperar.php">¿Perdiste tu archivo PDF? Recuperalo Aquí</a> 
			</div>
		</div>
	</main>

	<script src="../js/formulario2.js"></script>
	<script type="text/javascript" src="../js/app.js"></script>
    <script type="text/javascript" src="../jquery/jquery-3.6.3.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="../js/resumen.js"></script>
</body>
</html>