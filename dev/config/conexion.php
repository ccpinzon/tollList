<?php

require_once "global.php";

$DB_HOST = "localhost";
$DB_USERNAME = "id4263271_root";
$DB_PASSWORD = "peajes4211";
$DB_NAME = "id4263271_bd_peajes";




$conexion = new mysqli($DB_HOST,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);

mysqli_query($conexion,'SET NAMES"'.DB_ENCODE.'"');

// posible error en la cadena de conexion

if (mysqli_connect_errno()){
    echo "Fallo la conexion a la BD: %s\n".mysqli_connect_error();
    exit();
}

if (!function_exists('execQuery')){
    function execQuery($sql){
        global $conexion;
        $query = $conexion->query($sql);
        return $query;
    }

    function execQuerySimpleRow($sql){
        global $conexion;
        $query = $conexion->query($sql);
        $row = $query->fetch_assoc();
        return $row;
    }

  
}

?>