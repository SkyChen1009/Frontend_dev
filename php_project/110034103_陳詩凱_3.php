<html>
    <body>
    <h1>Create car data</h1>    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            Please enter Car ID :<input type="text" name="CarID">
            <br>
            Please enter Car Name :<input type="text" name="CarName">
            <br>
            Please enter Door Number :<input type="text" name="DoorNumber">
            <br>
            Please enter Car Length :<input type="text" name="CarLength">
            <br>
            Please enter Car Width :<input type="text" name="CarWidth">
            <br>
            Please enter Car Height :<input type="text" name="CarHeight">
            <br>
            <button type="submit" name="createbutton">Create</button>
            <button type="reset">Reset</button>
        </form>

        <h1>Search Car Data by CarID</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Search by ID : <input type="text" name="search">
        <button type="submit" name="searchbutton">Search</button>
        </form>

        <h1>Update CarName by CarID</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        ID : <input type="text" name="update_ID">
        <br>
        Update Car Name by ID :<input type="text" name="update_carname">
        <button type="submit" name="updatebutton">Update</button>

        <h1>Delete Data by CarID</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Delete data by CarID :<input type="text" name="delete_ID">
        <button type="submit" name"deletebutton">Delete</button>

        <?php
        include_once "login.php";
        echo "<br>";
        if(isset($_POST['createbutton'])){
            $CarID=$_POST['CarID'];
            $CarID=trim(stripslashes($CarID));
            $CarName=$_POST['CarName'];
            $CarName=trim(stripslashes($CarName));
            $DoorNumber=$_POST['DoorNumber'];
            $DoorNumber=trim(stripslashes($DoorNumber));
            $CarLength=$_POST['CarLength'];
            $CarLength=trim(stripslashes($CarLength));
            $CarWidth=$_POST['CarWidth'];
            $CarWidth=trim(stripslashes($CarWidth));
            $CarHeight=$_POST['CarHeight'];
            $CarHeight=trim(stripslashes($CarHeight));
            $sql="INSERT INTO s110034103 VALUES('$CarID','$CarName','$DoorNumber','$CarLength','$CarWidth','$CarHeight')";
            if(mysqli_query($conn, $sql)){
                echo "Inserted successfully !<br>";
                echo "--------------------------------<br>";
                echo "Car ID :$CarID<br>";
                echo "Car Name :$CarName<br>";
                echo "Door Number :$DoorNumber<br>";
                echo "Car Length :$CarLength<br>";
                echo "Car Width :$CarWidth<br>";
                echo "Car Height :$CarHeight";
            }else{
                echo"No data.<br>";
            }
        }
        if(isset($_POST['deletebutton'])){
            $delete_id=$_POST['delete_ID'];
            $sql = "DELETE FROM s110034103 WHERE CarID = $delete_id";
            if($conn->query($sql)===TRUE){
                echo "<br>" . "Delete CarID = $delete_id successfully !"."<br>";
            }else{
                echo"No data.<br>";
            }
        }
        if(isset($_POST['searchbutton']))
        {
            $id=$_POST['search'];
            $sql="SELECT * FROM s110034103 WHERE CarID = $id";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                echo "Search CarID = $id successfully !<br>";
                echo "--------------------------------<br>";
                while($row = $result->fetch_assoc()){
                    echo "Car ID : " . $row['CarID'] . "<br>";
                    echo "Car Name : " . $row['CarName'] . "<br>";
                    echo "Door Number : " . $row['DoorNumber'] . "<br>";
                    echo "Car Length : " . $row['CarLength'] . "<br>";
                    echo "Car Width : " . $row['CarWidth'] . "<br>";
                    echo "Car Height : " . $row['CarHeight'] . "<br>";
                }
            }else{
                echo"No data.<br>";
            }
        }
        if(isset($_POST['updatebutton'])){
            $update_ID=$_POST['update_ID'];
            $update_CarName=$_POST['update_CarName'];
            $sql="UPDATE s110034103 SET CarName='$update_CarName' WHERE CarID='update_ID'";
            if($conn->query($sql)===TRUE){
                echo "Update Car ID=$update_ID successfully !<br>";
                echo "------------------------------------------<br>";
                echo "Car Id :$update_ID<br>";
                echo "Change CarName : $update_CarName";
            }
            else{
                echo"No data.<br>";
            }
        }
        ?>
    </body>
</html>
