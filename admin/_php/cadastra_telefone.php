<?php 
require_once("conexao.php");
require_once("logica_user.php");
verificaUsuario();

if(empty($_POST["telefone_nome"]) || empty($_POST["telefone_numero"])){  ?>

    <script>alert("Preencha os campos para continuar");</script>
<?php 
    header("refresh: 0.1; url= ../listar_telefone.php");
    die();
    
}else{ //Se input nao tiver vazio cadastra no banco;



 	date_default_timezone_set('America/Sao_Paulo');
	$date = date_create();
	$dateNew = date_format($date, 'd.m.Y');
	$nome = $_POST["telefone_nome"];
	$telefone_numero = $_POST["telefone_numero"];



	$telefone_numero = str_replace('-', '', $telefone_numero);
	$telefone_numero = preg_replace('/[^A-Za-z0-9-]/', '', $telefone_numero); 
	$pegaEmail = "SELECT * FROM telefones WHERE telefone_numero = '$telefone_numero'";
 

 	$query = $conexao->query( $pegaEmail ); //executo a query

  	if( $query->num_rows > 0 ) {//se retornar algum resultado ?>
    	<script>alert("Número Já existe no Banco de Dados");</script>
	<?php 
	    header("refresh: 0.1; url= ../adiciona_telefone.php");
	    die();
  } else {
 
	  	$sql = "INSERT INTO telefones SET  data = '$dateNew', telefone_nome = '$nome', telefone_numero = '$telefone_numero' "; 
		$conexao->query($sql);//Insere no banco  ?>
   			<script>alert("Cadastrado com sucesso");</script>
	 	<?php 
	header("refresh: 0.1; url= ../listar_telefone.php");
    die();	
	}



}

 
// htmlspecialchars(preg_replace('/[^A-Za-z0-9-]/', '', $tel)) // maskara telefone    