<?php
    global $output;
    if(count($_POST) > 0){
        require_once 'NameArray.php';
        $addName = new Nameproc();
        $output = $addName->ACname();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Assignment 4</title>
</head>
<body>
    <main class="container">
        <h1>Add Names</h1>
        <form action="index.php" method="post">

            <div class="form-group"">
                <input type="submit" class="btn btn-primary" name="ANB" id="ANB" value="Add Name"/>    <!-- ANB = ADD NAME BUTTON -->
                <input type="submit" class="btn btn-primary" name="CNB" id="CNB" value="Clear Names"/> <!-- CNB = CANCEL NAME BUTTON -->
            </div>
            
            <div class="form-group">
                <label for="addName" >Enter Name</label>
                <input type="text" class="form-control" id="addName" name="addName">
            </div>

            <div class="form-group">
                <label for="listOfNames">List of Names</label>
                <textarea class="form-control" id="listOfNames" name="listOfNames" rows="22" > <?php echo $output?> </textarea>
            </div>

        </form>
    </main>
</body>
</html>