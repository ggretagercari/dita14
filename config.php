<?php

session_start();

$user = "root";
$pass = "";
$server = "localhost";
$dbname = "userss";

try{

    $conn = new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);

}catch(Exeption $e){

    echo "Error" . $e->getMessage();

}