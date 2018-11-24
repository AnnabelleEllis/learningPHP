<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action = "phpCourse3.php" method = "get"> <br>
           Colour: <input type = "text" name = "colour"> <br>
            Plural Noun: <input type = "text" name = "pluralNoun"> <br>
            Celebrity: <input type = "text" name = "celebrity"> <br>
            <input type = "submit">
        </form>
        
        <?php
            $colour = $_GET["colour"];
            $pluralNoun = $_GET["pluralNoun"];
            $celebrity = $_GET["celebrity"];
            
            echo "Roses are $colour <br>";
            echo "$pluralNoun are blue <br>";
            echo "I love $celebrity <br>";
        ?>
    </body>
</html>