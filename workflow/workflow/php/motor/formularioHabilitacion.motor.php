<?php
    include "conexion.php";
    session_start();

    $nombre=$_GET["nombre"];
    $apellido=$_GET["apellido"];
    $id=$_GET["id"];
    $usuario=$_GET["usuario"];
    $password=$_GET["password"];
    $rol="R";
    $_SESSION["representante"]=$_GET["id"];

    $sql1="insert into personas.persona (id,nombre,apellido,idrol) values('$id','$nombre','$apellido','$rol')";
    $sql2="insert into personas.usuario (id,usuario,password) values('$id','$usuario','$password')";
    $resultado=mysqli_query($con,$sql1);
    $resultado=mysqli_query($con,$sql2);

    $flujo=$_GET["flujo"];
    $proceso=$_GET["proceso"];
    $procesoAnterior=$_GET["procesoAnterior"];
    $tramite=$_SESSION['tramite'];

    //crea un nueno campo en la tabla flujo seguimiento
    //$id=$_SESSION["id_usuario"];
    $fecha=date('Y-m-d');
    $sql="insert into flujoprocesoseguimiento (FlujoP,Proceso,NroTramite,idUsuario,FechaInicio) values('$flujo','$proceso','$tramite','$id','$fecha')";
    $resultado=mysqli_query($con,$sql);

    //se actualiza el campo anterior
    $sql="update flujoprocesoseguimiento set FechaFin='$fecha' where idUsuario='$id' and NroTramite='$tramite' and Proceso='$procesoAnterior'";
    $resultado=mysqli_query($con,$sql);

?>