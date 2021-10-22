<?php require_once("../../conexao/conexao.php"); ?>
<?php require_once("_incluir/funcoes.php"); ?>

<?php    
    // Conferir se a navegação veio pelo preenchimento do formulário:
    if ( isset($_POST['nomeproduto']) ) {
        $resultado1 = publicarImagem($_FILES['foto_grande']);
        $resultado2 = publicarImagem($_FILES['foto_pequena']);
        
        $mensagem1 = $resultado1[0];
        $mensagem2 = $resultado2[0];
        
        $nomeproduto    = utf8_decode($_POST['nomeproduto']);
        $codigobarra    = utf8_decode($_POST['codigobarra']);
        $tempoentrega   = $_POST['tempoentrega'];
        $categoriaID    = $_POST['categoriaID'];
        $fornecedorID   = $_POST['fornecedorID'];
        $precounitario  = $_POST['precounitario'];
        $precorevenda   = $_POST['precorevenda'];
        $estoque        = $_POST['estoque'];
        $imagem_grande  = $resultado1[1];
        $imagem_pequena = $resultado2[1];
                    
        // Inserção no banco
        $inserir = " INSERT INTO produtos ";
        $inserir .= " (nomeproduto, codigobarra, tempoentrega, categoriaID, fornecedorID, precounitario, estoque, foto_grande, foto_pequena) ";
        $inserir .= " VALUES ";
        $inserir .= "('$nomeproduto', '$codigobarra', $tempoentrega, $categoriaID, $fornecedorID, $precounitario, $precorevenda, $estoque, '$imagem_grande', '$imagem_pequena')";
        $qInserir = mysqli_query($conecta, $inserir);
        if(!$qInserir) {
            die("Erro na inserção");
        } else {
            $mensagem = "Inserção ocorreu com sucesso.";
        }
        
        
    }

    // Consulta ao banco de dados
    $categorias = "SELECT categoriaID, nomecategoria ";
    $categorias .= "FROM categorias ";
    $qCategorias = mysqli_query($conecta, $categorias);
    if(!$qCategorias) {
        die("Falha na consulta ao banco");   
    }

    // Consulta ao banco de dados
    $fornecedores = "SELECT fornecedorID, nomefornecedor ";
    $fornecedores .= "FROM fornecedores ";
    $qFornecedores = mysqli_query($conecta, $fornecedores);
    if(!$qFornecedores) {
        die("Falha na consulta ao banco");   
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP INTEGRACAO</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/alteracao.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("_incluir/topo.php"); ?>
        
        <main>
            <div id="janela_formulario">
                <form action="incluir.php" method="post" enctype="multipart/form-data">
                    <h2>Incluir Novo Produto</h2>
                
                    <!-- Campo de nome do produto e código de barra -->
                    <input type="text" name="nomeproduto" placeholder="Nome do Produto">
                    <input type="text" name="codigobarra" placeholder="Código de Barra">
                    
                    <!-- Campo de tempo de entrega -->
                    <label>Tempo de Entrega</label>
                    <input type="radio" name="tempoentrega" value="5">5 dias
                    <input type="radio" name="tempoentrega" value="8">8 dias
                    <input type="radio" name="tempoentrega" value="15">15 dias
                    <input type="radio" name="tempoentrega" value="30">30 dias
                    
                    <!-- Campo de categorias -->
                    <label>Seleciona a categoria do produto</label>
                    <select name="categoriaID">
                        <?php
                            while($linha = mysqli_fetch_assoc($qCategorias)) {
                        ?>
                            <option value="<?php echo $linha['categoriaID']; ?>">
                                <?php echo utf8_encode($linha['nomecategoria']); ?>
                            </option>
                        <?php
                            }
                        ?>
                    </select>
                    
                    <!-- Campo de fornecedor -->
                    <label>Selecione o fornecedor do produto</label>
                    <select name="fornecedorID">
                        <?php
                            while($linha = mysqli_fetch_assoc($qFornecedores)) {           
                        ?>
                            <option value="<?php echo $linha['fornecedorID']; ?>">
                                <?php echo utf8_encode($linha['nomefornecedor']); ?>
                            </option>
                        <?php
                            }
                        ?>   
                    </select>
                    
                    <!-- Campo de preços -->
                    <input type="text" name="precorevenda" placeholder="Preço Revenda">
                    <input type="text" name="precounitario" placeholder="Preço Unitário">
                    
                    <!-- Campo de estoque -->
                    <input type="hidden" name="MAX_FILE_SIZE" value="614400">
                    
                    <!-- Campo de foto grande -->
                    <label>Foto Grande</label>
                    <input type="file" name="foto_grande">
                    <span class="resposta">
                        <?php
                            if( isset($mensagem1) ) {
                                echo $mensagem1;
                            }
                        ?>
                    </span>
                    
                    <!-- Campo de foto pequena -->
                    <label>Foto Pequena</label>
                    <input type="file" name="foto_pequena">
                    <span class="resposta">
                        <?php
                            if( isset($mensagem2) ) {
                                echo $mensagem2;
                            }
                        ?>
                    </span>
                    
                    <!--Campo escondido para iniciar estoque -->
                    <input type="hidden" name="estoque" value="0">
                    
                    <!-- Botão submit -->
                    <input type="submit" value="Inserir novo produto">
                    
                    <?php
                        if( isset($mensagem) ) {
                            echo "<p>" . $mensagem . "</p>";
                        }
                    ?>
                </form>
                
            
           </div>
        </main>

        <?php include_once("_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar as queries
    mysqli_free_result($qCategorias);
    mysqli_free_result($qFornecedores);
?>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>