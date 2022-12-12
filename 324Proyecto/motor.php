<?php
	$flujo = $_GET["flujo"];
	$proceso = $_GET["proceso"];
	$pantalla = $_GET["pantalla"];
	$tipo = $_GET["tipo"];
	$rol= $_GET["rol"];
	$usuario = $_GET["usuario"];
	include "conexion.inc.php";
	include $pantalla.".grabar.inc.php";
	echo "gasdfasdfasdf";
	echo $usuario;
	

	if (isset($_GET["Siguiente"]))
	{
		$sql="select flujo, proceso, procesoSiguiente as procesoselect, tipo, pantalla, rol ";
		$sql.="from flujoproceso ";
		$sql.="where flujo='".$flujo."' and ";
		$sql.="proceso='".$proceso."'";
	}

	if (isset($_GET["Anterior"]))
	{
		$sql="select flujo, proceso as procesoselect, procesoSiguiente, tipo, pantalla, rol ";
		$sql.="from flujoproceso ";
		$sql.="where flujo='".$flujo."' and ";
		$sql.="procesoSiguiente='".$proceso."'";
	}

	if (isset($_GET["Si"]))
	{
		$sql="select flujo, procesoSi as procesoselect";
		$sql.="from flujocondicionante ";
		$sql.="where flujo='".$flujo."' and ";
		$sql.="proceso='".$proceso."'";
	}
	if (isset($_GET["No"]))
	{
		$sql="select flujo, procesoNo as procesoselect";
		$sql.="from flujocondicionante ";
		$sql.="where flujo='".$flujo."' and ";
		$sql.="proceso='".$proceso."'";
	}
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);
$proceso = $fila["procesoselect"];
$parametros="?flujo=".$flujo;
$parametros.="&proceso=".$proceso;
$parametros.="&rol=".$rol;
$parametros.="&usuario=".$usuario;
header("Location: flujo.php".$parametros);
?>