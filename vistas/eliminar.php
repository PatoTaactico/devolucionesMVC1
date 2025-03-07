<?php
    $controlador = new ControladorPersona();

    if (isset($_GET["ID"])){
        $registro = $controlador -> ver($_GET["ID"]);
    } else {
        header("Location:index.php");
    }

    if (isset($_POST["eliminar"])){
        $controlador -> eliminar($_GET["ID"]);
        header("Location:index.php");
    }
?>

<h1>ESTAMOS EN EL MODULO DE ELIMINAR</H1>
<form action="" method="post">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre_Rol</th>
                <th>Ficha</th>
                <th>Fecha</th>
                <th>Placa</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $registro["ID"] ?></td>
                <td><?php echo $registro["Nombre_Rol"] ?></td>
                <td><?php echo $registro["Ficha"] ?></td>
                <td><?php echo $registro["Fecha"] ?></td>
                <td><?php echo $registro["Placa"] ?></td>
                <td><input type="submit" name="eliminar" value="Eliminar"></td>
            </tr>
        </tbody>
    </table>
</form>
