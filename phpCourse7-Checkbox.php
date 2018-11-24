<!DOCTYPE html>
<html>
    <head>
        <title>phpCourse7-Chechbox.php</title>
    </head>
    <body>
        
        //1:50:28
        <form action = "phpCourse7-Checkbox.php" method = "post" >
            Apples: <input type = "checkbox" name = "fruits[]" value = "apples"><br>
            oranges: <input type = "checkbox" name = "fruits[]" value = "oranges"><br>
            Pears: <input type = "checkbox" name = "fruits[]" value = "pears"><br>
            <input type = "submit">
        </form>

        <?php
            $fruits = $_POST["fruits"];
            echo $fruits[0];
        ?>
    </body>
</html>