<?php
$username="localhost";
$servername="root";
$password="";
$database="dbsulav1";

$conn=mysqli_connect($username,$servername,$password,$database);
if(!$conn){
    die("unsuccessful".mysqli_connect_error());
}
else{

echo  "Connection Successfull";
}

$sql="UPDATE employee
    SET name='Ram',
    email='ram34@gmail.com',
    salary=20000
    WHERE id=1";
$result=mysqli_query($conn,$sql);
if($result){
    echo"Record update successfully";
}
else{
    echo"Error update".mysqli_error($conn);
}
?>