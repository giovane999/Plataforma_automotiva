<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("_php/arquivos_conexao.php");
require_once("_php/header.php");
require_once("_php/menu_lateral.php");
verificaUsuario(); 
?>


<div class="col-sm-9 col-sm-offset-3 col-md-10 fora_home col-md-offset-2">
<div class="login2">
	<div class="login_wrapper">
  		<div class="login_limiter_cadastro">
	<h1>Cadastrar Telefone</h1>
 
		    <form action="_php/cadastra_telefone.php" method="POST">

				<div class="login_group">
					<input type="text" placeHolder="Nome Loja"  class="login_input" name="telefone_nome" required />
				</div> 

				<div class="login_group">
					<input type="tel" placeHolder="Número" class="login_input" name="telefone_numero" required />
				</div>
  
				<div class="login_group">
					<button type="submit" class="login_submit">Cadastrar</button>
				</div>
		     
		    </form>
		</div>
	</div>
	 
</div>
</div>



<?php 
	require_once("_php/footer.php");
?>
