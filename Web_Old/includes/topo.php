﻿<?php include_once("analyticstracking.php") ?>

<header class="topo">
	<a href="index.php?pagina=home"><div class="logo"></div></a>
	<div class="contato-topo">
		<div class="img-tel-topo"></div>
		<p class="txt-tel-topo"><span class="ddd">11</span> 2272-7067 <br> 2272-7081  <span class="atendimento">Atendimento 24 horas!</span></p>
		<p class="txt-tel-topo txt-tel-topo-margin">Ligue: 11 9-4018-7444 - ID: 683*17192</p>
		<a href="">
			<div class="btn-area-cliente">
				<a style="text-decoration: none;" href="http://www.sysweb7.com.br/i9logexpress/ "><p class="link-area-cliente">ÁREA DO CLIENTE</p></a>
			</div>
		</a>
	</div>
	<nav id="cssmenu">
		<ul class="menu-topo">	
			<?php 
				error_reporting(E_ALL ^ E_NOTICE); 
				$pag = $_GET['pagina']; 
			?>
			<li class="linha-menu-topo <?php if($pag == '' OR  $pag == 'home'){ ?> ativo <?php } ?>"><a class="link-menu-topo" href="index.php?pagina=home">HOME</a></li>
			<li class="linha-menu-topo <?php if($pag == 'quem-somos'){ ?> ativo <?php } ?>"><a class="link-menu-topo" href="quem-somos.php?pagina=quem-somos">QUEM SOMOS</a></li>
			<li class="linha-menu-topo <?php if($pag == 'servicos'){ ?> ativo <?php } ?>"><a class="link-menu-topo menu-drop" href="express.php?pagina=servicos">SERVIÇOS</a>
				
				<ul class="menu-drop-aparece" style="display:none;">
					<div class="encapsula-menu-drop">
						<li class="linha-menu-drop"><a class="link-menu-drop" href="motoboy-no-ipiranga.php?pagina=servicos">I9 Motoboy no Ipiranga</a></li>
						<li class="linha-menu-drop"><a class="link-menu-drop" href="express.php?pagina=servicos">I9 Express</a></li>
						<li class="linha-menu-drop"><a class="link-menu-drop" href="utilitarios.php?pagina=servicos">I9 Utilitários</a></li>
						<li class="linha-menu-drop"><a class="link-menu-drop" href="contrato.php?pagina=servicos">I9 Contrato</a></li>
						<li class="linha-menu-drop"><a class="link-menu-drop" href="distribuicao.php?pagina=servicos">I9 Distribuição</a></li>
						<li class="linha-menu-drop"><a class="link-menu-drop" href="transporte-aereo.php?pagina=servicos">I9 Transporte Aéreo</a></li>
						<li class="linha-menu-drop"><a class="link-menu-drop" href="transporte-rodoviario.php?pagina=servicos">I9 Transporte Rodoviário</a></li>
					</div>
				</ul>

			</li>
			<li class="linha-menu-topo <?php if($pag == 'orcamentos'){ ?> ativo <?php } ?>"><a class="link-menu-topo" href="orcamentos.php?pagina=orcamentos">ORÇAMENTOS</a></li>
			<li class="linha-menu-topo <?php if($pag == 'fale-conosco'){ ?> ativo <?php } ?>"><a class="link-menu-topo" href="fale-conosco.php?pagina=fale-conosco">FALE CONOSCO</a></li>
			<li class="linha-menu-topo <?php if($pag == 'localizacao'){ ?> ativo <?php } ?>"><a class="link-menu-topo" href="localizacao.php?pagina=localizacao">LOCALIZAÇÃO</a></li>
		</ul>
	</nav>
</header>
<article class="vitrine-banner">
	<div class="encapsula-banner">
		<img style="margin-left: -240px; margin-top: -5px;" src="img/banner.png">
		<!-- <div class="bloco-banner"></div> -->
	</div>
</article>