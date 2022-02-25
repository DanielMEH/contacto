<?php
require_once("./db/database.php");
if (!isset($_GET['id'])) {
    die("No existe ningun id verifica de nuevo. ".mysqli_close($mysql));
   exit();
}else{

    try {
        
        $id= $_GET['id'];
        $delete= $mysql->query("DELETE FROM contacto WHERE id ='$id'");
         header("location: index.php");
    } catch (\Exception $th) {
        $delete="error". mysqli_close($mysql);
        echo "ERROR: ".$th->getMessage();

    }
}

?>