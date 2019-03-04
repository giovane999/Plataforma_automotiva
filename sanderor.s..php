
<?php

  //HEAD
  require_once("_php/head.php");
  require_once("_php/fim_head.php");

  //TRAZ MENUS E HEADER 
  require_once("pages/header.php"); 
  require_once("pages/menu.php");  

?>
 

 
<!-- start main container -->
<div class="main-container clearfix">
 
 
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
                      <!-- ==================================  -->

                      <?php foreach($resultado as $carros) : ?>
                             <div class="main-container clearfix main-container-home">
                            <!-- start title bar -->
                            <div class="title-bar clearfix">
                              <!-- start container -->
                              <div class="container">
                                <!-- start row -->
                                <div class="row">
                                  <div class="col-md-12">
                                    <h3><strong><?= htmlspecialchars($carros['carro_modelo']) ?></strong><?= htmlspecialchars($carros['carro_nome']) ?></h3>
                                    <!-- start title imgb -->
                                    <div class="title-imgb clearfix"><img src="https://azzurrarenault.com.br/themes/azzurra-renault/assets/images/2385.png" alt=""></div>
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
                                  <!-- start row -->
                                  <div class="row clearfix">
                                    <div class="col-md-8">
                                      <!-- start product details box -->
                                      <div class="version-car" style="margin-bottom: 13px;"><?= htmlspecialchars($carros['carro_nome']) ?></div>
                                      <div class="product-details-box clearfix">
                                        <!-- start tab -->
                                        <div class="clearfix">
                                          <!-- start tab content -->
                                          <div class="tab-content clearfix" style="display: none;">
                                            <div class="wrap-img-car img">
                                              <img class="img-responsive tira id  active " src="assets/img_mini/<?= htmlspecialchars($carros['carro_imagem_mini']) ?>" alt="">
                                            </div>
                                          </div>
                                          <!-- end tab content -->
                                        </div>
                                        <!-- end tab -->
                                        <!-- start colors -->
                                        <div class="colors" style="margin-bottom:10px">
                                          <h3>CORES</h3>
                                          <ul>
                                            <li class="colorMostruario">
                                              <a class="2001" onclick="trocaCor(this);" title=" Preto Nacré" style=" background: #0c0c0b;display:block; cursor:pointer;"></a>
                                            </li>
                                            <li class="colorMostruario">
                                              <a class="2968" onclick="trocaCor(this);" title="Vermelho Fogo" style=" background: #ca0a23;display:block; cursor:pointer;"></a>
                                            </li>
                                            <li class="colorMostruario">
                                              <a class="3668" onclick="trocaCor(this);" title="Laranja Ocre" style=" background: #ff6d00;display:block; cursor:pointer;"></a>
                                            </li>
                                            <li class="colorMostruario">
                                              <a class="2969" onclick="trocaCor(this);" title="Prata Étoile" style=" background: #d6d7dc;display:block; cursor:pointer;"></a>
                                            </li>
                                            <li class="colorMostruario">
                                              <a class="3669" onclick="trocaCor(this);" title="Branco Marfim" style=" background: #e5e5e5;display:block; cursor:pointer;"></a>
                                            </li>
                                            <li class="colorMostruario">
                                              <a class="2223" onclick="trocaCor(this);" title="Branco Neige" style=" background: #ffffff;display:block; cursor:pointer;"></a>
                                            </li>
                                          </ul>
                                        </div>
                                         
                                      </div>
                                      <!-- end product details box -->
                                    </div>
                                    <div class="col-md-4">
                                      <!-- start fillform -->
                                      <div class="fillform inte fillform2 clearfix">
                                        <h3><strong>SOLICITE COTAÇÃO</strong></h3>
                                        <form action="#" class="formComponent">
                                          
                                          <input name="nome" type="text" required="true" placeholder="Nome:" class="form-control name">
                                          <input name="email" type="email" required="true" placeholder="Email:" class="form-control email">
                                          <input name="telefone" type="tel" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{5}" required="true" placeholder="Telefone:" class="form-control phone">
                                          <input name="modelo" type="text" readonly="readonly" value="<?= htmlspecialchars($carros['carro_nome']) ?>" class="form-control form-control1 input-car">
                                          <select
                                            name="unidade" id="" class="form-control select" required="true">
                                            <option value="">Loja Mais Próxima</option>
                                            <option value="56315">ILHA DO GOVERNADOR</option>
                                            <option value="56314">DUQUE DE CAXIAS</option>
                                          </select>
                                          <textarea name="mensagem" rows="1" cols="1" placeholder="Mensagem:" class="form-control textarea" style="min-height: 127px;"></textarea>
                                          <input name="submit" type="submit" value="SOLICITAR COTAÇÃO" class="btn-submit">
                                        
                                        </form>
                                    </div>
                                    <!-- end fillform -->
                                  </div>
                                </div>
                                <!-- end row -->
                          </div>
                            <p class="descricao_carro"> Preço: <?= htmlspecialchars($carros['carro_preco']) ?></p> <br>
                            <p class="descricao_carro"> Modelo: <?= htmlspecialchars($carros['carro_modelo']) ?></p> <br>
                            <p><?= htmlspecialchars($carros['carro_descricao']) ?></p>
                          <!-- end row -->
                          </div>
                          <!-- end container -->
                          </div>
                      <?php endforeach ?>
 
                       <!-- ==================================  -->
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

