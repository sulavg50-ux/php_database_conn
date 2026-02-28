<?php

// ways to connect in MySQL database
// 1. MySQLi extension
// 2. PDO

// connecting to database
$servername = "localhost";
$username = "root";
$password = "";

// create connection
$conn = mysqli_connect($servername, $username, $password);
if($conn){
    echo "Connection Successful";
}
else{
    echo "Connection Failed: " . mysqli_connect_error();
}



//create a db_create
$sql="CREATE DATABASE dbsulav1";
$result=mysqli_query($conn,$sql);//must be execute after creaying dabase

//check if database creation success or not
if($result){
    echo "The db is created <br>";
}
else{
    echo"The db is already created".mysqli_error($conn);
}


?>