<?php

require("./db/database.php");

$get=$_GET['idhidden'];
$name=$_GET['nameid'];
$contacto=$_GET['contactoid'];

try {
    $getUpdate = $mysql->query("UPDATE contacto SET name='$name', contacto='$contacto' WHERE id='$get'");
    header("location: index.php");
} catch (\Exception $th) {
    $getUpdate="ERROR:";
    echo "ERROR: ".$th->getMessage();
}


?>