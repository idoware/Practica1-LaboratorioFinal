<?php
require 'conexion.php';
validacion($conexion);
$res = consulta($conexion);

if (!$res) {
    die(mysqli_error($conexion));
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion a una base de datos</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="contenedor">
        <header>
            <div class="nombrePagina">
                <h3>Proyecto Final</h3>
            </div>

            <nav class="menu">
                <a href="index.html">Inicio</a>
                <a href="resultado.php">Ir a consulta</a>
                <a href="enunciado.php">Enunciado</a>
                <a href="modeloER.php">Modelo entidad relacion</a>
                <a href="modeloR.php">Modelo Relacional</a>
            </nav>
        </header>

        <div class="cons">
            <h1><?php echo 'Conexion establecida a la base de datos: ' . $nombreBD; ?></h1>
            <h2><?php echo 'Conectado al usuario: '. $usuarioBD;?></h2>
            <h2><?php echo 'La consulta realizada fue: ' ?> <p class="consulta"><?php echo $sql ?></p>
            </h2>
        </div>

        <table class="tabla">
            <tr>
                <th>No_control</th>
                <th>Nombre_alum</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Semestre</th>
                <th>Creditos</th>
            </tr>

            <?php

            validacion($conexion);
            $res = consulta($conexion);

            if (!$res) {
                die(mysqli_error($conexion));
            }

            while ($fin = mysqli_fetch_assoc($res)) { ?>
                <tr>
                    <td><?php echo $fin['No_control'] . "<br>" ?></td>
                    <td><?php echo $fin['Nombre_alum'] . "<br>" ?></td>
                    <td><?php echo $fin['Telefono'] . "<br>" ?></td>
                    <td><?php echo $fin['Correo'] . "<br>" ?></td>
                    <td><?php echo $fin['Semestre'] . "<br>" ?></td>
                    <td><?php echo $fin['Creditos'] . "<br>" ?></td>
                </tr>
            <?php
            } ?>

        </table>

        <footer>
            <div class="autor">
                <p>Autor: <br><br>
                    Magaly Idolisa Rojas Silva <br>
            </div>
        </footer>
</body>

</html>
