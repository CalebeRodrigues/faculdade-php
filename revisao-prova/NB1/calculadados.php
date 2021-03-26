<?php 

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $salarioBase = $_POST['salario'];

    echo "Nome: " . $nome . "<br> " .
            "Email: " . $email .  "<br> " .
            "Celular: " . $celular . "<br> " .  
            "Salario: " . $salarioBase . "<br> " .
            "Reajuste: " . reajuste($salarioBase);

    function reajuste ($salarioBase) {
        if ($salarioBase < 1501) {
            return "" . number_format($salarioBase + ($salarioBase * (5.49/100)), 2);
        }
        if ($salarioBase < 2101) {
            return "" . number_format($salarioBase + ($salarioBase * (4.93/100)), 2);
        }
        if ($salarioBase < 3150) {
            return "" . number_format($salarioBase + ($salarioBase * (3.75/100)), 2);
        }
        if ($salarioBase < 4200) {
           return "" . number_format($salarioBase + ($salarioBase * (2/100)), 2);
        }

        return "" . number_format($salarioBase + ($salarioBase * (1.5/100)), 2);
    }
?>