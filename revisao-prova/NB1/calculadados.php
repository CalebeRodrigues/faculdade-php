<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadados</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        
        <center><h2>Resultados</h2></center>

        <?php 
            
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $celular = $_POST['celular'];
            $salarioBase = $_POST['salario'];

            if ($nome == "" || $email == "" || $celular == "" || $salarioBase == "") {
                echo "<h2 style='color:red'>Por favor, preencha todos os componentes!</h2>";
            }
            else {
                echo    "Nome: " . $nome . "<br> " .
                        "Email: " . $email .  "<br> " .
                        "Celular: " . $celular . "<br> " .  
                        "Salario: " . $salarioBase . "<br> " .
                        "Reajuste: " . reajuste($salarioBase);
            }

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

    </div>

</body>
</html>
