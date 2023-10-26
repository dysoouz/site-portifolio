<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $para = "danilosrsilvarr@gmail.com";
    $assunto = "Dúvidas - Danilo Souza";

    $corpo =  "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $cabecalho = "From: ".$nome."<".$email.">"."\r\n".
                 "Reply-To: ".$email."\r\n".
                 "X-Mailer: PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabecalho)){
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Houve um erro ao enviar o e-mail!";
    }
}
?>
