<?php

//connecting to a Databasese

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
    echo "Connection was Successfully<br> ";
}

$sql = "SELECT *FROM `phptrip`";
$result = mysqli_query($conn ,$sql);
 
//find the number of records returns
$num = mysqli_num_rows($result);
echo $num;
echo "records founds in the database <br>";

$sql ="UPDATE `phptrip` SET `name` = 'ahmed' WHERE `phptrip`.`s no` = 2";
$result = mysqli_query($conn ,$sql);
if ($result){
    echo "we updated the record successfully!";  
}
else{
    echo "we are not updated record successfully!";
} 




?>