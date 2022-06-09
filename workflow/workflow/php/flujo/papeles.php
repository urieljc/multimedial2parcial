<?php
include "conexion.php";
    session_start();
    $sql="select * from personas.documentos ";
    $sql.="where id='".$_SESSION["id"]."'";
    $resultado=mysqli_query($con,$sql);
?>
<table>
    <tr>
        <td>CI</td>
        <td>C. Nacimiento</td>
        <td>Fecha de Nacimiento</td>
        <td>Titulo Profesional</td>
        <td>Sigla</td>
        <td>Operacion</td>

    </tr>

    <?php
    while($fila=mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$fila["ci"]."</td>";
        echo "<td>".$fila["cnacimiento"]. "</td>";
        echo "<td>".$fila["fechanacimeinto"]."</td>";
        echo "<td>".$fila["titulo"]."</td>";
        echo "<td>".$fila["nombresibla"]."</td>";
        echo "<td ><a> Aceptar </a><a> Rechazar </a></td>";
        echo "</tr>";
        echo "<br>";
    }
?>
</table>