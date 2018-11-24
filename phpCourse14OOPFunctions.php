<!DOCTYPE html>
<html>
    <head>
        <title>OOPFunctions</title>
    </head>
    
    <body>
        
        <?php
        
            class Student{
                public $name;
                public $major;
                private $gpa;
            
                function __construct($name,$major,$gpa){
                    $this->$name = $name;
                    $this->$major = $major;
                    $this->setGPA($gpa);
                }
                
                function getGPA(){
                    return $this->gpa;
                }
                
                function setGPA(){
                    if($gpa = range (2.0,4.3)){
                        $this->gpa = $gpa;
                    }else{
                       $this->gpa = "Not a valid Rating" ;
                    }
                    
                }
            
                function hasHonors(){
                    if ($this->gpa >= 3.5){
                        return "true";
                    }
                    return "false";
                }
                
            }    
                $student1 = new Student("Annabelle","Computer Science", "3.7");
                echo $student1-> hasHonors();
            
        ?>
    </body>
</html>