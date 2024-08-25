<?php
$server_name='localhost';
$user_name='root';
$password='mysql';
$dbname='homework2';

#create connection
$conn=new mysqli($server_name,$user_name,$password,$dbname);

//check connnection
if($conn->connect_error){
    die("Connection failed : ". $conn->connect_error);
}
else{
    echo "Connected Database : $dbname successfully !";
}


#Insert multiple data
$sql = "INSERT INTO s110034103(CarID,CarName,DoorNumber,CarLength,CarWidth,CarHeight)
VALUES (1,'alfa-romero giulia','two',168.8,64.1,48.8);";
$sql .= "INSERT INTO s110034103(CarID,CarName,DoorNumber,CarLength,CarWidth,CarHeight)
VALUES (2,'audi 99ls','four',176.6,66.4,54.3);";
$sql .= "INSERT INTO s110034103(CarID,CarName,DoorNumber,CarLength,CarWidth,CarHeight)
VALUES (3,'bmw x0','two',176.8,64.8,54.3);";
$sql .= "INSERT INTO s110034103(CarID,CarName,DoorNumber,CarLength,CarWidth,CarHeight)
VALUES (4,'dodge d199','two',157.3,63.8,50.8);";
$sql .= "INSERT INTO s110034103(CarID,CarName,DoorNumber,CarLength,CarWidth,CarHeight)
VALUES (5,'jaguar xj','four',199.6,69.6,52.8)";


if($conn->multi_query($sql)===TRUE){
    echo "Inserted successfully !";
}
else{
    echo "Error: ".$sql."<br>".$conn->error;
}

    //跳轉頁面(7秒)
    echo "<br>";
    echo "Go to 110034103_陳詩凱_3.php in 7 seconds.";
    header("Refresh:7 ;url=110034103_陳詩凱_3.php");
?>