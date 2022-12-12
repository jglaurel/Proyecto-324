<?php
$usuario=$_GET["usuario"];
$password=$_GET["password"];
include "conexion.inc.php";
$sql = "SELECT DISTINCT xr.rol as 'Rol'
		From usuario xu, rol xr, rol_usuario xru
		Where xu.Id = xru.idUsuario
		and xru.idRol = xr.id
		and xu.contrasenia = '$password'
		and xu.usuario = '$usuario'";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
print_r($fila);
echo $fila['Rol'];
if ($fila['Rol']=='usuario')
{
	session_start();
	$_SESSION["usuario"]=$usuario;
	$_SESSION["rol"]='usuario';
	echo "2";
	header("Location: EntradaUsuario.php");
	exit;
}
if ($fila['Rol']=='caja')
{
	session_start();
	$_SESSION["usuario"]=$usuario;
	$_SESSION["rol"]='caja';
	header("Location: EntradaCaja.php");
	exit;
}
$rol = $fila['Rol'];
header("Location: index.php?rol=$rol");
?>
