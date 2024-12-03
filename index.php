<?php
//Hemos creado previamente una base de datos que se llama 2025, con una tabla usuarios, con variable usuarios
//Recordar que hostname, localhost;username,root;password, no tiene;base de datos,2025
$mysqli = new mysqli("localhost", "root", "", "2025");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "BASE DE DATOS CONECTADA\n";


?>
