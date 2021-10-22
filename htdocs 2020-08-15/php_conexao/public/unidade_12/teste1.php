<?php

    // Sorteio de caracter:
    $alfabeto   = "23456789ABCDEFGHIJKLMNOPQRS";
    $tamanho    = 30;
    $letra      = "";
    $resultado  = "";

    for ($i = 1; $i < $tamanho; $i++) {
        $letra = substr($alfabeto, rand(0,23), 1);
        $resultado .= $letra;
    }

    echo $resultado . "<BR>";
    

    date_default_timezone_set('America/Recife');
    $agora = getdate();

    $codigo_data = $agora['year'] . "_" . $agora['yday'];
    $codigo_data .= $agora['hours'] . $agora['minutes'] . $agora['seconds'];

    echo "foto_" . $codigo_data . "_" . $resultado;

?>

<?php
    
    // Essa função de string pega a partir do segundo parâmetro
    $arquivo = "foto.jpg";
    echo strrchr($arquivo, ".");

?>



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