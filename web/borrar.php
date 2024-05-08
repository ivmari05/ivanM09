<?php
// Creem l'enllaç de connexió a la base de dades
$enllac = mysqli_connect("localhost","ivan", "ivan", "formula1db");
// Comprovem si la connexió s'ha realitzat amb èxit o no
if (!$enllac) {
    echo "Error a la connexi&oacute;: " . mysqli_connect_error();
    exit;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulari d'eliminació d'un registre</title>
</head>
<body>
<table>
        <tr>
            <td><a href="demo.php">Inicio</a></td>
        </tr>
        <tr>
            <td><a href="actformulario.php">Actualizar</a></td>
        </tr>
    </table>
    <?php
    // Obtinc l'identificador del registre
    $identificador = $_GET['id'];
    // Construeixo la consulta d'eliminació
    $consulta_eliminacio = "DELETE FROM Equipos WHERE id=$identificador"; // Faig l'eliminació
    if (!mysqli_query($enllac, $consulta_eliminacio)) {
        ?>
        Error en l'eliminació del registre!!!
        <?php
    } else {
        ?>
        Eliminació realitzada!! <a href="demo.php">Tornar al llistat</a>
        <?php
    }
    ?>
</body>
</html>
