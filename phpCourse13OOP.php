<! Custom Data Type ---->
<!DOCTYPE html>
<html>
 <head>
     <title></title>
</head>   

    <body>
        <?php 
            // class Book{
            //     // Class
            //     var $title;
            //     var $author;
            //     var $pages;
                
            //     function __construct($name){
            //         echo "New Book Created <br>";
            //         echo $name;
            //     }//close constructor
            // }//close Class
            // //Oject
            // $book1 = new Book("Annabelle CE");
            // $book1->title = "Gracefully Anna";
            // $book1->author = "Annabelle";
            // $book1->pages = 1000;
            
            // echo  $book1->author;
            
             class Book{
                // Class
                var $title;
                var $author;
                var $pages;
                
                function __construct($aTitle, $aAuthor, $aPages){
                   $this->title = $aTitle;
                   $this->author = $aAuthor;
                   $this->pages = $aPages;
                }//close constructor
            }//close Class
            //Oject
            $book1 = new Book("Gracefully Anna","Annabelle",1000);
            echo  $book1->author;
        ?>
    </body>
</html>