<!DOCTYPE html>
<html>
    <head>
        <title>phpCourse8-AssociativeArray</title>
    </head>
    <body>
        
        <!--//1:50:28-->
        <form action = "phpCourse8-AssociativeArray.php" method = "post" >
            <input type = "text" name = "student"><br>
            <input type = "submit">
        </form>

        <?php
            $grades = array("Kevin" => "A+", "Dana" => "B-", "Oscar" => "C+","Jim" => "A-"); 
            echo $gardes["Jim"];
            echo count($grades);
            echo ($grades[$_POST["student"]])
        ?>
    </body>
</html>