<?php
    $salario = 800;
    $gasolina = 2.79;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "O $salario é um número?" . is_numeric($salario) . "</br>";
            echo "O $gasolina é um número?" . is_numeric($gasolina) . "</br>" . "</br>";

            // testar se é inteiro
            echo "O $salario é um número?" . is_int($salario) . "</br>";
            echo "O $gasolina é um número?" . is_int($gasolina) . "</br>" . "</br>";

            // testar se é float
            echo "O $salario é um número?" . is_float($salario) . "</br>";
            echo "O $gasolina é um número?" . is_float($gasolina) . "</br>" . "</br>";
        
        
            echo round(2.79) . "</br>";
            echo floor(2.79) . "</br>";
            echo ceil(2.79) . "</br>";
        ?>
        
        
    </body>
</html>