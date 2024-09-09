<?php

// include 'dbconnection.php';
require 'dbconnection.php';

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);


$num = mysqli_num_rows($result);
echo $num;
echo "record found in the database <br>";



// this is function of read file 
$a = readfile("practice.php");
echo $a;


// This is a file open function 
// fgets read only line by line 

$fptr = fopen("dbconnection.php", "r");
echo fgets($fptr);


cookie 
?>