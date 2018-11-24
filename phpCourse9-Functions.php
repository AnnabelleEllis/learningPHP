<?php
    function greeting(){
        echo "hi";
    }
    
    function getMax($num1, $num2){
        if ($num1 > $num2){
            return $num1;
        }else{
            return $num2;
        }
    }
    
    function getMax1($num1, $num2, $num3){
        $val = getMax($num1,$num2);
        return getMax1($val, $num3);
    }
    
    greeting();
    getMax1(300, 4, 4.0);
?>