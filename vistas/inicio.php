<?php
$controlador = new controladorPersona();
$resultado = $controlador->index();
?>

<html>
    <head>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <?php
        $fila = mysqli_fetch_assoc($resultado);
        ?>
        <a href='?cargar=crear&ID=<?php echo $fila["ID"]; ?>'>Crear</a>

        <div class="tabla-contenedor">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre/Rol</th>
                    <th>Ficha</th>
                    <th>Fecha</th>
                    <th>Placa</th>
                    <th>Enviar</th>
                </tr>
                <tbody>
                    <?php
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>";
                        echo "<td>" . $fila["ID"] . "</td>";
                        echo "<td>" . $fila["Nombre_Rol"] . "</td>";
                        echo "<td>" . $fila["Ficha"] . "</td>";
                        echo "<td>" . $fila["Fecha"] . "</td>";
                        echo "<td>" . $fila["Placa"] . "</td>";
                        echo "<td><a href='?cargar=ver&ID=" . $fila["ID"] . "'>Ver</a> ";
                        echo "<a href='?cargar=editar&ID=" . $fila["ID"] . "'>Editar</a> ";
                        echo "<a href='?cargar=eliminar&ID=" . $fila["ID"] . "'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>