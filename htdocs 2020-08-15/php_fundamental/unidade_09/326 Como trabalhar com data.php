<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        
        date_default_timezone_set('Etc/GMT+8');
        $agora = getdate();
        print_r($agora);
        
        ?>
    </body>
</html>