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
  $assunto 	.= "I9 Express - Fale Conosco";
  $conteudo 	.= "$cont\r\n";
  $headers 	.= "From: i9logexpress@i9logexpress.com.br\n"; // remetente-empresa
  $headers 	.= "Return-Path: i9logexpress@i9logexpress.com.br\r\n"; // return-path - empresa
  $headers 	.= "Bcc: contato@planobweb.com.br\r\n"; // cópia
  $headers 	.= "Reply-To: $email\n";
  $envio 		= mail("i9logexpress@i9logexpress.com.br", $assunto,$conteudo,$headers); //enviado
  
  
  if($envio){
    echo "<script>location.href ='fale-conosco-obrigado.php'</script>";  
  }else{
    echo "<script>alert('Erro no envio!!');location.href ='fale-conosco.php'</script>";  
  }
  
}

?>

