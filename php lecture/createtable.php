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

#create table
$sql="CREATE TABLE pokedex(
    pokemonID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    pokemonName VARCHAR(30) NOT NULL,
    pokemonHeight VARCHAR(30) NOT NULL,
    pokemonWeight VARCHAR(50)
    )";

if($conn->query($sql)===TRUE){
    echo "Table pokedox created successfully";
}
else{
    echo "Error creating table : ".$conn->error;
}
?>