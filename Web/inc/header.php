<?php include_once("analyticstracking.php") ?>
<header id="topo">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="col-xs-12 col-sm-3 col-md-3 pd-left-none bloco-menu-mobile">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Logo" title="Logo"></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9 pd-left-none">
                <div class="row">
                    <div class="bloco-contato-topo">
                        <div class="col-xs-12 col-sm-3 col-md-3 pd-none">
                            <div class="img-tel-topo"></div>
                            <p class="txt-tel-topo"><a href="tel:01122727067"><span class="ddd">11</span> 2272-7067</a> <br> <a href="tel:01122727081">2272-7081</a></p>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-9 pd-none bloco-id-ligue">
                            <span class="atendimento">Atendimento 24 horas!</span>
                            <p class="txt-tel-topo txt-tel-topo-margin">Ligue: <a href="tel:01140187444">11 9-4018-7444</a> - ID: 683*17192</p>
                        </div>    
                        <div class="area-cliente"><a href="http://www.sysweb7.com.br/i9logexpress/" target="_blank">ÁREA DO CLIENTE</a></div>
                    </div>
                </div>
                <div class="row bloco-menu">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <?php 
                                error_reporting(E_ALL ^ E_NOTICE); 
                                $pag = $_GET['pagina']; 
                            ?>
                            <li class="linha-menu-topo <?php if($pag == '' OR  $pag == 'home'){ ?> linha-menu-topo-ativo <?php } ?>"><a class="link-menu-topo" href="index.php?pagina=home">home <!-- <span class="sr-only">(current)</span> --></a></li>
                            <li class="linha-menu-topo <?php if($pag == 'quem-somos'){ ?> linha-menu-topo-ativo <?php } ?>"><a class="link-menu-topo" href="quem-somos.php?pagina=quem-somos">quem somos</a></li>
                            <li class="drop-desk dropdown linha-menu-topo <?php if($pag == 'servicos'){ ?> linha-menu-topo-ativo <?php } ?>">
                                <a href="express.php?pagina=servicos" class="link-menu-topo linha-servico-desk">serviços</a>
                                <div class="dropdown-menu dropdown-menu-desk">
                                    <ul class="bloco-dropdown-menu">
                                        <li class="linha-menu-drop"><a class="link-menu-drop" href="motoboy-no-ipiranga.php?pagina=servicos">I9 Motoboy no Ipiranga</a></li>
                                        <li class="linha-menu-drop"><a class="link-menu-drop" href="express.php?pagina=servicos">I9 Express</a></li>
                                        <li class="linha-menu-drop"><a class="link-menu-drop" href="utilitarios.php?pagina=servicos">I9 Utilitários</a></li>
                                        <li class="linha-menu-drop"><a class="link-menu-drop" href="contrato.php?pagina=servicos">I9 Contrato</a></li>
                                        <li class="linha-menu-drop"><a class="link-menu-drop" href="distribuicao.php?pagina=servicos">I9 Distribuição</a></li>
                                        <li class="linha-menu-drop"><a class="link-menu-drop" href="transporte-aereo.php?pagina=servicos">I9 Transporte Aéreo</a></li>
                                        <li class="linha-menu-drop"><a class="link-menu-drop" href="transporte-rodoviario.php?pagina=servicos">I9 Transporte Rodoviário</a></li>
                                    </ul>
                                </div>                             
                            </li>
                            <li class="drop-mobile dropdown linha-menu-topo <?php if($pag == 'servicos'){ ?> linha-menu-topo-ativo <?php } ?>">
                                <a href="express.php?pagina=servicos" class="dropdown-toggle link-menu-topo linha-servico-mobile" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">serviços <span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-mobile">
                                    <li class="linha-menu-drop"><a class="link-menu-drop" href="motoboy-no-ipiranga.php?pagina=servicos">I9 Motoboy no Ipiranga</a></li>
                                    <li class="linha-menu-drop"><a class="link-menu-drop" href="express.php?pagina=servicos">I9 Express</a></li>
                                    <li class="linha-menu-drop"><a class="link-menu-drop" href="utilitarios.php?pagina=servicos">I9 Utilitários</a></li>
                                    <li class="linha-menu-drop"><a class="link-menu-drop" href="contrato.php?pagina=servicos">I9 Contrato</a></li>
                                    <li class="linha-menu-drop"><a class="link-menu-drop" href="distribuicao.php?pagina=servicos">I9 Distribuição</a></li>
                                    <li class="linha-menu-drop"><a class="link-menu-drop" href="transporte-aereo.php?pagina=servicos">I9 Transporte Aéreo</a></li>
                                    <li class="linha-menu-drop"><a class="link-menu-drop" href="transporte-rodoviario.php?pagina=servicos">I9 Transporte Rodoviário</a></li>
                                </ul> 
                            </li>
                            <li class="linha-menu-topo <?php if($pag == 'orcamentos'){ ?> linha-menu-topo-ativo <?php } ?>"><a class="link-menu-topo" href="orcamentos.php?pagina=orcamentos">orçamentos</a></li>
                            <li class="linha-menu-topo <?php if($pag == 'fale-conosco'){ ?> linha-menu-topo-ativo <?php } ?>"><a class="link-menu-topo" href="fale-conosco.php?pagina=fale-conosco">fale conosco</a></li>
                            <li class="linha-menu-topo <?php if($pag == 'localizacao'){ ?> linha-menu-topo-ativo <?php } ?>"><a class="link-menu-topo" href="localizacao.php?pagina=localizacao">localização</a></li>
                            <li class="linha-menu-topo link-area-cliente"><a class="link-menu-topo" target="_blank" href="http://www.sysweb7.com.br/i9logexpress/">ÁREA DO CLIENTE</a></li>
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    </nav>
</header>