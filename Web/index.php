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
</head>
<body>
	<div class="container-fluid">
        <?php include 'inc/header.php'; ?>
		<!-- Banner -->
		<div class="row bloco-banner">
			<img class="img-banner" src="img/banner.jpg" alt="banner" title="banner">
		</div>
		<!-- Banner -->
		<section class="conteudo">
			<div class="col-xs-12 col-sm-8 col-md-8 pd-none">
				<div class="bg-container-esquerda"></div>
				<article class="bloco-servicos">
					<div class="bloco-titulo-servico">
						<img class="seta-servico" src="img/seta.png">
						<h1 class="titulo-servico">NOSSOS SERVIÇOS:</h1>
					</div>
					<div class="bloco-encapsula-servicos">
						<div class="bloco-servico">
							<img src="img/icon-moto.png" align="left">
							<h1 class="titulo-bloco-servico"><a href="express.php?pagina=servicos" style="text-decoration: none;">I9 Express</a></h1>
							<p class="txt-servico">Serviços de Motoboy, utilitários, vans e caminhões baú. <a href="express.php?pagina=servicos"> SAIBA MAIS</a></p>
						</div>
						<div class="bloco-servico">
							<img src="img/icon-carro.png" align="left">
							<h1 class="titulo-bloco-servico"><a href="utilitarios.php?pagina=servicos" style="text-decoration: none;">I9 Utilitários</a></h1>
							<p class="txt-servico">Serviços de entrega com utilitários Fiorino, Vans e Caminhões Baú<a href="utilitarios.php?pagina=servicos"> SAIBA MAIS</a></p>
						</div>
						<div class="bloco-servico">
							<img src="img/icon-contrato.png" align="left">
							<h1 class="titulo-bloco-servico"><a href="contrato.php?pagina=servicos" style="text-decoration: none;">I9 Contrato (contrato motoboy)</a></h1>
							<p class="txt-servico">Contrato de motoboy período integral e Contrato de motoboy Meio período<a href="contrato.php?pagina=servicos"> SAIBA MAIS</a></p>
						</div>
						<div class="bloco-servico">
							<img src="img/icon-distribuicao.png" align="left">
							<h1 class="titulo-bloco-servico"><a href="distribuicao.php?pagina=servicos" style="text-decoration: none;">I9 Distribuição</a></h1>
							<p class="txt-servico">Serviço de entrega e distribuição de brindes, mercadorias, mala direta, documentos, kits e cargas em geral.<a href="distribuicao.php?pagina=servicos"> SAIBA MAIS</a></p>
						</div>
						<div class="bloco-servico">
							<img src="img/icon-moto.png" align="left">
							<h1 class="titulo-bloco-servico"><a href="express.php?pagina=servicos" style="text-decoration: none;">I9 Motoboy no Ipiranga</a></h1>
							<p class="txt-servico">Serviço de motoboy no Ipiranga, Sacomã e região. Melhor preço da região. <a href="express.php?pagina=servicos"> SAIBA MAIS</a></p>
						</div>
					</div>
					<div class="servicos-destaque">
						<div class="bloco-servico">
							<img src="img/icon-aviao.png" align="left">
							<a href="transporte-aereo.php?pagina=servicos" style="text-decoration: none;"><h1 class="titulo-bloco-servico titulo-destaque">I9 Transporte Aéreo de Cargas</h1></a>
							<p class="txt-servico">Serviço de Transporte aéreo de cargas com coleta e entrega expressa urgente, expressa ou em até 72 horas. <a href="transporte-aereo.php?pagina=servicos"> SAIBA MAIS</a></p>
						</div>
						<div class="bloco-servico">
							<img src="img/icon-caminhao.png" align="left">
							<a href="transporte-rodoviario.php?pagina=servicos" style="text-decoration: none;"><h1 class="titulo-bloco-servico titulo-destaque">I9 Transporte Rodoviário de Cargas</h1></a>
							<p class="txt-servico">Serviço de Transporte rodoviário de cargas com coleta e entrega expressa urgente e expressa. <a href="transporte-rodoviario.php?pagina=servicos"> SAIBA MAIS</a></p>
						</div>
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