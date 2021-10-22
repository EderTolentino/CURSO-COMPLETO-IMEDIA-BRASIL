<?php   require_once("../../conexao/conexao.php"); ?>

<?php

// Passo 1 - iniciar a conexão

$servidor   = "localhost";
$usuario    = "root";
$senha      = "";
$banco      = "andes";
    
$conecta = mysqli_connect($servidor, $usuario, $senha, $banco);

// Passo 2 - Testar a conexão

if (mysqli_connect_errno() ) {
    die("Conexão falhou: " . mysqli_connect_errno());
}
    
?>

<?php
    // Passo 3 - Abrir consulta ao banco de dados - AULA 369
    $consulta_categorias  = " SELECT *";
    $consulta_categorias .= " FROM categorias";
    $consulta_categorias .= " WHERE categoriaID >= 1";
    $categorias = mysqli_query($conecta, $consulta_categorias);

    if ( !$categorias ) {
        die("Falha na consulta ao banco!");
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
                
        <!-- Passo 4 - Listagem dos dados -->
        <ul>
        <?php
            while( $registro = mysqli_fetch_assoc($categorias)) {
        ?>                   
             <li><?php echo $registro["nomecategoria"] ?></li>
            
        <?php
            }
        ?>
        </ul>
        
        
        <!-- Passo 5 - Liberar os dados da memória -->        
        <?php
            mysqli_free_result($categorias);
        ?>

        
    </body>
</html>

<!-- Passo 6 - Fechar a conexão -->
<?php
    mysqli_close($conecta);
?>