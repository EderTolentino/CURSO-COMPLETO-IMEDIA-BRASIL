<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        
        $megasena = array();
        $contador = 1;
        
        while ($contador < 7) {
            $sorteio = rand(1, 6);
            if (!in_array($sorteio, $megasena)) {
                $megasena[] = $sorteio;
                $contador ++; 
            }
            
        }
        
        ?>
        
        <pre>
            <?php print_r($megasena) ?>
        </pre>
    </body>
</html>