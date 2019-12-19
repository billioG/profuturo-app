<?php
require_once("../conexion/conexion.php");

$ruta="includes/";

foreach($_FILES as $key){
    $nombre =$key["name"];

    echo ($nombre);

    die();


}





?>