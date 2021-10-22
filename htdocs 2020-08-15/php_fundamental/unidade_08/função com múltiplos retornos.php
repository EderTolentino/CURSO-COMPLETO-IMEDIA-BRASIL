<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        
        function retornarDiaria($salario, $dias, $cotacao) {
            
            $real = number_format($salario/$dias, 2);
            $dolar = number_format(($salario/$dias)/$cotacao,2);
            return array($real,$dolar);
        }
        
        list($diaria_real, $diaria_dolar) = retornarDiaria(3000, 10, 2.5);
        echo "Diária em R$ " . $diaria_real . "</br>";
        echo "Diária em R$ " . $diaria_dolar . "</br>";
        
        ?>
    </body>
</html>