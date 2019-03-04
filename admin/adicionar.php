<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("_php/arquivos_conexao.php");
require_once("_php/header.php");
require_once("_php/menu_lateral.php");
verificaUsuario(); ?>

<div class="col-sm-9 conteudo col-sm-offset-3 col-md-10 fora_home col-md-offset-2">
 
	<a href="adiciona_carro.php">
		<div class="quadrados">
			<i class="fas fa-car  relative"></i> <h4>Adicionar Carro</h4>
		</div>
	</a>
	
	<a href="adiciona_admin.php">
		<div class="quadrados">
			<i class="icon-equipe relative"></i> <h4>Adicionar Administrador</h4>
		</div>
	</a> 

	
	<a href="adiciona_loja.php">
		<div class="quadrados">
			<i class="icon-pagina-inicial relative"></i> <h4>Adicionar Loja</h4>
		</div>
	</a>  

</div> 

<?php 
	require_once("_php/footer.php");
?>
