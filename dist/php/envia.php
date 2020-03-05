<?php



// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nome     = $_POST['nome'];
$email    = trim($_POST['email']);
$emaildestinatario = 'olaconecta@gmail.com'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
// $ddd      	   	   = $_POST['ddd'];
$telefone      	   = $_POST['telefone'];
$empresa          = $_POST['empresa'];
// $outros          = $_POST['outros'];
$mensagem          = $_POST['mensagem'];
$assunto          = 'Email do site da Ola!';
 
// // Cria uma variável que terá os dados do erro
// $erro = false;
// // Verifica se o POST tem algum valor
// if ( !isset( $_POST ) || empty( $_POST ) ) {
// 	$erro = 'Nada foi postado.';
// }
// // Cria as variáveis dinamicamente
// foreach ( $_POST as $chave => $valor ) {
// 	// Remove todas as tags HTML
// 	// Remove os espaços em branco do valor
// 	$$chave = trim( strip_tags( $valor ) );
	
// 	// Verifica se tem algum valor nulo
// 	if ( empty ( $valor ) ) {
// 		$erro = 'Existem campos em branco.';
// 	}
// }
// // Verifica se $idade realmente existe e se é um número. 
// // Também verifica se não existe nenhum erro anterior
// if ( ( ! isset( $telefone) || ! is_numeric( $telefone ) ) && !$erro ) {
// 	$erro = 'A idade deve ser um valor número.';
// } 
// // Verifica se $email realmente existe e se é um email. 
// // Também verifica se não existe nenhum erro anterior
// if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
// 	$erro = 'Envie um email válido.';
// }

// // Se existir algum erro, mostra o erro
// if ( $erro ) {
// 	echo $erro;
// } else {
// 	// Se a variável $erro continuar com valor falso
// 	// Você pode fazer o que preferir aqui, por exemplo, 
// 	// enviar para a base de dados, ou enviar um email
// 	// Tanto faz. Vou apenas exibir os dados na tela.
// 	echo "<h1> Veja os dados enviados</h1>";
	
// 	foreach ( $_POST as $chave => $valor ) {
// 		echo '<b>' . $chave . '</b>: ' . $valor . '<br><br>';
// 	}
// }


/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>Formulário enviado do site da Olá</P>
<p><b>Nome:</b> '.$nome.'
<p><b>E-Mail:</b> '.$email.'
<p><b>Telefone:</b> '.$telefone.'
<p><b>Empresa:</b> '.$empresa.'
<p><b>Mensagem:</b> '.$mensagem.'</p>
<hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emaildestinatario\r\n"; // remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers); 
 
 if($envio)
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
        <h1>Mensagem enviada com sucesso</h1>  
      </div>
    </section>
</body>
 ";
//  echo "<script>location.href='sucesso.php'</script>"; 
//  echo "<script>location.href='http://www.olaconecta.com'</script>"; // Página que será redirecionada
//   "<script>location.href='http://www.olaconecta.com'</script>"; // Página que será redirecionada

 
?>
