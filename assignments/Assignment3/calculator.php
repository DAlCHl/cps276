<?php
class Calculator {
    public function calc($operator=null,$num1=null,$num2=null){
        //if all there
        if (!(is_string($operator) && is_int($num1) && is_int($num2))){    //making sure everthing in the right order and is all there
            return "You must enter a string and two numbers <br>\n";
        }
        // zero
        if ($operator=='/' && $num2 == '0'){     //the return if the num1 is divided by 0
            return "Cannot divide  by zero <br>\n"; 
        }
        // start of the calculating
        if ($operator == '*'){   // the operator sorter finding the right (+. -. *. /) and returning them
            return"The sum of the numbers is " .($num1 * $num2) ."<br>\n";
        }
        else if ($operator == '/'){
            return"The difference of the numbers is " .($num1 / $num2) ."<br>\n"; 
        }
        else if ($operator == '+'){
            return"The product of the numbers is " .($num1 + $num2) ."<br>\n"; 
        }
         else if ($operator == '-'){
            return"The division of the numbers is " .($num1 - $num2) ."<br>\n"; 
        }
        else {
            return "'" .$operator ."' Is not a valid operator try:(+. -. *. /)<br>\n";
        }
    }
}
?>