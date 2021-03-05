<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>

    <center><h1>Tabuada</h1></center>

    <?php 
    
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 10; $j++){
                $cont = $i * $j;
                echo $i . " * " . $j . " = " . $cont . "<br>";
            }
            echo "<br><hr>";
        }

    ?>
    
</body>
</html>