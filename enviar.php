<?php
  //1 – Definimos Para quem vai ser enviado o email
  $para = "olaconecta@gmail.com";
  //2 - resgatar o nome digitado no formulário e  grava na variavel $nome
  $nome = $_POST['nome'];
  $empresa = $_POST['empresa'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  // 3 - resgatar o assunto digitado no formulário e  grava na variavel //$assunto
  $assunto = "Email enviado pelo site";
  $comentario = $_POST['mensagem'];
   //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem = "<strong>Nome:  </strong>".$nome;
  $mensagem .= "<br> <strong>Empresa:  </strong> ".$_POST['empresa'];
  $mensagem .= "<br>  <strong>Email: </strong>".$_POST['email'];
  $mensagem .= "<br>  <strong>Telefone: </strong>".$_POST['telefone'];
  $mensagem .= "<br>  <strong>Mensagem: </strong>".$_POST['comentario'];
 
//5 – agora inserimos as codificações corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From: Olá Conecta<olaconecta@gmail.com>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  <Olaconecta@gmail.com>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <olaconecta@gmail.com>\n"; //caso a msg //seja respondida vai para  este email.
  $headers .= "MIME-Version: 1.0\n";
  // redireciona para a página de obrigado
    header("location:resposta.html");
 
mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
  ?>