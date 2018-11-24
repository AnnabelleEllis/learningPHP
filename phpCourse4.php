<!DOCTYPE html>
<html>
    <head>
        <title>phpCourse4.php</title>
    </head>
    <body>
        //url parameters
        //get vs post
        <form action = "phpCourse4.php" method = "get"> <br>
            <input type = "password" name = "password">
            <input type = "submit">
        </form>
        
        <!--<form action = "phpCourse4.php" method = "post"> <br>-->
        <!--     <input type = "password" name = "spassword">-->
        <!--    <input type = "submit">-->
        <!--</form>-->
        
        <?php
            $password = $_GET["password"];
            echo $password;
            echo "My Password is:".$_GET["password"];
            
            // $spassword = $_POST["spassword"];
            // echo $password;
            // echo "My Password is:".$_POST["password"];
        ?>
    </body>
</html>