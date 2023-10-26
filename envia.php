<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);
    $mensagem = addcslashes($_POST['mensagem']);

    $para = "danilosrsilvarr@gmail.com";
    $assunto = "Dúvidas - Danilo Souza";

    $corpo =  "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;
 
    $cabeca = "From: ".$nome."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo "<script type='text/javascript'>window.location.reload(true);</script>";
    }else{
        echo("Houve um erro ao enviar o e-mail!");
    }
?>