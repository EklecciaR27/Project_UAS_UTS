<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "uas_web";

$db = new mysqli($server, $username, $password, $db_name);

if(!$db){
    die("Gagal");
}


?>