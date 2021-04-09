<form action="index.php" method="GET">
    
    Numero1: <input type="text" name="num1">
    
    <br><br>
    
    Numero2: <input type="text" name="num2">

    <br><br>

    <input type="submit" value="Enviar">

</form>


<?php
    if($_GET['num1'] != "" && $_GET['num2'] != "")
    {    
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        $adicao = $num1 + $num2;
        $subtracao = $num1 - $num2;
        $multiplicacao = $num1 * $num2;
        $divisao = $num1 / $num2;

        echo "<br> Adição: " . $adicao;
        echo "<br> Subtração: " . $subtracao;
        echo "<br> Multiplicação: " . $multiplicacao;
        echo "<br> Divisão: " . $divisao;
    }
?>