<?php 

    echo "Potência <br> <br>";

    $x = 2;
    $y = 10;

    $cont = 1;

    echo "X = " . $x . " |  Y = " . $y . "<br> <hr>";

    for ($i = 1; $i <= $y; $i++) {
        $cont *= $x; 
    }

    echo "Resultado: " . $cont;

?>
