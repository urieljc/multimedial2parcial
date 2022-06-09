<?php
    include "conexion.php";
    session_start();

    $id=$_SESSION["id"];
    if(isset( $_GET["ci"]))
    {$ci=$_GET["ci"];}else{
        $ci=0;
    }

    if(isset( $_GET["cNacimiento"]))
    {$nacimiento=$_GET["cNacimiento"];}
    else{
        $nacimiento=0;
    }
    
    $fecha=$_GET["nacimiento"];
    if(isset( $_GET["titulo"]))
    {$titulo=$_GET["titulo"];}
    else{
        $titulo=0;
    }
    
    $sigla=$_GET["sigla"];

    $sql="insert into personas.documentos (id,ci,cnacimiento,fechanacimeinto,titulo,nombresibla) values('$id','$ci','$nacimiento','$fecha','$titulo','$sigla')";
    $resultado=mysqli_query($con,$sql);

    $flujo=$_GET["flujo"];
    $proceso=$_GET["proceso"];
    $procesoAnterior=$_GET["procesoAnterior"];
    $tramite=$_SESSION['tramite'];
    //$idM=$_SESSION["id"];
    //crea un nueno campo en la tabla flujo seguimiento
    //$id=$_SESSION["id_usuario"];
    $fecha=date('Y-m-d');
    $sql="insert into flujoprocesoseguimiento (FlujoP,Proceso,NroTramite,idUsuario,FechaInicio) values('$flujo','$proceso','$tramite','1','$fecha')";
    $resultado=mysqli_query($con,$sql);

    //se actualiza el campo anterior
    $sql="update flujoprocesoseguimiento set FechaFin='$fecha' where idUsuario='$id' and NroTramite='$tramite' and Proceso='$procesoAnterior'";
    $resultado=mysqli_query($con,$sql);

?>