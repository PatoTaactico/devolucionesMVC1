<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        include_once("controlador/enrutador.php");
        include_once("controlador/controlador.php");

    ?>
    <h1> Devoluciones </h1>

    <div>
        <nav>
            <ul>
            <li><a href="index.php">Inicio</a></li>
            </ul>
        </nav>
    </div>


    <?php
        $enrutador = new Enrutador();
        if(isset($_GET["cargar"])){
            $cargar = $_GET["cargar"];
        }else{
            $cargar="";
        }

        if ($enrutador->validarVista($cargar)) {
            $enrutador->cargarVista($cargar);
        }
    ?>
</body>
</html>