<?php
//PROTEÇÃO ANTES DE ENVIAR 
//Verifica se os campos mensagem, email_de e assunto do formulário estão preenchidos 
if (empty($_POST['NOME'])|| empty($_POST['EMAIL'])|| empty($_POST['MENSAGEM'])) {
   //Não tem mensagem vindo pelo formulário, não manda nada e redireciona para o formulario.html 
   header("Location: index.html"); 
} else { 

$ip = $_SERVER['REMOTE_ADDR'];
$data = date("d/m/y"); //função para pegar a data de envio do e-mail
$hora = date("H:i"); //para pegar a hora com a função date

$nome = $_POST['NOME'];
$email = $_POST['EMAIL'];
$tel = $_POST['DDD'];
$tel = $_POST['NUM'];
$pergunta = $_POST['PERGUNTA'];
$mensagem = $_POST['MENSAGEM'];


$cont = "$ip\r\n";
$cont .= "$data\r\n";
$cont .= "$hora\r\n";
$cont .= "\r\nNome: \t$NOME\r\n";
$cont .= "E-mail: \t$EMAIL\r\n";
$cont .= "Telefone: \t$DDD \t$NUM\r\n";
$cont .= "Onde nos achou? \t$PERGUNTA \r\n";
$cont .= "\r\nMensagem: \n";
$cont .= "$MENSAGEM";

$headers 	= "MIME-Version: 1.1\r\n";
$headers 	.= "Content-type: text/plain; charset=UTF-8\n";
$assunto 	.= "I9 Express - Fale Conosco";
$conteudo 	.= "$cont\r\n";
$headers 	.= "From: i9logexpress@i9logexpress.com.br\r\n"; // remetente
$headers 	.= "Return-Path: i9logexpress@i9logexpress.com.br\r\n"; // return-path
$headers 	.= "Bcc: contato@planobweb.com.br\r\n";
$headers 	.= "Reply-To: $email\n";
$envio 		= mail("i9logexpress@i9logexpress.com.br",$assunto,$conteudo,$headers);

if($envio)
 echo "<script>alert('Contato Enviado com Sucesso!');location.href ='index.html'</script>";
 else  
 echo "falha no envio da mensagem";
} 
?>
<body>
<!-- Google Code for Fale Conosco Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
	var google_conversion_id = 987239678;
	var google_conversion_language = "en";
	var google_conversion_format = "2";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "AM4QCIzhxVcQ_qng1gM";
	var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
	<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/987239678/?label=AM4QCIzhxVcQ_qng1gM&amp;guid=ON&amp;script=0"/>
	</div>
</noscript>
</body>