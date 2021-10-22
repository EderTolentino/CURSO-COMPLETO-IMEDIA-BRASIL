<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        
        function retornarDiaria($salario, $dias) {
            
            return number_format($salario/$dias, 2);
        }
        
        echo retornarDiaria(5000, 30);
        
        ?>
    </body>
</html>