<?php
include_once "login.php";
echo "<br>";

#create database
$sql="CREATE DATABASE pokemon";
if($conn->query($sql===true)){
    echo "Database created successfully";
}
else{
    echo "Error creating database : ".$conn->error;
}
?>