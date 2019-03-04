<?php
  $titleHtml = "Serviços da Concessionária e Revenda Autorizada Renault no Rio de Janeiro, RJ | Azzurra Renault";

  //HEAD
  require_once("_php/head.php");
  require_once("_php/fim_head.php");

  //TRAZ MENUS E HEADER 
  require_once("pages/header.php"); 
  require_once("pages/menu.php");  
?>

    <div class="main-container clearfix main-container-home">
      <!-- start title bar -->
      <div class="title-bar clearfix">
        <!-- start container -->
        <div class="container">
          <!-- start row -->
          <div class="row">
            <div class="col-md-12">
              <h3><strong>RENAULT</strong>SERVIÇOS</h3>
              <!-- start title imgb -->
              <div class="title-imgb clearfix"><img src="https://azzurrarenault.com.br/themes/azzurra-renault/assets/images/banner-servicos.png" alt="Serviços e Assistência Técnica para Veículos Renault no Rio de Janeiro, RJ"></div>
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
            <!-- start services box -->
            <div class="services-box clearfix">
              <!-- start row -->
              <div class="row">
                <div class="col-xs-12 col-md-8">
                  <p>Na Hora Renault, onde você realiza revisões e serviços rápidos, onde qualquer tarefa é realizada em no máximo 60 minutos. E o Renault Minuto,
                    onde são realizados rápidos serviços em seu veículo com uma equipe especializada e preços competitivos.
                  </p>
                  <p>Preencha o formulário para agendar sua revisão ou serviço em seu Renault.</p>
                  <div class="row box-serv">
                    <div class="col-xs-12 col-md-6 box-text">
                      <h1><span class="destaque">RENAULT</span> MINUTO</h1>
                      <p>Serviços rápidos de manutenção do<br> seu Renault com uma equipe<br> especializada e preços competitivos.</p>
                    </div>
                    <div class="col-xs-12 col-md-6 box-img"><img src="https://azzurrarenault.com.br/themes/azzurra-renault/assets/images/img_schedule_lilsting3.png"></div>
                  </div>
                  <div class="row box-serv">
                    <div class="col-xs-12 col-md-6 box-text">
                      <h1><span class="destaque">NA HORA</span> RENAULT</h1>
                      <p>Um box exclusivo para revisões e<br> serviços rápidos, onde qualquer<br> reparo é realizado em no máximo 60<br> minutos.</p>
                    </div>
                    <div class="col-xs-12 col-md-6 box-img"><img src="https://azzurrarenault.com.br/themes/azzurra-renault/assets/images/img_schedule_lilsting2.png"></div>
                  </div>
                </div>
                <div class="col-xs-12 col-md-4">
                  <div class="fillform inte clearfix">
                    <h3 class="two tit"><strong style="padding-left: 20px;">SOLICITE AGORA SEU AGENDAMENTO</strong></h3>
                    <form action="#" class=" formComponent" data-class-sending=""
                      data-class-success="" data-class-error="" data-request="form::onRegisterLead" onsubmit="javascript:return false;" data-request-success="returnForm()"
                      data-lead-express="true" enctype="multipart/form-data"><input type="hidden" id="file" name="file_name" value=""><input type="hidden" name="meio_captacao" value="SITE_SERVICOS"><input name="nome"
                        type="text" required="true" placeholder="Nome:" class="form-control name"><input name="email" type="email" required="true" placeholder="Email:"
                        class="form-control email"><input name="telefone" type="tel" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{5}" required="true" placeholder="Telefone:"
                        class="form-control phone"><select name="unidade" id="" class="form-control select" required="true"><option value="">Loja mais próxima</option><option value="56315">ILHA DO GOVERNADOR</option><option value="56314">DUQUE DE CAXIAS</option><option value="20077">ITAGUAI</option><option value="56238">BARRA DA TIJUCA</option><option value="56452">AGENDAMENTO</option><option value="56451">CENTRAL DE PEÇAS </option></select>
                      <select
                        name="modelo" id="" class="form-control form-control1 input-car">
                        <option value="">Modelo</option>
                        <option name="Kwid">Kwid</option>
                        <option name="Captur">Captur</option>
                        <option name="Duster Oroch ">Duster Oroch </option>
                        <option name="Duster">Duster</option>
                        <option name="Sandero R.S.">Sandero R.S.</option>
                        <option name="Sandero Stepway">Sandero Stepway</option>
                        <option name="Sandero">Sandero</option>
                        <option name="Logan">Logan</option>
                        <option name="Zoe">Zoe</option>
                        <option name="Master Chassi">Master Chassi</option>
                        <option name="Master Furgão">Master Furgão</option>
                        <option name="Master Vitré">Master Vitré</option>
                        <option name="Master Minibus">Master Minibus</option>
                        </select><select name="servico" id="" class="form-control select"><option value="">Escolha o serviço</option><option value="Assistence">Renault Assistence</option><option value="Minuto">Renault Minuto</option><option value="Na hora">Na Hora Renault</option></select>
                        <textarea
                          name="mensagem" rows="1" cols="1" placeholder="Mensagem:" class="form-control textarea" style="min-height: 127px;"></textarea>
                          
                        <input name="submit" type="submit" value="SOLICITAR COTAÇÃO" class="btn-submit"></form>
                  </div>
                </div>
              </div>
              <!-- end row -->
            </div>
            <!-- end services box -->
          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>

 
<?php 
  require_once("pages/modal_whats.php");  
  require_once("_php/footer.php")
?>