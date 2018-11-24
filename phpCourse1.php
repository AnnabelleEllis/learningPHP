<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP1</title>
    </head>
    <body>
        
        <?php
            echo ("Hello World");
            // echo allows us to print out html code
            echo "<hr>";
            echo "<h1> Mike's  Site </h1>";
            
            // Variables in PHP
            //containers to store information
            echo "There was a man named George <br>";
            echo "He was 70 years old <br>";
            echo "He rally liked the name George <br>";
            echo "But didn't like being 70 years old <br> \n";
            
            $age = 70;
            $name = "George";
            
            echo "\n There was a man named $name <br>";
            echo "He was $age years old <br>";
            echo "He rally liked the name $name <br>";
            echo "But didn't like being $age years old <br>";
            
            
            //Data Types
            $phrase = "to be or not to be";
            $age = 56;
            $change = 102.34;
            $isMale = true;
            // null - no value.
            
            //Woring with Strings.
            //Strings are just plain text
            $phrase = "Giraffe Academy";
            echo strtolower($phrase);
            echo strlen($phrase);
            echo $phrase[0];
            echo $phrase[2];
            echo str_replace("Giraffe", "Panada", $phrase);
            echo substr($phrase, 8 , 3);
            
            //Working with Numbers
            echo 10 % 3;
            $num = 10;
            echo $num++;
            echo $num +=25;
            echo max(34, 85);
            echo min(3,4);
            echo sqrt(49);
            echo round(95.46);
            echo ceil(954.53);
            echo floor(853.53);
            
        ?>
    </body>
</html>