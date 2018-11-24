<!DOCTYPE html>
<html>
    <head>
        <title>SimpleCalculator</title>
    </head>
    <body>
        
        <form action = "phpCourse10-SimpleCalculator.php" method = "post">
           Number: <input type="number" step = "0.01" name="number1"/> <br>
           Operator: <input type="text" name="operator"/> <br>
            Number:<input type="number" name="number2"/> <br>
            <input type="submit"/>
        </form>
        <?php
            
            $num1 = $_POST["number1"];
            $num2 = $_POST["number2"];
            $op = $_POST["operator"];
            
            if ($op == "+"){
                echo $num1 + $num2;
            }elseif($op == "-"){
               echo $num1 - $num2;
            }elseif($op == "*"){
                echo $num1 * $num2;
            }elseif($op == "/"){
                echo $num1 / $num2;
            }else{
                echo "The operator is Invalid";
            }
            
        
        ?>
    </body>
</html>
