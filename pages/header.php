<header class="header">
	<!-- start container -->
    <div class="container">
    	<!-- start row -->
        <div class="row">
        	<div class="col-md-12">
            	<!-- start logo -->
                <div class="logo">
                	<a href="/" title="Azzurra Renault" class="logo-img"><img src="assets/img/logo.png" alt="Logo Azzurra Renault" width="256"></a>
                	<div href="javascript:;" class="menu-icon" title="Menu" style="float: right;margin-top: 0px;">Menu</div>
                </div>
                <nav class="navigation menu2 clearfix hidden-md hidden-lg">
                	<!-- start menu mobile -->
                    <div class="container">
                    	<!-- start row -->
                        <div class="row">
                        	<div class="col-md-12">
                            	<ul>
                                	 
                                    <li><a href="novos" title="NOVO"><span class="novos">NOVOS</span></a></li> 
                                    <li><a href="servicos" title="SERVIÇOS">SERVIÇOS</a></li> 
                                    <li><a href="pecas" title="PEÇAS E ACESSÓRIOS">PEÇAS E ACESSÓRIOS</a></li> 

                                    <li class="menu-baixo"><a href="quem-somos" title="Quem Somos">Quem Somos</a></li>
                                    <li class="menu-baixo"><a href="#" title="FALE CONOSCO">Entre em Contato</a></li>
                                    <li class="menu-baixo"><a href="nossas-lojas" title="Nossas Lojas">Nossas Lojas</a></li> 
                                </ul>
                                
                                <!-- <a href="#" title="search" class="search">search</a> -->
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </nav>
                <!-- end logo -->
                <!-- start header right -->
                <div class="header-right clearfix">
                	<!-- start header top -->
                    <div class="header-top clearfix hidden-xs">
                    	<!-- start top links -->
                        <div class="top-links clearfix">
                        	<ul>
                            	<li class="bg_divider"><a href="quem-somos" title="Quem Somos">Quem Somos</a></li>
                                <li class="bg_divider"><a href="#" title="FALE CONOSCO">Entre em Contato</a></li>
                                <li class="bg_divider"><a href="nossas-lojas" title="Nossas Lojas">Nossas Lojas</a></li>
                            </ul>
                        </div>
                        <!-- end top links -->
                    </div>
                    <!-- end header top -->
                    <div class="header-mobile-contact visible-xs hidden-sm hidden-md">
                    	<div class="header-mob-txt">
                    	        <a href="#" class="c2call">Chame pelo WhatsApp</a> <br/>

                              <div class="header-mob-whats">
                                <div class="modal-whats" data-toggle="modal" data-target="#whatsappModal">
                                  <i class="icone-watt"></i>
                                  <span>(21) 99005-1115</span>
                                </div>
                              </div>
                                
                            </div>
                    	</div>
                    <!-- start header bottom -->
                    <div class="header-bottom clearfix">
                    	<!-- start header links -->
                        <div class="header-links clearfix hidden-xs">
                        	<ul style="height:58px">
                        	    <li>
                                    <b>Chame pelo WhatsApp</b>
                                </li> 
                        	    
                        	    <li class="pull-right">
                                    <div class="modal-whats" data-toggle="modal" data-target="#whatsappModal">
                        	           <i class="icone-watt"></i>
                        	           <span>(21) 99005-1115</span>
                        	           <!--<a href="tel:021990051115" {#onclick="click2call();"#}style="padding: 0 0 0 30px;"> (021) 990-051-115</a>-->
                        	        </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end header links -->

                        <!-- start phone section --> 
                        <div class="phone-section phone-slick">
                            <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                         
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <?php foreach($resultado_loja as $telefone):
                                        $tel = htmlspecialchars($telefone['loja_telefone']);    
                                        ?>
                                    
                                        <div class="item">
                                            <strong >
                                                <span><?= $telefone['loja_nome'] ?></span>
                                                <label class="buscaTelefone">
                                                    <a href="tel:<?= htmlspecialchars($telefone['loja_telefone']) ?>"><?= htmlspecialchars(mask($tel, '(##) #####-####')) ?></a>
                                                </label>
                                            </strong> 
                                        </div>
                                    
                                    </div>   
                                  <?php endforeach?>                           
                                </div>
                            </div>
                        </div>

                        </div>
                        <!-- end phone section -->
                    </div>
                    <!-- end header bottom -->
                </div>
                <!-- end header right -->
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</header>
