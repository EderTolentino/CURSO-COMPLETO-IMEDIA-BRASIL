<?php
    
    
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            $salada = array("Maçã", "Abacate", "Laranja");
            
            echo "Existe elemento? " . in_array("Pêra", $salada) . "</br>";
            echo "Existe elemento? " . in_array("Laranja", $salada) . "</br>";
           
            echo "Posição do elemento " . array_search("Laranja", $salada) . "</br>";
            echo "Posição do elemento " . array_search("Uva", $salada) . "</br>";
        ?>
        
        
        
        
        
    </body>
</html>