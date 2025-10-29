<?php

$server="localhost";
$user="root";
$password="";
$dbname="crud";

$conn= new mysqli($server, $user, $password, $dbname);

if(!$conn){
    die("Connection failed: ".$conn->connect_error);
}
else {
    echo "Connected successfully!!!";
}

?>