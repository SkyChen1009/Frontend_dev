<?php
$server_name='localhost';
$user_name='root';
$password='mysql';
$dbname='albums';

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
$sql = "INSERT INTO albums(BandID,BandName,Style,Album,AlbumPrice)
VALUES (1,'Chthonic','Hardcore Metal','Battlefield of Assuras',480);";
$sql .= "INSERT INTO albums(BandID,BandName,Style,Album,AlbumPrice)
VALUES (2,'Crystal Lake','Deathcore Metal','Helix',1050);";
$sql .= "INSERT INTO albums(BandID,BandName,Style,Album,AlbumPrice)
VALUES (3,'Flesh Juicer','Grindcore NuMetal','Golden Taizi Bro',350);";
$sql .= "INSERT INTO albums(BandID,BandName,Style,Album,AlbumPrice)
VALUES (4,'Obsess','Emotional Rock','Beast',620);";
$sql .= "INSERT INTO albums(BandID,BandName,Style,Album,AlbumPrice)
VALUES (5,'Fire EX','Punk Rock','Let me Stand Up like a Taiwanesse',780);";
$sql .= "INSERT INTO albums(BandID,BandName,Style,Album,AlbumPrice)
VALUES (6,'Infernal Chaos','Hardcore Metal','Vision of Disorder',920);";


if($conn->multi_query($sql)===TRUE){
    echo "Inserted successfully !";
}
else{
    echo "Error: ".$sql."<br>".$conn->error;
}

    /*//跳轉頁面(7秒)
    echo "<br>";
    echo "Go to 110034103_陳詩凱_3.php in 7 seconds.";
    header("Refresh:7 ;url=110034103_陳詩凱_3.php");*/
?>