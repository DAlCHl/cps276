<?php

function table(){

    $rowcounter = 15; // how many you want going down

    $cellcounter = 5; // how many you want going right

	for ($row=1; $row < $rowcounter+1; $row++) { 
		echo "<tr> \n";
		for ($cell=1; $cell < $cellcounter+1; $cell++) {  
		    echo "<td>row ".$row." cell " .$cell." </td> \n"; // Writing the row and cell ex  "row 1 cell 1"
	    }
	  	echo "</tr>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercise 3</title>
</head>
<body>

    <?php
        echo "<table border =1 >";  // setting table border
        echo table();               // getting the function
    ?>
</body>
</html>