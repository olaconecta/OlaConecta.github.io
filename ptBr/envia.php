<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "olaconecta@gmail.com";
     
    $email_subject = "Contato enviado pelo Site";
     
     
    function died($error) {
        // your error code can go here
        echo "Ops, houve algum erro.";
        echo $error."<br /><br />";
        echo "<a class='btn btn-xs'>Voltar pra consertar</a><br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['nome']) ||
        !isset($_POST['empresa']) ||
        !isset($_POST['email']) ||
//         !isset($_POST['telefone']) ||
        !isset($_POST['mensagem'])) {
        died('Desculpe, houve um problema com o formulário.');       
    }
     
    $nome = $_POST['nome']; // required
    $empresa = $_POST['empresa']; // required
    $email = $_POST['email']; // required
    $telefone = $_POST['telefone']; // not required
    $comentario = $_POST['mensagem']; // required
     
//     $error_message = "";
//     $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
//   if(!preg_match($email_exp,$email)) {
//     $error_message .= 'O e-mail não parece ser válido.<br />';
//   }
//     $string_exp = "/^[A-Za-z .'-]+$/";
//   if(!preg_match($string_exp,$nome)) {
//     $error_message .= 'O nome não é válido.<br />';
//   }
//   if(!preg_match($string_exp,$empresa)) {
//     $error_message .= 'A Empresa não é válida.<br />';
//   }
//   if(strlen($comentario) < 20) {
//     $error_message .= 'A mensagem é muito curto.<br />';
//   }
//   if(strlen($error_message) > 0) {
//     died($error_message);
//   }
//     $email_message = "Detalhes abaixo.\n\n";
//      
//     function clean_string($string) {
//       $bad = array("content-type","bcc:","to:","cc:","href");
//       return str_replace($bad,"",$string);
//     }
     
    $email_message .= "Nome: ".clean_string($nome)."\n";
    $email_message .= "Sobrenome: ".clean_string($empresa)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "telefone: ".clean_string($telefone)."\n";
    $email_message .= "comentario: ".clean_string($comentario)."\n";
     
     
// create email headers
$headers = 'De: '.$email."\r\n".
'Responder a: '.$email."\r\n" .
// 'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- place your own success html below -->
 
Obrigado pelo contato. Em breve responderemos à sua solicitação.
 
<?php
}
die();
?>