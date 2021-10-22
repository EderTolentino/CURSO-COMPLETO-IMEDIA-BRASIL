<?php
    $agenda = array(    "nome" => "José",
                        "sobrenome" => "Silva",
                        "salario" => 800.99
    
    );
    
?>


<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo $agenda["nome"] . "</br>";
            echo $agenda["sobrenome"] . "</br>";
            echo $agenda["salario"] . "</br>";
        
            
        ?>
        
        <pre>
            <?php 
                print_r($agenda);
            ?>
        
        </pre>
        
        
        
        
    </body>
</html>