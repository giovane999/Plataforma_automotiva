<?php
  $titleHtml = "Nossas Lojas na Concessionária e Revenda Autorizada Renault no Rio de Janeiro, RJ | Azzurra Renault";
  
  //HEAD
  require_once("_php/head.php");
  require_once("_php/fim_head.php");

  //TRAZ MENUS E HEADER 
  require_once("pages/header.php"); 
  require_once("pages/menu.php");  
?>  

<div class="title-bar clearfix">
  <!-- start container -->
  <div class="container">
    <!-- start row -->
    <div class="row">
      <div class="col-md-12">
        <h3><strong>RENAULT</strong>NOSSAS LOJAS</h3>
        <!-- start title imgb -->
        <div class="title-imgb clearfix"><img src="https://azzurrarenault.com.br/themes/azzurra-renault/assets/images/banner-lojas.png" alt="Lojas da Concessionária e Revenda Autorizada de Veículos Novos Renault no Rio de Janeiro, RJ"></div>
        <!-- end title imgb -->
      </div>
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</div>

<section class="location-20 map-block">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php foreach($resultado_loja as $lojas): ?>
          <div class="store-info">
            <div class="row mapinhas">
              <div class="col-xs-12 col-md-6">
                  <div class="store-name"><?= htmlspecialchars($lojas['loja_nome']) ?></div>
                  <ul>
                    <li>
                      <b><i class="fas fa-map-marker-alt"></i> Endereço: </b><?= htmlspecialchars($lojas['loja_endereco']) ?> </li>

                    <li>
                      <b><i class="fa fa-phone" aria-hidden="true"></i> Telefone: </b><?= htmlspecialchars(mask($tel, '(##) #####-####')) ?> </li>
                </ul>

              </div>
              <div class="col-xs-12 col-md-6 flex-mapas">
                <div class="box-map">
                  <div class="map">
                    <iframe width="100%" height="100%" frameborder="0" style="border:0;" src="https://www.google.com/maps/embed/v1/place?q=-30.0429435+-51.1793934&amp;key=AIzaSyDn7UEwRg9PE0X6uCQT7HuOXk8I-tFQQNs"
                      data-loader="frame"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
 
          <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php 
  require_once("pages/modal_whats.php");  
  require_once("_php/footer.php")
?>