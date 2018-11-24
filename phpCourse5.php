<!DOCTYPE html>
<html>
    <head>
        <title>phpCourse4.php</title>
    </head>
    <body>
        //url parameters
        //get vs post
        <form action = "phpCourse4.php" method = "post"> <br>
            <input type = "password" name = "spassword">
            <input type = "submit">
        </form>
        
        
        
        <?php
            $spassword = $_POST["spassword"];
            echo $password;
            echo "My Password is:".$_POST["spassword"];
        ?>
    </body>
</html>