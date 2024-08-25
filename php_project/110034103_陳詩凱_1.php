<?php
$server_name = 'localhost';
$user_name = 'root';
$password = 'mysql';
$dbname = 'homework2';
$conn = new mysqli($server_name, $user_name, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed :".$conn->connect_error);
} else {
    echo "Connected Database: $dbname successfully !<br>" ;
}

$sql = "CREATE TABLE s110034103(
    CarID INT AUTO_INCREMENT,
    CarName VARCHAR(30) NOT NULL,
    DoorNumber VARCHAR(30) NOT NULL,
    CarLength float(6) NOT NULL,
    CarWidth float(6) NOT NULL,
    CarHeight float(6) NOT NULL,
    PRIMARY KEY(CarID)
    )";
    
    if($conn->query($sql)===true){
        echo "Table s110034103 created successfully";
    }else{
        echo "Error creating table: ".$conn->error;
    }

    //跳轉頁面(7秒)
    echo "<br>";
    echo "Go to 110034103_陳詩凱_2.php in 7 seconds.";
    header("Refresh:7 ;url=110034103_陳詩凱_2.php");
?>