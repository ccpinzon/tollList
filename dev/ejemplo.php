<?php 

require "config/conexion.php";

$sql = "SELECT * FROM peaje";
$result = execQuery($sql);

if ($result->num_rows>0) {

	while ($row = $result->fetch_assoc()) {
		
		echo "id peaje: ". $row["ID_PEAJE"]. "CAT1: ". $row["CAT_I"]. "CAT2: ". $row["CAT_II"]. "CAT3: ". $row["CAT_III"]."CAT4: ". $row["CAT_IV"]."CAT5: ". $row["CAT_V"]."CAT6: ". $row["CAT_VI"]."CAT7: ". $row["CAT_VII"]."DEP: ". $row["DEPARTAMENTO"]."LAT: ". $row["LATITUD"]."LON: ". $row["LONGITUD"]."NOMBRE: ". $row["NOMBRE_PEAJE"]."<br>";
	}
}else{
	echo "0 results";
}

?>