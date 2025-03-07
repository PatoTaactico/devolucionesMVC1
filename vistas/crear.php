<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>ESTAMOS EN EL MODULO DE CREAR</h2>

    <Form action="" method="post">
        <label for="Nombre_Rol">Nombre_Rol</label>
        <input type="text" name="Nombre_Rol" required id="Nombre_Rol"><br><br>
        <label for="Ficha">Ficha</label>
        <input type="text" name="Ficha" required id="Ficha"><br><br>
        <label for="Fecha">Fecha</label>
        <input type="text" name="Fecha" required id="Fecha"><br><br>
        <label for="Placa">Placa</label>
        <input type="text" name="Placa" required id="Placa"><br><br>
        <<input type="submit" name="enviar" value="Registrar" id="input_registrar">
    </Form>
</body>
</html

<?php
    $controlador=new controladorPersona();
    if (isset($_POST["enviar"])){
        $res=$controlador->crear($_POST['Nombre_Rol'], $_POST['Ficha'], $_POST['Fecha'], $_POST['Placa']);
        echo $res;
    }

    if($res){
        echo "Se ha creado el usuario";
    } else {
        echo "El usuario ya existe";
    }
?>

