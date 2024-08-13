<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "db_gp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error){
    die("Conexão falhou, segue o erro : " . $conn->connect_error);
}
?>