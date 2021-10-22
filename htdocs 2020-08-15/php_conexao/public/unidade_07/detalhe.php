<?php require_once("../../conexao/conexao.php"); ?>
<?php

    // INÍCIO TESTE DE SEGURANÇA
    session_start();
    if ( !isset($_SESSION["user_portal"]) ) {
        header("Location: login.php");
    }
    // FIM DO TESTE DE SEGURANÇA

    if ( isset($_GET["codigo"]) ) {
        $produto_id = $_GET["codigo"];
    } else {
        header("Location: login.php");
    }

    // CONSULTA AO BANCO DE DADOS
    $consulta = "SELECT * ";
    $consulta .= "FROM produtos ";
    $consulta .= "WHERE produtoID = {$produto_id} ";
    $detalhe    = mysqli_query($conecta,$consulta);

    // TESTER ERRO
    if ( !$detalhe ) {
        die("Falha no Banco de dados");
    } else {
        $dados_detalhe = mysqli_fetch_assoc($detalhe);
        $produtoID      = $dados_detalhe["produtoID"];
        $nomeproduto    = $dados_detalhe["nomeproduto"];
        $descricao      = $dados_detalhe["descricao"];
        $codigobarra    = $dados_detalhe["codigobarra"];
        $tempoentrega   = $dados_detalhe["tempoentrega"];
        $precorevenda   = $dados_detalhe["precorevenda"];
        $precounitario  = $dados_detalhe["precounitario"];
        $estoque        = $dados_detalhe["estoque"];
        $imagemgrande   = $dados_detalhe["imagemgrande"];
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- ESTILO -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/produto_detalhe.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("_incluir/topo.php"); ?>
        
        <main>  
            <div id="detalhe_produto">
                <ul>
                    <li class="imagem"><img src="<?php echo $imagemgrande ?>"></li>
                    <li><h2><?php echo $nomeproduto ?></h2></li>
                    <li><b>Descri&ccedil;&atilde;o: </b><?php echo $descricao ?></li>
                    <li><b>C&oacute;digo de Barra: </b><?php echo $codigobarra ?></li>
                    <li><b>Tempo de Entrega: </b><?php echo $tempoentrega ?></li>
                    <li><b>Pre&ccedil;o Revenda: </b><?php echo "R$ " . number_format($precorevenda,2,",",".") ?></li>
                    <li><b>Pre&ccedil;o Unit&aacute;rio: </b><?php echo "R$ " . number_format($precounitario,2,",",".") ?></li>
                    <li><b>Estoque: </b><?php echo $estoque ?></li>
                </ul>
               
            </div>
        </main>

        <?php include_once("_incluir/rodape.php"); ?>
    </body>
</html>

<?php
    // FECHAR CONEXÃO
    mysqli_close($conecta);
?>