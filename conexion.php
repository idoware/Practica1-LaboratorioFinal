<?php
//Se pasa el nombre del servidor
$nombreServer = 'localhost';
//Se define el nombre de la base de datos, su usuario y contraseña
$nombreBD = "residencias";
$usuarioBD = "docente";
$passwordBD = "1234";
//Se crea la conexión a la base de datos usando mysqli
$conexion = mysqli_connect($nombreServer, $usuarioBD, $passwordBD, $nombreBD);
//Se crea variable para guardar la consulta
$sql = "";

//Funcion para validar si la conexion fue exitosa
function validacion($conexion){
    //Si existe conexion devuelve true
    if ($conexion) {
      return true;
    //De otro modo devuelve false
    } else {
      die('No se pudo conectar a la base de datos, revise las credenciales');
      return false;
    }
}

//Funcion para realizar una consulta
function consulta($conexion){
    global $sql;
    //Se asigna a la variable la consulta
    $sql= "SELECT * FROM alumno";
    //Se crea la query
    $stmt = mysqli_query($conexion, $sql);
    return $stmt;
}
?> 
