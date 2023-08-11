<?php
session_start();
date_default_timezone_set ('America/Mexico_City');
include('../class/conexion.php'); 
//funcion para llenar los modulos dependientes de estados
function agregarUsuarioFinal(){
$con=conexion();
$hoy=date('Y-m-d H:i:s');
$nombrenegocio=$_POST['nombrenegocio'];
$rol=$_POST['rol'];
$nombreusr=$_POST['nombreusr'];
$apellidosusr=$_POST['apellidosusr'];
$telefono=$_POST['telefono'];
$puesto=$_POST['puesto'];
$email=$_POST['email'];
$giroempresa=$_POST['giroempresa'];
$contrasena=$_POST['contrasena'];
// inserto los datos del usuario
$queryUsr="INSERT INTO th_usuarios 
(usr_nombrenegocio,usr_idRol,usr_fecharegistro,usr_nombre,usr_apellidos,usr_telefono,usr_puesto,usr_email,usr_giroempresa,usr_usuario,usr_contrasena,usr_estatus) values 
('$nombrenegocio',$rol,'$hoy','$nombreusr','$apellidosusr','$telefono','$puesto','$email',$giroempresa,'$email','$contrasena',1)";
$row=mysqli_query($con,$queryUsr);

return $row;
}

echo agregarUsuarioFinal(); 