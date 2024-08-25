<!DOCTYPE html>
<html>
    <body>
        <h1>My First PHP page.</h1>
        <?php
        echo "Hello world !<br>";
        ?>

        <?php
        //php variables
        $x=10;
        $y=2.5;
        $text="Hello world !";

        echo $x;
        echo $y;
        echo $text;
        ?>

        <?php
        //condition if & else same as C language
        if(1.5){
            echo "1.5 is a true value.";
        }

        echo "<br>";
        echo "<br>";

        if(0){
            // echo "0 is a True.";    //must not excute
        }
        else{
            echo "0 is a True."; 
        }
        ?>

        <?php
        //ARRAY : struct an array and echo
        $items = array("mouse","keyboard","monitor");
        echo count($items)."<br>";
        echo $items[0]."<br>";
        echo $items[1]."<br>";
        echo $items[2]."<br>";

        echo "I have ".$items[0].",".$items[1]." and ".$items[2].".";
        ?>

        <?php
        //Associative array : use named keys that assigned
        $age=array("Andy"=>"20","Back"=>"30","Cathy"=>"40");
        echo "Andy is $age[Andy] years old.";
        echo "<br>";
        ?>

        <?php
        //Multidimensional array
        $cars=array
        (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15),
        );

        echo $cars[0][0].": In Stock : ".$cars[0][1].", sold : ".$cars[0][2].".<br>";
        echo $cars[1][0].": In Stock : ".$cars[1][1].", sold : ".$cars[1][2].".<br>";
        echo $cars[2][0].": In Stock : ".$cars[2][1].", sold : ".$cars[2][2].".<br>";
        echo $cars[3][0].": In Stock : ".$cars[3][1].", sold : ".$cars[3][2].".<br>";
        ?>

        <?php
        // Loop
        #while
        $x=1;

        while($x<=5){
            echo "The number is : $x <br>";
            $x++;
        }

        #do-while 
        $xx=1;

        do{
            echo "The number is : $xx <br>";
            $xx++;
        }while($xx<=5);

        #for
        for($x=0;$X<5;$x++){
            echo "The number is : $xx <br>";
        }

        #foreach
        $people=array("Peter"=>"35","Ben"=>"45","Joe"=>"55");
        foreach($people as $name=>$age){
            echo "$name is $age years old.<br>";
        }
        ?>

        <?php
        //Break & Continue
        #Break (jumps out of the loop when x is equals to 4)
        for($x=0;$x<10;$x++){
            if($x==4){
                break;
            }
            echo "The number is $x <br>";
        }

        echo "---------------------------------------------------<br>";

        #Continue(The  continue statement breaks one iteration(in the loop),
        #if a specified condition occured)
        for($x=0;$x<10;$x++){
            if($x==4){
                continue;
            }
            echo "The number is $x <br>";
        }
        ?>

        <?php
        //Functions
        function sayhi(){
            echo "Hi";
        }
        
        function Cal($x,$y){
            echo "$x+$y";
        }
        sayhi();
        echo "---------------------------------------------------<br>";
        Cal(3,4);
        ?>
    </body>
</html>