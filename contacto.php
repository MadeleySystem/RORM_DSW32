<?php
if(isset($_POST['enviar'])){
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$problema = $_POST['problema'];
$enviar = $_POST['enviar'];
 

if($nombre == ''){
echo "Ingrese su nombre";
}
else if($email == ''){
echo "Ingrese su email";
}else{
$para = "correo@tudominio.com";
$asunto = "Contacto para su sitio web";
$mensaje = "
<table border='1' cellspacing='3' cellpadding='2'>
<tr>
<td width='30%' align='left' bgcolor='#f0efef'><strong>Nombre:</strong></td>
<td width='80%' align='left'>$nombre</td>
</tr>
<tr>
<td width='30%' align='left' bgcolor='#f0efef'><strong>Apellidos:</strong></td>
<td width='70%' align='left'>$apellidos</td>
</tr>
<tr>
<td align='left' bgcolor='#f0efef'><strong>Correo:</strong></td>
<td align='left'>$correo</td>
</tr>
<tr>
<td width='30%' align='left' bgcolor='#f0efef'><strong>Teléfono:</strong></td>
<td width='70%' align='left'>$telefono</td>
</tr>

<tr>
<td width='30%' align='left' bgcolor='#f0efef'><strong>Problema:</strong></td>
<td width='70%' align='left'>$problema</td>
</tr>
<tr>
<td align='left' bgcolor='#f0efef'><strong>Mensaje:</strong></td>
<td align='left'>$mensaje</td>
</tr>
</table>
";
 
$headers = "From: $nombre <$correo>\r\n"; 
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
 

if(mail($para, $asunto, $mensaje, $headers)){
echo "Su mensaje se ha enviado correctamente";
echo "<br />";
echo '<a href="../formulario_contacto.html">Volver</a>';
}else{
echo "Hubo un error en el envío inténtelo más tarde";
}
}
}
?>