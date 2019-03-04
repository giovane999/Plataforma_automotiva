<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("_php/arquivos_conexao.php");
require_once("_php/header.php");
require_once("_php/menu_lateral.php");
verificaUsuario(); ?>


<div class="col-sm-9 conteudo col-sm-offset-3 col-md-10 fora_home col-md-offset-2">
<div class="login2">
	<div class="login_wrapper">
  		<div class="login_limiter_cadastro">
	<h1>Cadastrar Carro</h1>
 
		    <form action="_php/cadastra_carro.php" enctype="multipart/form-data" method="POST">

				<div class="login_group">
					<input type="text" placeHolder="Nome" class="login_input" name="carro_nome" required />
				</div>

				<div class="login_group">
					<input type="text" id="phonenumber"   placeHolder="Preço" class="login_input" name="carro_preco" required />
				</div> 

				<div class="login_group">
					<input type="text" placeHolder="Modelo" class="login_input" name="carro_modelo" required />
				</div>

				<div class="login_group">
					<input type="text" placeHolder="Descrição" class="login_input" name="carro_descricao" required />
				</div>
 
				<div class="login_group">
					<input name="arquivo" type="file" class="login_input" placeHolder="Foto" required  />
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
