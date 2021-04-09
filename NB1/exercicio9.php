<?php

    $valor = 13459;
    $cont = 0;

    $i = 1;

    do {
      if ($valor % $i == 0) {
            $cont++;
        }
        $i++;
    }
    while($i <= $valor); 

    echo $cont;

?>