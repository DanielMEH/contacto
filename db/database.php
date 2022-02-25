<?php

CONST HOST= "localhost";
CONST USER="root";
CONST PASSWORD="";
CONST DBNAME= "contactos";
try {
    $mysql = new mysqli(HOST, USER, PASSWORD, DBNAME);
} catch (\Exception $th) {
    $mysql= "Error de conexion";
    echo "ERROR: ". $th->getMessage();
}




?>