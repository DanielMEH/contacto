<?php

require("./db/database.php");


if (empty( $_POST['name'])&& empty($_POST['contacto'])) {
    die("Error los campos deben de estar completos" .mysqli_close($mysql));
    exit();
}else{

    $name = $_POST['name'];
    $contacto = $_POST['contacto'];
    try {
        $sqlInsert = $mysql->query("INSERT INTO contacto(name,contacto)VALUES('$name','$contacto')");
        header('location: index.php');
    } catch (\Exception $th) {
        $sqlInsert = "error";
        echo "ERROR: " . $th->getMessage();
    }
}


?>