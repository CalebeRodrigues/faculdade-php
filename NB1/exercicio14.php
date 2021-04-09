<?php

    $valor = 13459;
    $cont = 0;

    for ($i = 1; $i <= $valor; $i++) {
        if ($valor % $i == 0) {
            $cont++;
        }
    }

    echo $cont;

?>