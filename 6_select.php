<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbsulav1";

// connection
$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){
    echo "Connection successful <br><br>";
} else {
    echo "Connection unsuccessful: " . mysqli_connect_error();
}

// select specific id
$sql = "SELECT * FROM employee WHERE id = 1";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

    $row = mysqli_fetch_assoc($result);

    echo "ID: " . $row['id'] . "<br>";
    echo "Name: " . $row['name'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "Salary: " . $row['salary'] . "<br>";

} else {
    echo "No record found with ID = 1";
}

mysqli_close($conn);
?>