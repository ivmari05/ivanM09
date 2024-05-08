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
<title>Formulari d'actualització d'un registre</title>
</head>
<body>
<table>
        <tr>
            <td><a href="demo.php">Inicio</a></td>
        </tr>
</table>
    <?php
    // Obtinc l'identificador del registre
    $identificador = $_GET['id'];
    $resultat = mysqli_query($enllac, "SELECT * FROM Equipos WHERE id = '$identificador'");
    // Faig la consulta SQL a la base de dades per a obtenir les dades del registre $resultat = mysqli_query($enllac, "SELECT * FROM dades WHERE id=$identificador"); // Obtinc el registre
    $registre = mysqli_fetch_array($resultat);
    // Carrego el formulari
    ?>
    <form method="post" action="actualizado.php?id=<?php echo $identificador ?>"> 
    <table border="1">
    <tr>
            <td>Nombre:</td><td><input type="text" name="nombre" value="<?php echo $registre['nombre'] ?>"></td>
        </tr>
        <tr>
            <td>Pais:</td><td><input type="text" name="pais" value="<?php echo $registre['pais'] ?>"></td>
        </tr>
        <tr>
            <td>año_fundacion: </td><td><input type="number" name="año_fundacion" value="<?php echo $registre['año_fundacion'] ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Enviar"></td>
        </tr>
    </table>
    </form>
</body>
</html>