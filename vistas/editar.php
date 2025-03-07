<?php
    $controlador = new ControladorPersona();

    if (isset($_GET["ID"])){
        $registro = $controlador -> ver($_GET["ID"]);
    } else {
        header("Location:index.php");
    }

    if (isset($_POST["editar"])){
        $controlador -> editar($_POST["Nombre_Rol"],$_POST["Ficha"], $_POST["Fecha"], $_POST["Placa"]);
        header("Location:index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ESTAMOS EN EL MODULO DE EDITAR</h1>
    <form action="" method="post">
        <label for="Nombre_Rol">Nombre_Rol</label>
        <input type="text" name="Nombre_Rol" required id="Nombre_Rol">
    
        <label for="Ficha">Ficha</label>
        <input type="text" name="Ficha" required id="Ficha">
    
        <label for="Placa">Fecha</label>
        <input type="text" name="Fecha" required id="Fecha">
    
        <label for="Placa">Placa</label>
        <input type="text" name="Placa" required id="Placa">
    
        <input type="submit" name="editar" value="Actualizar">
    </form>
</body>
</html>