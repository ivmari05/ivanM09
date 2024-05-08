<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Incorporación de Datos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            width: 80%;
            margin: 20px auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #fff;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        input[type="text"],
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin: 6px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Añadir mas Datos</h2>
    <form method="post" action="insercio.php">
    <table border="1">
        <tr>
            <td>Nombre:</td><td><input type="text" name="Nombre" required></td>
        </tr>
        <tr>
            <td>Pais:</td><td><input type="text" name="Pais" required></td>
        </tr>
        <tr>
            <td>año_fundacion: </td><td><input type="number" name="año_fundacion" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Enviar"></td>
        </tr>
    </table>
</body>
</html>
