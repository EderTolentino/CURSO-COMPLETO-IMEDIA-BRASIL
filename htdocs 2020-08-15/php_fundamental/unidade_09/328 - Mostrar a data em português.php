<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        
        date_default_timezone_set('America/Buenos_Aires');
        setlocale(LC_TIME, "pt-BR");
        
        
        $ano = strftime('%Y');
        $mes = strftime('%B');
        $dia = strftime('%d');
        
        $hora = strftime('%H');
        $minuto = strftime('%M');
        $segundo = strftime('%S');
        
        echo $dia . " de " . $mes . " de " . $ano . "</br>";
        echo $hora . ":" . $minuto . ":" . $segundo;
        
        ?>
    </body>
</html>