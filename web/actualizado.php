<?php
// Creem l'enllaç de connexió a la base de dades
$enllac = mysqli_connect("localhost","ivan", "ivan", "formula1db");
// Comprovem si la connexió s'ha realitzat amb èxit o no
if (!$enllac) {
    echo "Error a la connexi&oacute;: " . mysqli_connect_error(); 
    

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulari d'actualització d'un registreL</title>
</head>
<body>
    <?php
    // Obtinc l'identificador del registre
    $identificador = $_GET['id'];
    // Construeixo la consulta d'actualització
    $consulta_actualitzacio = "UPDATE Equipos SET nombre = '" . $_POST['nombre'] . "',
                                                pais = '" . $_POST['pais'] . "',
                                                año_fundacion = '" . $_POST['año_fundacion'] . "'
                                                WHERE id=$identificador ";  
       ?>
<?php                                         
// Faig l'actualització
    if (!mysqli_query($enllac, $consulta_actualitzacio)) {
        
        echo "Error en l'actualització del registre!!!";
        echo $consulta_actualitzacio;
        
    } else {
        
        echo"Actualització realitzada!! <a href='demo.php'>Tornar al llistat</a>";
        
    }
?>
</body>
</html>