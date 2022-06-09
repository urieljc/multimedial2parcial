<?php
    include "conexion.php";
    session_start();
    $carrera=$_GET["carrera"];
    $fechaInicio=$_GET["fechaInicio"];
    //$fechaInicio->format('Y-m-d');
    $fechaFin=$_GET["fechaFin"];
    //$fechaFin->format('Y-m-d');
    $id=$_SESSION['id'];
    $sql="insert into personas.elecciones (id,carrera,FechaInicio,FechaFin) values ('$id','$carrera','$fechaInicio','$fechaFin')";
    $resultado=mysqli_query($con,$sql);

    $flujo=$_GET["flujo"];
    $proceso=$_GET["proceso"];
    $procesoAnterior=$_GET["procesoAnterior"];
    $tramite=$_SESSION['tramite'];

    //crea un nueno campo en la tabla flujo seguimiento
    $id=$_SESSION["id_usuario"];
    $fecha=date('Y-m-d');
    $sql="insert into flujoprocesoseguimiento (FlujoP,Proceso,NroTramite,idUsuario,FechaInicio) values('$flujo','$proceso','$tramite','$id','$fecha')";
    $resultado=mysqli_query($con,$sql);

    //se actualiza el campo anterior
    $sql="update flujoprocesoseguimiento set FechaFin='$fecha' where idUsuario='$id' and NroTramite='$tramite' and Proceso='$procesoAnterior'";
    $resultado=mysqli_query($con,$sql);
?>