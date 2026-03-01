<?php
//verufy the user login info
session_start();
$_SESSION['username']="sulav";
$_SESSION['favCat']="Books";
echo"We have saved your session";
?>