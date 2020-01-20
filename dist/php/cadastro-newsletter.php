<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$emailnews    = trim($_POST['emailnews']);
$assuntonews          = 'cadastro de newsletter';
// Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$emaildestinatarionews = 'ola@olaconecta.com'; 

/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemnews = '<P>Cadastro de Newsletter</P>
<p><b>E-Mail:</b> '.$emailnews.'
<hr>';

// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headersnews = "MIME-Version: 1.1\r\n";
$headersnews .= "Content-type: text/html; charset=utf-8\r\n";
$headersnews .= "From: $emaildestinatarionews\r\n"; // remetente
$headersnews .= "Return-Path: $emaildestinatarionews \r\n"; // return-path
$sendnews = mail($emaildestinatarionews, $assuntonews, $mensagemnews, $headersnews); 
 
 if($sendnews)
 echo "<meta http-equiv=\"refresh\" content=\"1;url=".$_SERVER['HTTP_REFERER']."\"/>";
 echo "
 <!doctype html>
  <html lang='pt-br'>
  <head>
  <!-- Bootstrap core CSS -->
  <link href='../../dist/css/bootstrap.css' rel='stylesheet'>
  </head>
  <body>
 <section class='container-fluid' id='contato-resposta'>
      <div class='container'>
        <h1>Cadastro efetuado com sucesso</h1>  
      </div>
    </section>
</body>
 ";

 
?>
