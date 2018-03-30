<?php

require_once "./config/conexion.php";



class Peaje{


   
    public function __construct()
    {
    }


    public function listarPeaje(){

    	

        $sql = "SELECT p.ID_PEAJE,p.CAT_I,p.CAT_II,p.CAT_III,p.CAT_IV,p.CAT_V,p.CAT_VI,p.CAT_VII,p.DEPARTAMENTO,p.LATITUD,p.LONGITUD,p.NOMBRE_PEAJE
                FROM peaje p";
        return execQuery($sql);
    }
}


?>