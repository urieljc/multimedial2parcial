pantalla de fecha <br>
<?php

    session_start();
    //echo "Hola ".$_SESSION["id"];
    //echo "<br>";

    include "../motor/conexion.php";
    $sql="select * from personas.persona where id=".$_SESSION["id"];
    $resultado=mysqli_query($con,$sql);
    $fila=mysqli_fetch_array($resultado);

    $nombrecompleto=$fila["nombre"];
    $idRol=$fila["idrol"];
    $sql1="select * from personas.rol where idrol='$idRol'";
    $resultado1=mysqli_query($con,$sql1);
    $fila1=mysqli_fetch_array($resultado1);
    $rol=$fila1["descripcion"];
?>