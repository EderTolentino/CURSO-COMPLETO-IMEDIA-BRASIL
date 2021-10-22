<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php
            $a = 5;
            $b = 8;
        
            // Sem as {} só faz a condição logo a seguir
            if ($a > $b)
                echo "A é maior do que B" . "</br>";
                echo "Vá para a página clientes!" . "</br>";
        
            $fumante = true;
            if ($fumante == true) {
                echo "Não poderá entrar";
            }
        
            if ($fumante) {
                echo "Não poderá entrar";
            }
            
            if (!$fumante) {
                echo "Não poderá entrar";
            }
        ?>
        
    </body>
</html>