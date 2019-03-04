<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("_php/arquivos_conexao.php");
require_once("_php/header.php");
require_once("_php/menu_lateral.php");
verificaUsuario(); ?>

<div class="col-sm-9 conteudo col-sm-offset-3 col-md-10 fora_home mensagem_admin col-md-offset-2">

	<div class="flex col-md-12">
		<h1>Desenvolvido por Eric Rodrigues</h1>
	</div>

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



<?php 
	require_once("_php/footer.php");
?>
