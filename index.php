<?php
    $titleHtml = "Concessionária e Revenda Autorizada Renault no Rio de Janeiro, RJ | Azzurra Renault";

	//HEAD
	require_once("_php/head.php");
	require_once("_php/fim_head.php");

	//TRAZ MENUS E HEADER
	require_once("pages/header.php");
	require_once("pages/menu.php");
?>


<?php require_once("pages/banners.php"); ?>

<!-- start main container -->
<div class="main-container clearfix main-container-home">
	<!-- start container -->
    <div class="container">
    	<!-- start row -->
        <div class="row clearfix">
            <div class="col-xs-12 col-md-4 form-home">
            	<?php	require_once("pages/form_home.php"); ?>
            </div>
        	<div class="col-md-8">
            	<!-- start about column -->
                <div class="about-column clearfix">

                	<h3>um veículo<br> para cada estilo</strong> <span>aqui tem um Renault para cada estilo de<br>vida, clique e encontre o seu.</span></h3>
                    <!-- <img src="{{ destaques_var.image.getPath(633,132,'auto') }}" alt="car" width="633" height="132"> -->
                    <img src="https://azzurrarenault.com.br/themes/azzurra-renault/assets/images/banner1.png" alt="{{alt|default('')}}" width="633" height="132">
                    <a href="novos" title="VER TODOS OS MODELOS" class="btn-more">VER TODOS OS MODELOS</a>
                </div>
                <!-- end about column -->
            </div>
        </div>
        <!-- end row -->
        <!-- start row -->
        <div class="row">
        	<div class="col-md-12">
            	<?php require_once("pages/destaques.php") ?>
                <!-- start car banner2 -->
                <a href="quem-somos">
                <div class="car-banner2 clearfix">
                	<!-- start caption -->
                    <div class="caption">
                    	<h3><strong>SOBRE A</strong> Renault</h3>
                    </div>
                    <!-- end caption -->
                    <!-- start txtb -->
                    <div class="txtb">
                        <p>O Grupo Azzurra nasceu em 1964, na cidade do Rio de Janeiro, junto com a marca Fiat. Sua missão é comercializar produtos e serviços com honestidade e ética, focado na plena satisfação do cliente, respeitando parceiros e colaboradores, objetivando liderar o mercado e expandir as atividades. Sustentado por isso, o Grupo não parou de crescer.</p>
                    </div>
                    <!-- end txtb -->
                </div>
                </a>

            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<div>




<?php
    require_once("pages/modal_whats.php");
    require_once("_php/footer.php")
?>
