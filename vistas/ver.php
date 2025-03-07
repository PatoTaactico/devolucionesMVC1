<?php
    $controlador = new controladorPersona();

    if (isset($_GET['ID'])){
        $registro = $controlador->ver($_GET['ID']);
    } else {
        header('Location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Persona</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <!-- Contenedor principal -->
    <div class="info-container">
        <p class="info-item"><strong>Nombre/Rol:</strong> <?php echo $registro['Nombre_Rol']; ?></p>
        <p class="info-item"><strong>Ficha:</strong> <?php echo $registro['Ficha']; ?></p>
        <p class="info-item"><strong>Fecha:</strong> <?php echo $registro['Fecha']; ?></p>
        <p class="info-item"><strong>Placa:</strong> <?php echo $registro['Placa']; ?></p>
    </div>
</body>
</html>


