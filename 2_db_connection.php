<?php
echo "Welcome we are ready to connect database<br><br>";

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
?>