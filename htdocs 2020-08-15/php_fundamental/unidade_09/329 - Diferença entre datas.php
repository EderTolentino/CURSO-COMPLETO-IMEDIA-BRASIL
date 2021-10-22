<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        
        $data1 = new DateTime('2017-11-30');
        $data2 = new DateTime('2015-12-31');
        $intervalo = $data1 ->diff($data2);
    
        
        ?>
        
        <pre>
            <?php print_r($intervalo)?>
        </pre>
        
        <pre>
            <?php print_r($intervalo -> format('%R%a'))?>
        </pre>
    </body>
</html>