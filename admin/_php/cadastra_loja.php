<?php 
require_once("conexao.php");
require_once("logica_user.php");
verificaUsuario();

if(empty($_POST["loja_nome"]) || empty($_POST["loja_telefone"])){  ?>

    <script>alert("Preencha os campos para continuar");</script>
<?php 
    header("refresh: 0.1; url= ../listar_loja.php");
    die();
    
}else{ //Se input nao tiver vazio cadastra no banco;



 	date_default_timezone_set('America/Sao_Paulo');
	$date = date_create();
	$dateNew = date_format($date, 'd.m.Y');
	$nome = $_POST["loja_nome"];
	$loja_endereco = $_POST["loja_endereco"];
	$loja_telefone = $_POST["loja_telefone"];



	$loja_telefone = str_replace('-', '', $loja_telefone);
	$loja_telefone = preg_replace('/[^A-Za-z0-9-]/', '', $loja_telefone); 
	$pegaEmail = "SELECT * FROM loja WHERE loja_telefone = '$loja_telefone'";
 

 	$query = $conexao->query( $pegaEmail ); //executo a query

  	if( $query->num_rows > 0 ) {//se retornar algum resultado ?>
    	<script>alert("Loja Já existe no Banco de Dados");</script>
	<?php 
	    header("refresh: 0.1; url= ../adiciona_loja.php");
	    die();
  } else {
 
	  	$sql = "INSERT INTO loja SET  data = '$dateNew', loja_nome = '$nome', loja_telefone = '$loja_telefone', loja_endereco = '$loja_endereco' "; 
		$conexao->query($sql);//Insere no banco  ?>
   			<script>alert("Cadastrado com sucesso");</script>
	 	<?php 
	header("refresh: 0.1; url= ../listar_loja.php");
    die();	
	}



}

 
// htmlspecialchars(preg_replace('/[^A-Za-z0-9-]/', '', $tel)) // maskara telefone    