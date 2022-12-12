<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<?php
	include "conexion.inc.php";
	$flujo = $_GET["flujo"];
	$proceso = $_GET["proceso"];
	$usuario=$_GET["usuario"];;

	$sql="SELECT * from flujoproceso where flujo='$flujo' and proceso = '$proceso'";
	$resultado=mysqli_query($con, $sql);
	$fila=mysqli_fetch_array($resultado);
	$pantalla=$fila["pantalla"];
	echo $pantalla;
	$tipo=$fila["tipo"];
	$rol = $_GET["rol"];
	echo $rol;
	$fecha_ini = date("Y-m-d"); 
	include $pantalla.".datos.inc.php";
?>

<form method="GET" action="motor.php">
	<?php 
		include $pantalla.".inc.php";
		echo $proceso;
	?>
	<input type="hidden" value="<?php echo $pantalla;?>" name="pantalla"/>
	<input type="hidden" value="<?php echo $flujo;?>" name="flujo"/>
	<input type="hidden" value="<?php echo $proceso;?>" name="proceso"/>
	<input type="hidden" value="<?php echo $tipo;?>" name="tipo"/>
	<input type="hidden" value="<?php echo $rol;?>" name="rol"/>
	<input type="hidden" value="<?php echo $fecha_ini;?>" name="fecha_ini"/>
	<input type="hidden" value="<?php echo $usuario;?>" name="usuario"/>
	<br/>
	<?php
	if ($tipo=="C")
	{
		
		?>
			<center>
				<input type="submit" value="Si" class="btn btn-success" name="Si"/>
				<input type="submit" value="No" class="btn btn-danger" name="No"/>
			</center>
		<?php
	}
	else
	{
		if($proceso=="-" ){
			if($rol=="Caja"){
				header("Location: EntradaCaja.php");
			}
			else{
				header("Location: EntradaUsuario.php");
			}
				
			
		}else{
			?>
			
			<center>
				<input type="submit" value="Anterior" class="btn btn-warning" name="Anterior"/>
				<input type="submit" value="Siguiente" class="btn btn-success" name="Siguiente"/>
				
			</center>
			<?php
		}
	
	}
	?>
</form>
