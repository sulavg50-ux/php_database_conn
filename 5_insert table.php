<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbsulav1";

// connection
$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){
    echo "Connection successful <br>";
} else {
    echo "Connection unsuccessful: " . mysqli_connect_error();
}

// insert query
$sql = "INSERT INTO employee (name, email, salary)
        VALUES ('Sulav', 'sulavg50@gmail.com', 20000)";

$result = mysqli_query($conn, $sql);

if($result){
    echo "Insert Success";
}
else{
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>




