<form action="index.php" method="POST">
    
    Numero1: <input type="text" name="num1">
    
    <br><br>
    
    Numero2: <input type="text" name="num2">

    <br><br>

    <input type="submit" value="Enviar">

</form>


<?php
    if($_POST['num1'] != "" && $_POST['num2'] != "")
    {    
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

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