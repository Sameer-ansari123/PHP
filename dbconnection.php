<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "sameer3";

//Create a connection 
 $conn = mysqli_connect($servername, $username, $password, $database);
//Die  if connection was not successful
if(!$conn){ 
    die("Sorry! we can failed to connect: ". mysqli_connect_error());
}
 else {
    echo "Connection was Successfully ";
}


 ?>