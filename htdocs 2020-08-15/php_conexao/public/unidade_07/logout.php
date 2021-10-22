<?php require_once("../../conexao/conexao.php"); ?>

<?php
    // INICIAR A SESSÃO
    session_start();

    // CRIAR UMA VARIÁVEL DE SESSÃO
    $_SESSION["usuario"] = "Matheus";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- ESTILO -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <div id="header_central">
                <img src="assets/logo_andes.gif">
                <img src="assets/text_bnwcoffee.gif">
            </div>
        </header>
        
        <main>  
            <?php
                // EXCLUI A VARIÁVEL DE SESSÃO MENCIONADA.
                unset($_SESSION["usuario"]);
            
                // DESTRÓI TODAS AS VARIÁVEIS DE SESSÃO DA APP.
                session_destroy();
            ?>
        </main>

        <footer>
            <div id="footer_central">
                <p>ANDES &eacute; uma empresa fict&iacute;cia, usada para o curso PHP Integra&ccedil;&atilde;o com MySQL.</p>
            </div>
        </footer>
    </body>
</html>

<?php
    // FECHAR CONEXÃO
    mysqli_close($conecta);
?>