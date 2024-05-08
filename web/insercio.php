<?php
$enllac = mysqli_connect("localhost","ivan","ivan", "formula1db");

if (!$enllac) {
    echo "Error en la conexión: " . mysqli_connect_error();
    exit;
}

$Nombre = $_POST['nombre'];
$Pais = $_POST['pais'];
$año_fundacion = $_POST['año_fundacion'];

$insercio_sql = "INSERT INTO Equipos VALUES (NULL, '$Nombre', '$Pais', '$año_fundacion')";

?>
<!DOCTYPE html>
<html lang="es">
<head>

    <title>Formulario de Creación de Usuario</title>
</head>
<body>
<table>
        <tr>
            <td><a href="demo.php">Inicio</a></td>
        </tr>
</table>
    <?php
    $resultat = mysqli_query($enllac, $insercio_sql);
    if ($resultat) {
        echo "Inserció de dades CORRECTAMENT realitzada";
    } else {
        echo "Error en la inserció de dades: " . mysqli_error($enllac);
    }
    ?>
</body>
</html>