<?php
    
    $fumante = true;
    
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
          
            echo "É fumante: " . $fumante . "</br>";
        
            echo "É booleano: " . is_bool($fumante);
        
        ?>   
        
        
    </body>
</html>