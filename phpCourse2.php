<!DOCTYPE html>
<html>
    <head>
        <title>pHp Course2</title>
    </head>
    <body>
        
        //getting user input 1:05
        //form is a special html element that wil allow user to enter info
        // how php get info from the user
        
        <form action = "https://php-programming-laguage-full-course-annabelle.c9users.io/phpCourse2.php" method = "get">
           Name: <input type = "text" name = "name">
           <input type = "submit">
        </form>
        <br>
        
        <?php
         echo "Your name is " .$_GET["name"];
        ?> 
        <br>
        //working with numbers
        <form actipn = "https://php-programming-laguage-full-course-annabelle.c9users.io/phpCourse2.php" method = "get">
            Age: <input type = "text" name = "age">
            <input type = "submit">
        </form>
        <?php
         echo "your age is" .$_GET["age"];
        ?>
    </body>
</html>