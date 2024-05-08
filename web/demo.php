<?php
$enllac = mysqli_connect("localhost", "ivan", "ivan", "formula1db");

if (!$enllac){
    echo "Error en la connexió: " . mysqli_connect_error();
}/* else {
    echo "Connexió amb la base de dades realitzada";
} */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario de Creación de Usuario</title>
</head>
<body>
<h1>Enlaces a páginas</h1>
    <table>
        <tr>
            <td><a href="borrar.php">Borrar</a></td>
        </tr>
        <tr>
            <td>actform.php</td>
            <td><a href="actformulario.php">Actualizar</a></td>
        </tr>
    </table>
    <table border='1'>
        <tr><th>Nombre</th><th>Pais</th><th>Año_Funcacion</th></tr>
        
        <?php
            $resultat=mysqli_query($enllac, "SELECT * FROM Equipos");
            while ($fila = mysqli_fetch_array($resultat)) {
                echo "<tr>";
                echo "<td>" . $fila['nombre'] . "</td>";
                echo "<td>" . $fila['pais'] . "</td>";
                echo "<td>" . $fila['año_fundacion'] . "</td>";
                $linkactualizar = "actformulario.php?id=" . $fila['id'];
                $linkborrar = "borrar.php?id=" . $fila['id'];
                echo "<td><a href=\"$linkactualizar\">Actualizar</a> / <a href=\"$linkborrar\">Borrar</a></td>";
                echo "</tr>";
            }

        ?>
    </table> 
</body>

</html>
