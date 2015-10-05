<a class="ancora" href="#topo"><img src="img/btn-topo.png" alt="topo" title="topo"></a>
<footer>
	<section class="rodape">
		<nav>
			<ul class="menu-rodape">
			<li class="linha-menu-rodape"><a class="link-menu-rodape" href="index.php?pagina=home"> Home&nbsp; | &nbsp;&nbsp;</a></li>
			<li class="linha-menu-rodape"><a class="link-menu-rodape" href="quem-somos.php?pagina=quem-somos"> Quem Somos&nbsp; | &nbsp;&nbsp;</a></li>
			<li class="linha-menu-rodape"><a class="link-menu-rodape" href="express.php?pagina=servicos"> Serviços&nbsp; | &nbsp;&nbsp;</a></li>
			<li class="linha-menu-rodape"><a class="link-menu-rodape" href="orcamentos.php?pagina=orcamentos"> Orçamentos&nbsp; | &nbsp;&nbsp;</a></li>
			<li class="linha-menu-rodape"><a class="link-menu-rodape" href="fale-conosco.php?pagina=fale-conosco"> Fale Conosco&nbsp; | &nbsp;&nbsp;</a></li>
			<li class="linha-menu-rodape"><a class="link-menu-rodape" href="localizacao.php?pagina=localizacao"> Localização</a></li>
			</ul>
		</nav>
		<p class="txt-direitos">I9 Log Express - 2015 - Todos os direitos reservados</p>
		<a href="http://planobweb.com.br/" target="_blank"><img class="img-planob" src="img/planob.png"></a>
		<p class="txt-dev">Desenvolvimento</p>		
	</section>
	<section class="rodape-mobile">		
			<p class="txt-direitos">I9 Log Express - 2015 - Todos os direitos reservados</p>
		<div class="bloco-direitos-mobile">
			<a href="http://planobweb.com.br/" target="_blank"><img class="img-planob" src="img/logo_planob.jpg"></a>
			<p class="txt-dev">Desenvolvimento</p>	
		</div>
	</section>
</footer>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(".linha-servico-desk, .dropdown-menu-desk").mouseenter(function(){
		$(".dropdown-menu-desk").show();
	});
	$(".linha-servico-desk, .dropdown-menu-desk").mouseleave(function(){
		$(".dropdown-menu-desk").hide();
	});	
    $(".ancora").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
   });
    $(function(){   
		var nav = $('.ancora');   
		$(window).scroll(function () { 
			if ($(this).scrollTop() > 140) { 
				nav.show(); 
			}else{
				nav.hide();
			}
		});  
	});
</script>