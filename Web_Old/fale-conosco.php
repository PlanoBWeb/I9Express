<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>I9 Express - Fale Conosco</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<script src="js/funcoes.js"></script>
<script type="text/javascript">
	function enviardados2()
	{
		d = document.contato2;

		if(trim(d.nome.value)=="")
		{
			alert("O campo NOME deve ser preenchido!");
			d.nome.focus();
			return false;
		}
		
		if(trim(d.email.value)=="")
		{
			alert("O campo E-MAIL deve ser preenchido!");
			d.email.focus();
			return false;
		}
		
		if(!email(d.email,'')) return false;

		if(trim(d.telefone.value)=="")
		{
			alert("O campo TELEFONE deve ser preenchido!");
			d.telefone.focus();
			return false;
		}
		
		if(trim(d.msg.value)=="")
		{
			alert("O campo MENSAGEM deve ser preenchido!");
			d.msg.focus();
			return false;
		}
		
		d.submit();
	}
</script>
</head>
<body>
<?php include 'includes/topo.php'; ?>
<section class="pagina">
	<section class="container">
		<article class="container-esquerda">
			<div class="bg-container-esquerda"></div>
			<div class="encapsula-servicos page-fale">
				<div class="bloco-titulo-servico">
					<img class="seta-servico" src="img/seta.png">
					<h1 class="titulo-servico">FALE CONOSCO:</h1>
				</div>
				<div class="bloco-servicos-txt">
					<p class="txt-quem-somos">Para enviar sua dúvida, crítica ou sugestões, preencha o formulário abaixo retornaremos o mais breve possível.</p>
				</div>
				<form class="contato-fale-conosco" method="post" action="fale-envia.php" name="contato2">
					<input class="form-orcamento" type="text" name="nome" placeholder="* Nome">
					<input class="form-orcamento"  type="text" name="email" placeholder="* e-mail">
					<input class="form-orcamento"  type="text" name="telefone" placeholder="* Telefone">
					<textarea class="form-orcamento form-orcamento-msg"  name="msg" placeholder="*Mensagem"></textarea>
					<input class="btn-orcamento" type="submit" value="enviar"  onclick="return enviardados2();">
				</form>
			</div>
		</article>
		<article class="pag-localizacao pag-fale">
			<?php include 'includes/bloco-direita.php'; ?>
		</article>
	</section>
</section>
<?php include 'includes/rodape.php'; ?>
</body>
</html>
