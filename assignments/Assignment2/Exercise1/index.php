<?php
    function nestloop(){
        for ($numberOne = 1; $numberOne < 5; $numberOne++){
            echo  "&#8226;&nbsp;&nbsp;&nbsp;" .$numberOne . "<br>";
            for ($numberTwo = 1; $numberTwo < 6; $numberTwo++){

                for ($i =1; $i < 9; $i++){
                    echo "&nbsp;";
                }
            echo "&#9702;&nbsp&nbsp;".$numberTwo."<br>";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercise 1</title>
</head>
<body>
    <?php
        echo nestloop();
    ?>
</body>
</html>