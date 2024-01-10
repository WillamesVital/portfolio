<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);

    $destino = "willamescfvital@gmail.com";
    $assunto = "Contato Porfólio";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

    $cabecalho = "From: willare45@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($destino,$assunto,$corpo,$cabecalho)){
        echo("Mensagem enviada com sucesso!");
        
    } else {
        echo("Houve um erro ao enviar a mensagem!");
    }

?>