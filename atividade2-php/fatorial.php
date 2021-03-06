<?php 

    echo "<br><center><h1>Fatorial</h1></center> <br> <hr>";

    $n = 3;

    echo "Valor de N = " . $n . "<br> <hr>";

    $cont = $n;

    for ($i = 1; $i < $n; $i++) {
        $cont *= ($n - $i);
    }

    echo "Resultado: " . $cont;

?>