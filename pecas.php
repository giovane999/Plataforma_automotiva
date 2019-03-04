<?php
  $titleHtml = "Peças na Concessionária e Revenda Autorizada Renault no Rio de Janeiro, RJ | Azzurra Renault";

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
          <h3><strong>RENAULT</strong>PEÇAS E ACESSÓRIOS</h3>
          <!-- start title imgb -->
          <div class="title-imgb clearfix"><img src="https://azzurrarenault.com.br/themes/azzurra-renault/assets/images/banner-pecas.png" alt="Peças e Acessorios para Veículos Renault no Rio de Janeiro, RJ"></div>
          <!-- end title imgb -->
        </div>
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </div>


<div class="container">
  <!-- start row -->
  <div class="row">
    <div class="col-md-12">
      <!-- start services box -->
      <div class="services-box clearfix">
        <!-- start row -->
        <div class="row">
          <div class="col-xs-12 col-md-4 col-md-push-8">
                        <!-- start fillform -->
            <div class="fillform inte fturn clearfix">
              <h3 class="two tit"><strong>SOLICITE COTAÇÃO</strong></h3>
              <form action="#" class=" formComponent" data-class-sending="" data-class-success="" data-class-error="" data-request="form::onRegisterLead" onsubmit="javascript:return false;"
                data-request-success="returnForm()" data-lead-express="true" enctype="multipart/form-data"><input type="hidden" id="file" name="file_name" value=""><input type="hidden" name="meio_captacao" value="SITE_FORM_PECAS"><input name="nome" type="text"
                  required="true" placeholder="Nome:" class="form-control name"><input name="email" type="email" required="true" placeholder="Email:" class="form-control email">
                <input name="telefone" type="tel" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{5}" required="true" placeholder="Telefone:" class="form-control phone">
                <select
                  name="unidade" id="" class="form-control select" required="true">
                  <option value="">Loja mais próxima</option>
                  <option value="56315">ILHA DO GOVERNADOR</option>
                  <option value="56314">DUQUE DE CAXIAS</option>
                  <option value="20077">ITAGUAI</option>
                  <option value="56238">BARRA DA TIJUCA</option>
                  <option value="56452">AGENDAMENTO</option>
                  <option value="56451">CENTRAL DE PEÇAS </option>
                  </select> <textarea name="mensagem" rows="1" cols="1" placeholder="Mensagem:" class="form-control textarea" style="min-height: 127px;"></textarea> <input name="submit"
                    type="submit" value="SOLICITAR COTAÇÃO" class="btn-submit"></form>
            </div>
            <!-- end fillform -->
          </div>
          <div class="col-xs-12 col-md-8 col-md-pull-4">
            <!-- start row -->
            <div class="row">
              <div class="col-md-12">
                <div class="container">
                  <div class="inner">
                    <div class="inner-content">
                      <div class="down">
                        <div class="row">
                          <div class="col-xs-12 col-md-8">
                            <div class="serv ajuste-row-pecas">
                              <div class="itembox1"><strong class="sub-titulo-pecas">Acessórios</strong>
                                <p class="item box1">A Azzurra Renault disponibiliza toda gama de acessórios genuínos Renault, desenvolvidos para deixar seu carro ainda mais
                                  bonito, confortável e personalizado.</p>
                              </div>
                              <div class="itembox2"><strong class="sub-titulo-pecas">Kit Peças</strong>
                                <p>Na Azzurra Renault você encontra as peças originais Renault que são projetadas sob medida para cada modelo de automóvel.
                                  Aqui você realiza serviços de manutenção e tem garantia nas peças compradas e instaladas. Consulte nossas condições de
                                  pagamento.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end row -->
          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end services box -->
    </div>
  </div>
  <!-- end row -->
</div>



<?php 
  require_once("pages/modal_whats.php");  
  require_once("_php/footer.php")
?>