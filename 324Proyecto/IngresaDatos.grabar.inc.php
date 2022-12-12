<?php
$nombres = $_GET["nombres"];
$apPaterno=$_GET["aPaterno"];
$apMaterno=$_GET["aMaterno"];
$monto = $_GET["monto"];
include "conexion.inc.php";
$sql = "SELECT id
        from usuario";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);

$id = "SELECT xp.id
    from persona xp, usuario xu
    where xp.nombre = '$nombres'
    and xp.apPaterno = '$apPaterno'
    and xp.apMaterno = '$apMaterno'
    and xp.id = xu.id";
$resultado2=mysqli_query($con, $id);
$fila2=mysqli_fetch_array($resultado2);

$sql2 = "SELECT DISTINCT apPaterno
         from persona";
$resultado=mysqli_query($con, $sql2);
$condi=mysqli_fetch_array($resultado);
//print_r($fila);
//var_dump($condi);
    $idusuario = $fila2['id'];
	$sql = "UPDATE usuario SET saldo=saldo+$monto WHERE id =$idusuario";
    mysqli_query($con,$sql);
?>