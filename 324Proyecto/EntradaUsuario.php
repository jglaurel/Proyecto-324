<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Usuario</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 20px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
	<body>
	<div class="wrapper">
	<div class="container">
		<div class="col-lg-12">
			<center>
				<h1>Pagina De Seguimiento</h1>	
			</center>
            <hr>
		</div>
		<br>
        <br>
        <br>
		<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <?php session_start(); ?>
                           <h1> Bienvenido <?php echo $_SESSION["usuario"];?><h1>
                            <hr>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <td>Usuario</td>
                                            <td>fecha inicial</td>
                                            <td>fecha final</td>
                                            <td>Estado</td>
                                            <td>Accion</td>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									include "conexion.inc.php";
                                    $usuario=$_SESSION["usuario"];
                                    $sql="SELECT * 
                                          from flujoseguimiento 
                                          WHERE usuario='$usuario'";
                                    //and fechafin is null
                                    $resultado=mysqli_query($con, $sql);
                                    //$usuario=$_SESSION["usuario"];
                                    //echo $usuario;
                                    //echo "gasdfasdfasasd";
                                    ?>
                                    <?php 
                                        while ($fila=mysqli_fetch_array($resultado))
                                        {
                                            ?>
                                            <tr>
                                                <td><?php echo $fila["usuario"]?></td>
                                                <td><?php echo $fila["fechaInicio"]?></td>
                                                <td><?php echo $fila["fechaFin"]?></td>
                                                <td><?php echo $fila["estado"]?></td>
                                                <td><a href='flujo.php?flujo=<?php echo $fila["flujo"]?>&proceso=P2&rol=""&usuario=<?php echo $usuario;?>'><button class="btn btn-primary">Agregar dinero</td>;
                                            </tr>
                                        <?php
                                            
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
		
	</div>

        
    <a href="cerrar_sesion.php"><button class="btn btn-success text-left"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar Sesion</button></a>
	
    </div>								
	</body>
</html>