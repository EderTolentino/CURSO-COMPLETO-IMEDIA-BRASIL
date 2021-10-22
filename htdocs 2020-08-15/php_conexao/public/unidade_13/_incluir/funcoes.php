<?php
    
    function enviarMensagem($dados) {
        $nome_usuario       = $dados['nome'];
        $email_usuario      = $dados['email'];
        $mensagem_usuario   = $dados['mensagem'];
        
        $destino            = "suporte@imediabrasil.com.br";
        $remetente          = "imediabrasil@imediabrasil.com.br";
        $assunto            = "Mensagem do site";
        
        $mensagem           = "O usuario " . $nome_usuario . " enviou uma mensagem." . "</br>";
        $mensagem           .= "email do usuario: " . $email_usuario . "</br>";
        $mensagem           .= "mensagem:" . "</br>";
        $mensagem           .= $mensagem_usuario;
        
        return mail($destino, $assunto, $mensagem, $remetente);
    }


?>