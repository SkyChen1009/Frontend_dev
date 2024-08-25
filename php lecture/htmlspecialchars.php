<html>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            Please type in data1 :<input type="text" name="data1">
            <br>
            Please type in data2 :<input type="text" name="data2">
            <input type="submit">
        </form>

        <h1>Data 1&2 are as follows :</h1>

        <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $data1=$_POST['data1'];
            $data2=$_POST['data2'];
            echo "Data 1 :$data1<br>";
            echo "Data 2 :$data2";
        }
        ?>
    </body>
</html>