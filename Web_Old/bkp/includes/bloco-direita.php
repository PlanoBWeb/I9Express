<article class="container-direita">
	<div class="bloco-orcamento">
		<div class="bloco-titulo-servico" style="margin-bottom: 25px;">
			<img class="seta-servico-orcamento" src="img/seta.png">
			<h1 class="titulo-orcamento titulo-orcamento-fale" style="color: #fff;">ORÇAMENTOS:</h1>
		</div>
		<form method="post" action="envia.php" name="contato">
			<input class="form-orcamento" type="text" name="nome" placeholder="* Nome">
			<input class="form-orcamento"  type="text" name="email" placeholder="* e-mail">
			<input class="form-orcamento"  type="text" name="telefone" placeholder="* Telefone">
			<textarea class="form-orcamento form-orcamento-msg"  name="msg" placeholder="*Mensagem"></textarea>
			<input class="btn-orcamento" type="submit" value="enviar"  onclick="return enviardados();">
		</form>
		<div class="localizacao-bloco">
			<div class="bloco-titulo-servico" style="margin-bottom: 0px;">
				<img class="seta-servico-mini seta-local" src="img/seta-mini.png">
				<h1 class="titulo-orcamento" style="color: #fff;">LOCALIZAÇÃO:</h1>
			</div>
			<div class="mapa-orcamento">
				<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3656.49628166833!2d-46.607349899999996!3d-23.586528099999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5bef56316db3%3A0x3cdb615464ef0dac!2sR.+Bom+Pastor%2C+1141+-+Ipiranga%2C+S%C3%A3o+Paulo+-+SP%2C+04203-051!5e0!3m2!1spt-BR!2sbr!4v1426103481150" width="277" height="162" frameborder="0" style="border:0"></iframe> -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.4537829826363!2d-46.607173!3d-23.5880533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5bef3a823ef1%3A0x5be093556c129953!2sR.+Bom+Pastor%2C+1315+-+Ipiranga%2C+S%C3%A3o+Paulo+-+SP%2C+04203-051!5e0!3m2!1spt-BR!2sbr!4v1440076391282" width="277" height="162" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="contato-bloco">
			<div class="bloco-titulo-servico" style="margin-bottom: 0px;">
				<img class="seta-servico-mini" src="img/seta-mini.png">
				<h1 class="titulo-orcamento" style="color: #fff;">CONTATO:</h1>
			</div>
		</div>
	</div>
	<div class="endereco-orcamento">
		<p class="txt-end-orcamento">Tel.: 11 2272-7067 • 2272-7081</p>
<!-- 		<p class="txt-end-orcamento">Nextel: 11 7793-0462 • ID: 683*17192</p> -->
		<p class="txt-end-orcamento">Rua Bom Pastor, 1315 Sala 3 • Ipiranga</p>
		<p class="txt-end-orcamento">CEP: 04203-051 • São Paulo • SP</p>
		<div class="orcamento-email">
			<a class="link-bloco-direita" href="mailto: i9logexpress@i9logexpress.com.br">i9logexpress@i9logexpress.com.br</a>
		</div>
		<p class="txt-atendimento-orcamento">Atendimento 24 horas! </p>
		<p class="hr-orcamento">Ligue: 11 9-4018-7444 <br>ID: 683*17192</p>
	</div>
	<div class="moca-orcamento">
		<img src="img/moca.png">
	</div>	
</article>
<script src="js/funcoes.js"></script>
<script type="text/javascript">
	function enviardados()
	{
		d = document.contato;

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