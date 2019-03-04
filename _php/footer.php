<div class="container">
    <h1 class="h1-seo"> </h1>
</div>
<footer class="footer clearfix">
	<!-- start footer top -->
    <div class="footer-top clearfix">
    	<!-- start container -->
    
        <div class="container" style="box-shadow: 50em 0 0 0 black,-50em 0 0 0 white;">
        	<!-- start row -->
            <div class="row">
                
            	<div class="col-md-5">
                	<!-- start footer links -->
                    <div class="footer-links clearfix">
                    	<!-- start links col -->
                        <div class="links-col clearfix">
                        	<h5>SOBRE</h5>
                            <div class="links-col-in">
                            	<ul>
                                	<li><a href="quem-somos" title="Quem Somos">Quem Somos</a></li>
                                    <li><a href="servicos" title="Nossos Serviços">Nossos Serviços</a></li> 
                                    <li><a href="#" title="Fale Conosco">Fale Conosco</a></li>  
                                </ul>
                                <!-- <h5>SERVIÇOS</h5>
                                <ul>
                                	<li><a href="#" title="Assistência Técnica">Assistência Técnica</a></li>
                                    <li><a href="#" title="Peças e Acessórios">Peças e Acessórios</a></li>
                                    <li><a href="#" title="Venda Direta">Venda Direta</a></li>
                                    <li><a href="#" title="Seminovos">Seminovos</a></li> 
                                </ul> -->
                            </div>
                        </div>
                        <!-- end links col -->
                        <!-- start links col2 -->
                        <div class="links-col2 carNames clearfix">
                        	<h5>novos</h5>
                            <ul class="col-ul">
                            <?php 
                            $resultado_carro = mysqli_query($conexao, "SELECT * FROM carro "); 
                            foreach($resultado_carro as $carro):  ?>
                            	<li><a href="<?= htmlspecialchars($carro['carro_url']) ?>.php" title="carro name"><?= htmlspecialchars($carro['carro_nome']) ?></a></li>
                            <?php endforeach ?>
                            </ul>
                        </div>
                        <!-- end links col2 --> 
                    </div>
                    <!-- end footer links -->
                </div>
                <div class="col-md-7 store-footer">
                	<!-- start contact details -->
                    <div class="contact-deatils clearfix">
                    	
                        <h5>onde encontrar</h5>
                        <div class="row">
                        <!--                          
                            <div class="col-md-6 lojas-footer">
                                <h6>ILHA DO GOVERNADOR</h6>
                                <p>Est. do Galeão, 1108</p>
                                <strong class="phone buscaTelefone">(51) 996020-6763</strong>
                            </div>
                        -->
                            <?php foreach($resultado_loja as $loja):
                                $tel = htmlspecialchars($telefone['loja_telefone']); 
                            ?>
                            <div class="col-md-6 lojas-footer">
                                <h6><?= htmlspecialchars($loja['loja_nome']) ?></h6>
                                <p><?= htmlspecialchars($loja['loja_endereco']) ?></p>
                                <strong class="phone buscaTelefone"><?= htmlspecialchars(mask($tel, '(##) #####-####')) ?></strong>
                            </div>
                            <?php endforeach; ?>
                            <!-- start social -->
                        <div class="social pull-left clearfix">
                        		<div class="fora_icones_contato col-md-12">

									<a target="_blank" class="icones_redes" href="https://www.linkedin.com/in/giovane999/">
										<div class="icones_redes">
											<i class="fab fa-linkedin-in"></i>
										</div>
									</a>

									<a target="_blank" class="icones_redes" href="https://github.com/giovane999">
										<div class="icones_redes">
											<i class="fab fa-github"></i>
										</div>
									</a>

									<a target="_blank" class="icones_redes" href="mailto:ericrodrigo999@gmail.com">
										<div class="icones_redes">
											<i class="far fa-envelope"></i>
										</div>
									</a>

									<a target="_blank" class="icones_redes" href="https://api.whatsapp.com/send?phone=5551996206763&text=Olá, Estive olhando seu dashboard e gostaria de fazer algumas perguntas.">
										<div class="icones_redes">
											<i class="fab fa-whatsapp"></i>
										</div>
									</a>

								</div> 
                        </div>
                        <!-- end social -->
                        
                        </div>

                        
                    </div>
                    <!-- end contact details -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="footer-bottom clearfix">
    	<!-- start container -->
	    
        <div class="container">
        	<!-- start row --> 
            <div class="row">
            	<div class="col-md-12">
                	<cite class="copyright">Azzurra Renault &copy; Copyright 2018. Todos os direitos reservados.</cite>
                    <cite class="weblinks">Desenvolvido por <a href="https://linkedin.com/in/giovane999/" title="#">Eric Rodrigues</a></cite>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end footer bottom -->
</footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script> 
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/custom.js"></script>
	</body>
</html>