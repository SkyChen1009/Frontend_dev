<?php
$server_name = 'localhost';
$user_name = 'root';
$password = 'mysql';
$dbname = 'albums';
$conn = new mysqli($server_name, $user_name, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed :".$conn->connect_error);
} else {
    echo "Connected Database: $dbname successfully !<br>" ;
}

$sql = "CREATE TABLE productstable(
    BandID INT(6) AUTO_INCREMENT PRIMARY KEY,
    BandName VARCHAR(30) NOT NULL,
    Style VARCHAR(30) NOT NULL,
    Album VARCHAR(30) NOT NULL,
    AlbumPrice int(6) NOT NULL;
    )";
    
    if($conn->query($sql)===true){
        echo "Table productstable created successfully";
    }else{
        echo "Error creating table: ".$conn->error;
    }

    /*//跳轉頁面(7秒)
    echo "<br>";
    echo "Go to 110034103_陳詩凱_2.php in 7 seconds.";
    header("Refresh:7 ;url=110034103_陳詩凱_2.php");*/
?>