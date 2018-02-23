<?php
$nombre=$_POST ['nombre'];
$apellidos=$_POST['apellidos'];
$pais=$_POST['pais'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$fecha=$_POST['fecha'];
$mensaje = "<html><head><title>suscrictor</title></head>
<body><p>NOMBRE: ".$nombre."<br/> APELLIDOS: ".$apellidos." <br/> pais: ".$pais."<br/>
E-MAIL: ".$email."<br/>TEL&Eacute;FONO: ".$telefono."<br/> DATE: ".$fecha.":</p></body></html>";
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'From: programatic' . "\r\n";   
$destino='anita1997angel@gmail.com';
$asunto='suscriptor';
mail($destino, $asunto, $mensaje, $cabeceras);
//conectando,seleccionando la base de datos
$link=mysql_connect('localhost','flores','flores'); mysql_select_db('flores');
//realizar
$query="INSERT INTO flores VALUES (NULL,'".$nombre."','".$apellidos."','".$pais."','".$telefono."','".$email."','".$fecha."')";
$result=mysql_query($query);

if($result){
//mostrar por pantalla el resultado,
echo'<html>
<head>
    <meta http-equiv="content-type" content="text/htl; charset=iso-8859-1"/>
    <title>mensaje de confirmacion;n</title>
</head>
<body>
  <div>
    <p>su suscripcion es correcta, gracias</p>
   <a href="index.html"><p id="vol">Volver</p></a>
</div>
</body>
</html>';$mensaje = "<html><head><title>suscrictor</title></head>
<body><p> <p> Este es un correo de confimacion </p>
NOMBRE: ".$nombre."<br/> APELLIDOS: ".$apellidos." <br/> pais: ".$pais."<br/>
E-MAIL: ".$email."<br/>TEL&Eacute;FONO: ".$telefono."<br/> DATE: ".$fecha.":</p></body></html>";
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'From: programatic' . "\r\n";   
$destino=$email;
$asunto='suscriptor';
mail($destino, $asunto, $mensaje, $cabeceras);}

//mensaje de el resultado fallido.
 else{
 echo'<html>
<head>
    <meta http-equiv="content-type" content="text/htl; charset=iso-8859-1"/>
    <title>mensaje de confirmacion;n</title>
</head>
<body>
<div>
    <p style= "color:red; font-size: 260%; text-align: center; " >tu suscripcion ha fallado,vuele a intentarlo.</p>
    <a href="index.html"><p id="vol">Volver</p></a>
</div>
</body>
</html>';
};

?>