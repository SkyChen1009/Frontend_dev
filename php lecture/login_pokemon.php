<?php
$server_name='localhost';
$user_name='root';
$password='mysql';
$dbname='pokemon';

#create connection
$conn=new mysqli($server_name,$user_name,$password.$dbname);

//check connnection
if($conn->connect_error){
    die("Connection failed : ". $conn->connect_error);
}
else{
    echo "Connected succesfully !";
}
?>