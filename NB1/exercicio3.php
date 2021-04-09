<?php
    $idade = "11";

    $idade = (int) $idade;

    var_dump($idade);

    echo "<br>";

    $idade2 = "11";
    $altura = 1.79;

    $idade2 = +$idade2;
    $altura = "" . $altura;

    var_dump($idade2);

    echo "<br>";

    var_dump($altura);

?>