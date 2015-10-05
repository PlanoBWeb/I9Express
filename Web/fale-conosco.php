<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index, follow">
	<meta name="description" content="" />
	<link href="img/icon-tab.png" rel="icon">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="img/icon-tab.png" rel="icon">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<title>I9</title>
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
	<div class="container-fluid">
        <?php include 'inc/header.php'; ?>
		<!-- Banner -->
		<div class="row bloco-banner">
			<img class="img-banner" src="img/banner.jpg" alt="banner" title="banner">
		</div>
		<!-- Banner -->
		<section class="conteudo conteudo-interna conteudo-orcamento">
			<div class="col-xs-12 col-sm-8 col-md-8 pd-none">
				<div class="bg-container-esquerda"></div>
				<article class="bloco-servicos">
					<div class="bloco-titulo-servico">
						<img class="seta-servico" src="img/seta.png">
						<h1 class="titulo-servico">FALE CONOSCO:</h1>
					</div>
					<div class="bloco-encapsula-servicos">
						<p class="txt-quem-somos">Para enviar sua dúvida, crítica ou sugestões, preencha o formulário abaixo retornaremos o mais breve possível.</p>
						<form class="contato-fale-conosco" method="post" action="envia.php" name="contato2">
							<input class="form-orcamento" type="text" name="nome" placeholder="* Nome">
							<input class="form-orcamento"  type="text" name="email" placeholder="* e-mail">
							<input class="form-orcamento"  type="text" name="telefone" placeholder="* Telefone">
							<textarea class="form-orcamento form-orcamento-msg"  name="msg" placeholder="*Mensagem"></textarea>
							<input class="btn-orcamento" type="submit" value="enviar"  onclick="return enviardados2();">
						</form>
					</div>
				</article>
			</div>
			<!-- Bloco Menu Lateral -->
			<div class="col-xs-12 col-sm-4 col-md-4 pd-none bloco-form-lateral">
				<?php include 'inc/bloco-lateral.php'; ?>
			</div>
			<div class="moca-orcamento">
				<img src="img/moca.png">
			</div>
			<!-- Bloco Menu Lateral -->			
		</section>
		<?php include 'inc/footer.php'; ?>
        <!-- <div class="col-xs-12 col-sm-12 col-md-12 pd-left-none"> -->
    </div>
</body>
</html>