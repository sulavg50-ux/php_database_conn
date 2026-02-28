<?php

// ways to connect in MySQL database
// 1. MySQLi extension
// 2. PDO

// connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbsulav1";

// create connection
$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
echo "Connection Successful <br>";

// create table
$sql = "CREATE TABLE employee (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    salary INT NOT NULL,
    
)";

// execute query
if(mysqli_query($conn, $sql)){
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// close connection
mysqli_close($conn);

?>
