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

#Insert data
/*$sql = "INSERT INTO pokedex(pokemonID,pokemonName,pokemonHeight,pokemonWeight)
VALUES (1,'pikachu',0.7,6.9)";
*/

#Insert multiple data
$sql = "INSERT INTO pokedex(pokemonID,pokemonName,pokemonHeight,pokemonWeight)
VALUES (1,'pikachu',0.7,6.9);";
$sql = "INSERT INTO pokedex(pokemonID,pokemonName,pokemonHeight,pokemonWeight)
VALUES (2,'Moe',0.5,8.8);";
$sql = "INSERT INTO pokedex(pokemonID,pokemonName,pokemonHeight,pokemonWeight)
VALUES (3,'Dooley',0.6,9.6)";


if($conn->query($sql)===TRUE){
    echo "New record created successfully";
}
else{
    echo "Error: ".$sql."<br>".$conn->error;
}
?>