<?php
//PROTEÇÃO ANTES DE ENVIAR 
//Verifica se os campos mensagem, email_de e assunto do formulário estão preenchidos 
if (empty($_POST['nome'])|| empty($_POST['email'])|| empty($_POST['telefone'])|| empty($_POST['msg'])) {
   //Não tem mensagem vindo pelo formulário, não manda nada e redireciona para o formulario.html 
   header("Location: index.php"); 
} else { 

  $ip = $_SERVER['REMOTE_ADDR'];
  $data = date("d/m/y"); //função para pegar a data de envio do e-mail
  $hora = date("H:i"); //para pegar a hora com a função date

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $msg = $_POST['msg'];

  $cont = "$ip\r\n";
  $cont .= "$data\r\n";
  $cont .= "$hora\r\n\r\n";
  $cont .= "Nome: \t$nome\r\n";
  $cont .= "E-mail: \t$email\r\n";
  $cont .= "Telefone: \t$telefone\r\n";
  $cont .= "\r\nMensagem: \n";
  $cont .= "$msg";

  $headers 	= "MIME-Version: 1.1\r\n";
  $headers 	.= "Content-type: text/plain; charset=UTF-8\n";
  $assunto 	.= "I9 Express - Orçamentos";
  $conteudo 	.= "$cont\r\n";
  $headers 	.= "From: i9logexpress@i9logexpress.com.br\n"; // remetente-empresa
  $headers 	.= "Return-Path: i9logexpress@i9logexpress.com.br\r\n"; // return-path - empresa
  $headers 	.= "Bcc: contato@planobweb.com.br\r\n"; // cópia
  $headers 	.= "Reply-To: $email\n";
  $envio 		= mail("i9logexpress@i9logexpress.com.br", $assunto,$conteudo,$headers); //enviado
  
  if($envio){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <script type="text/javascript">
    var google_conversion_id = 987239678;
    var google_conversion_language = "en";
    var google_conversion_format = "3";
    var google_conversion_color = "ffffff";
    var google_conversion_label = "7Fa2CMTM3F0Q_qng1gM"; var google_remarketing_only = false;
  </script>
  <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
  <noscript>
    <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/987239678/?label=7Fa2CMTM3F0Q_qng1gM&amp;guid=ON&amp;script=0"/>
    </div>
  </noscript>
</body>
</html>
<?php
  echo "<script>alert('Enviado com sucesso!!');location.href ='index.php'</script>";
  }
}

?>

