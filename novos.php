<?php
    $titleHtml = "Carros Novos na Concessionária e Revenda Autorizada Renault no Rio de Janeiro, RJ | Azzurra Renault";

    //HEAD
    require_once("_php/head.php");
    require_once("_php/fim_head.php");

    //TRAZ MENUS E HEADER 
    require_once("pages/header.php"); 
    require_once("pages/menu.php");  
?>

<!-- start main container -->
<div class="main-container clearfix">
 
	<!-- start title bar -->
	<div class="title-bar clearfix">
    	<!-- start container -->
    	<div class="container">
        	<!-- start row -->
            <div class="row">
            	<div class="col-md-12">
                    <h3><strong>RENAULT</strong>NOVOS</h3>
                    <!-- start title imgb -->
                    <div class="title-imgb clearfix">
                    	<img src="https://azzurrarenault.com.br/themes/azzurra-renault/assets/images/banner-novos.png" alt=" ">
                    </div>
                    <!-- end title imgb -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end title bar -->
	<!-- start container -->
    <div class="container">
    	<!-- start row -->
        <div class="row">
        	<div class="col-md-12">
            	<!-- start car listing2 -->
                <div class="car-listing2 clearfix">
                    <!-- start car listing section -->
                    <div class="car-listing-section clearfix">
                    	<?php require_once("pages/carro_zero.php") ?>
                    </div>
                    <!-- end car listing section -->
                </div>
                <!-- end car listing2 -->
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end main container -->

<?php 
  require_once("pages/modal_whats.php");  
  require_once("_php/footer.php")
?>