<?php
$server = "localhost:3306";
$user = "root";
$password = "";
$database = "talha";

$conn = mysqli_connect($server, $user, $password, $database);

if(!$conn){
    die("Error".mysqli_connect_error());
}

?>