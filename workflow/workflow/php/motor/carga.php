<?php
include "../motor/conexion.php";
session_start();

$id=$_SESSION["id_usuario"];
$fecha=date('Y-m-d');
$tramite=rand(1,100);
$_SESSION["tramite"]=$tramite;
//comando sql 
$sql="insert into flujoprocesoseguimiento (FlujoP,Proceso,NroTramite,idUsuario,FechaInicio) values('F1','P1','$tramite','$id','$fecha')";
$resultado=mysqli_query($con,$sql);
header("Location:nuevoProceso.php?flujo=F1&proceso=P1");
?>
