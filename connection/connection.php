<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "dbwebtest";
$link = mysqli_connect($host, $user, $pass, $database);

if (!$link) {
    print "Falha na conexão com o banco de dados!";
}
?>