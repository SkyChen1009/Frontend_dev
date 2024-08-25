<html>
    <body>
    <h1>Create albums data</h1>    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            Please enter Band ID :<input type="text" name="BandID">
            <br>
            Please enter Band Name :<input type="text" name="BandName">
            <br>
            Please enter Style :<input type="text" name="Style">
            <br>
            Please enter Album :<input type="text" name="Album">
            <br>
            Please enter Album Price :<input type="text" name="AlbumPrice">
            <br>
            <button type="submit" name="createbutton">Create</button>
            <button type="reset">Reset</button>
        </form>

        <h1>Search Band Data by BandID</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Search by ID : <input type="text" name="search">
        <button type="submit" name="searchbutton">Search</button>
        </form>

        <h1>Update Band Name by BandID</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        ID : <input type="text" name="update_ID">
        <br>
        Update Band Name by ID :<input type="text" name="update_carname">
        <button type="submit" name="updatebutton">Update</button>

        <h1>Delete Data by BandID</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Delete data by BandID :<input type="text" name="delete_ID">
        <button type="submit" name"deletebutton">Delete</button>

        <?php
        include_once "hw3_createtable.php";
        echo "<br>";
        if(isset($_POST['createbutton'])){
            $BandID=$_POST['BandID'];
            $BandID=trim(stripslashes($BandID));
            $BandName=$_POST['BandName'];
            $BandName=trim(stripslashes($BandName));
            $Style=$_POST['Style'];
            $Style=trim(stripslashes($Style));
            $Album=$_POST['Album'];
            $Album=trim(stripslashes($Album));
            $AlbumPrice=$_POST['AlbumPrice'];
            $AlbumPrice=trim(stripslashes($AlbumPrice));
            $sql="INSERT INTO productstable VALUES('$BandID','$BandName','$Style','$Album','$AlbumPrice')";
            if(mysqli_query($conn, $sql)){
                echo "Inserted successfully !<br>";
                echo "--------------------------------<br>";
                echo "Band ID :$BandID<br>";
                echo "Band Name :$BandName<br>";
                echo "Style :$Style<br>";
                echo "Album :$Album<br>";
                echo "AlbumPrice :$AlbumPrice<br>";
            }else{
                echo"No data.<br>";
            }
        }
        if(isset($_POST['deletebutton'])){
            $delete_id=$_POST['delete_ID'];
            $sql = "DELETE FROM productstable WHERE BandID = $delete_id";
            if($conn->query($sql)===TRUE){
                echo "<br>" . "Delete BandID = $delete_id successfully !"."<br>";
            }else{
                echo"No data.<br>";
            }
        }
        if(isset($_POST['searchbutton']))
        {
            $id=$_POST['search'];
            $sql="SELECT * FROM productstable WHERE BandID = $id";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                echo "Search BandID = $id successfully !<br>";
                echo "--------------------------------<br>";
                while($row = $result->fetch_assoc()){
                    echo "Band ID : " . $row['BandID'] . "<br>";
                    echo "Band Name : " . $row['BandName'] . "<br>";
                    echo "Style : " . $row['Style'] . "<br>";
                    echo "Album : " . $row['Album'] . "<br>";
                    echo "Album Price : " . $row['AlbumPrice'] . "<br>";
                }
            }else{
                echo"No data.<br>";
            }
        }
        if(isset($_POST['updatebutton'])){
            $update_ID=$_POST['update_ID'];
            $update_BandName=$_POST['update_BandName'];
            $sql="UPDATE productstable SET BandName='$update_BandName' WHERE BandID='update_ID'";
            if($conn->query($sql)===TRUE){
                echo "Update Band ID=$update_ID successfully !<br>";
                echo "------------------------------------------<br>";
                echo "Car Id :$update_ID<br>";
                echo "Change BandName : $update_BandName";
            }
            else{
                echo"No data.<br>";
            }
        }
        ?>
    </body>
</html>