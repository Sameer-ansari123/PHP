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
    echo "Connection was Successfully ";
}

//create a table in the database 
$sql = "CREATE TABLE `phptrip` (`s no` INT(6) NOT NULL , `name` VARCHAR(12) NOT NULL , `Dest` VARCHAR(6) NOT NULL ,
 PRIMARY KEY (`s no`))";
$result = mysqli_query($conn, $sql);
//check for the database creation success
if($result){
     echo "the database created successfully!<br>";
}else {
    echo "The databse not created succesfully because of this error -->".mysqli_error($conn);
}


?> 