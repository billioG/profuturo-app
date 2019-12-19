<?php
$conexion = mysqli_connect("localhost", "root", "", "profuturo");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

?>