  
<?php
session_start();
require('../fpdf/fpdf.php');
require("../phpMailer/class.phpmailer.php");
require("../phpMailer/class.smtp.php");


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->Image('../imgs/banner.png',10,8,200);
    $this->Ln(20);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(100,10,'REPORTE DEL ALUMNO',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

$user="root";
$pass="root";
$server="localhost";
$basededatos="registro";
//SE COMPRUEBA SI SE CONECTÓ CORRECTAMENTE
   $conectar=mysqli_connect($server,$user,$pass,$basededatos);
   if(!$conectar){
       echo "Error en la conección con el servidor";
   } 

 $usuario=$_SESSION["bol"];



 $consulta2="SELECT *FROM prueba  WHERE boleta='$usuario'";
 $ejecutarConsulta= mysqli_query($conectar,$consulta2);
 $verFilas = mysqli_num_rows($ejecutarConsulta);
 $fila= mysqli_fetch_array($ejecutarConsulta);

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(90,10,'DATOS GENERALES',1,1,'C',0);
$pdf->Cell(90,10,utf8_decode('BOLETA: '.$fila['boleta']),1,1,'I',0);
$pdf->Cell(90,10,utf8_decode('CURP: '.$fila['curp']),1,1,'I',0);
$pdf->Cell(90,10,utf8_decode('Nombre(S): '.$fila['nombres']),1,1,'I',0);
$pdf->Cell(90,10,utf8_decode('Apellido Paterno: '.$fila['apellidoPaterno']),1,1,'I',0);
$pdf->Cell(90,10,utf8_decode('Apellido Materno: '.$fila['apellidoMaterno']),1,1,'I',0);
$pdf->Cell(90,10,utf8_decode('Fecha Nacimiento: '.$fila['fechaNacimiento']),1,1,'I',0);
$pdf->Cell(90,10,utf8_decode('Estado Nacimiento: '.$fila['estadoNacimiento']),1,1,'I',0);
$pdf->Cell(90,10,utf8_decode('Género: '.$fila['genero']),1,1,'I',0);
$pdf->Cell(90,10,utf8_decode('DATOS ACADÉMICOS'),1,1,'C',0);
$pdf->Cell(90,10,utf8_decode('Escuela: '.$fila['escuela']),1,1,'I',0);
$pdf->Cell(90,10,utf8_decode('Promedio: '.$fila['promedio']),1,1,'I',0);
$pdf->Cell(90,10,utf8_decode('DATOS DE CONTACTO'),1,1,'C',0);
$pdf->Cell(90,10,utf8_decode('Calle: '.$fila['calle']),1,1,'I',0);
$pdf->Cell(90,10,utf8_decode('Numero Exterior: '.$fila['numeroExt']),1,1,'I',0);
$pdf->Cell(90,10,utf8_decode('CP: '.$fila['cp']),1,1,'I',0);
$pdf->Cell(90,10,utf8_decode('Colonía: '.$fila['colonia']),1,1,'I',0);
$pdf->Cell(90,10,utf8_decode('Alcaldía: '.$fila['alcaldia']),1,1,'I',0);
$pdf->Cell(90,10,utf8_decode('Celular: '.$fila['celular']),1,1,'I',0);
$pdf->Cell(90,10,utf8_decode('Correo: '.$fila['correo']),1,1,'I',0);
$pdf->Cell(90,10,utf8_decode('SalÓn Asignado: '.$fila['salonAsignado']),1,1,'I',0);
$pdf->Cell(90,10,utf8_decode('Horario Asignado: '.$fila['horarioAsignado']),1,1,'I',0);

$pdf->Output();
$pdf->Output('F',$boleta.'.pdf');

$filename =$boleta.'.pdf';

$email_user = "iafb2004@gmail.com"; //Debes actualizar esta línea con tu información
$email_password = ""; //Debes actualizar esta línea con tu información
$the_subject = "Prueba de PHPMailer por PEM (Dic 2022)";
$address_to =$fila['correo']; //Debes actualizar esta línea con tu información
$from_name = "TDAW";
$phpmailer = new PHPMailer();

// ---------- datos de la cuenta de Gmail -------------------------------
$phpmailer->Username = $email_user;
$phpmailer->Password = $email_password; 
//-----------------------------------------------------------------------
// $phpmailer->SMTPDebug = 1;
$phpmailer->SMTPSecure = 'ssl';
$phpmailer->Host = "smtp.gmail.com"; // GMail
$phpmailer->Port = 465;
$phpmailer->IsSMTP(); // use SMTP
$phpmailer->SMTPAuth = true;


$phpmailer->setFrom($phpmailer->Username,$from_name);
$phpmailer->AddAddress($address_to); // recipients email
$file=file_get_contents($filename);
        base64_encode($file);
//$phpmailer->addStringAttachment($pdfString, 'report.pdf');
$phpmailer->addStringAttachment($file, '\pdfRecuperados/'.$boleta.'.pdf');

date_default_timezone_set('UTC'); //Universal Time Coordinated
date_default_timezone_set("America/Mexico_City");

$phpmailer->Subject = $the_subject;	
$phpmailer->Body .="<h1 style='color:#3498db;'>Hola Camicam, soy angelito </h1>";
$phpmailer->Body .= "<p>Esta es una prueba del env&iacute;o de correo desde php. Te amo</p>";
$phpmailer->Body .= "<p><b>Fecha: ".date("d-m-Y H:i:s")."</b></p>";
$phpmailer->IsHTML(true);   

if(!$phpmailer->Send()){
    echo "El correo no se envió";


}else{
    echo "  se envió";
}




session_destroy()
?>