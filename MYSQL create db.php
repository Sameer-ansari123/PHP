<?php
//connecting to a Databasese

$servername = "localhost";
$username = "root";
$password = "";

//Create a connection 
//Die  if connection was not successful
$conn = mysqli_connect($servername, $username, $password);
if(!$conn){ 
    die("Sorry! we can failed to connect: ". mysqli_connect_error());
}
 else {
    echo "Connection was Successfully ";
}

//create a table in the db
$sql = "CREATE DATABASE Sameer6";
$result = mysqli_query($conn, $sql);
//check foe the database creation success
if($result){
     echo "the database created successfully!<br>";
}
else {
    echo "The databse not created succesfully because of this error -->".mysqli_erro($conn);
}
   


?>  
