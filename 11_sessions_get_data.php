<?php
//verufy the user login info
session_start();
if(isset($_SESSION['username'])){
echo "welcome"   . $_SESSION['username']="sulav";
echo "<br>Your fav category is".$_SESSION['favCat']="Books";
}
else{
    echo "please login to contine";
}
?>