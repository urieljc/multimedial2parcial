<?php
    include "conexion.php";
    $flujo=$_GET["flujo"];
    $proceso=$_GET["procesoAnterior"];
    $procesoSiguiente=$_GET["proceso"];
    $sql="select * from flujoproceso where FlujoP='$flujo' and Proceso='$proceso'";
    $resultado=mysqli_query($con,$sql);
    $fila=mysqli_fetch_array($resultado);
    $pantalla=$fila['Pantalla'];
    $pantalla.=".motor.php";
    include $pantalla;
    if(isset($_GET["Anterior"])){
        $sql="select * from flujoproceso ";
        $sql.="where FlujoP='$flujo' and ProcesoSiguiente='$proceso'";
        $resultado1=mysqli_query($con,$sql);
        $fila1=mysqli_fetch_array($resultado1);
        //$proceso=$fila1["Proceso"];
        $procesoSiguiente=$fila1["Proceso"];
    }
    header("Location:nuevoProceso.php?flujo=$flujo&proceso=$procesoSiguiente");
?>