<?php 
require_once("conexao.php");
require_once("logica_user.php");
verificaUsuario();

if(empty($_POST["nome"]) || empty($_POST["email"]) || empty($_POST["senha"])){  ?>

    <script>alert("Preencha os campos para continuar");</script>
<?php 
    header("refresh: 0.1; url= ../listar_admin.php");
    die();
    
}else{ //Se input nao tiver vazio cadastra no banco;



 	date_default_timezone_set('America/Sao_Paulo');
	$date = date_create();
	$dateNew = date_format($date, 'd.m.Y');
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$senha64 = base64_encode($senha);
	
	$pegaEmail = "SELECT * FROM login WHERE email = '$email'";
 

 	$query = $conexao->query( $pegaEmail ); //executo a query

  	if( $query->num_rows > 0 ) {//se retornar algum resultado ?>
    	<script>alert("Usuario Já existe no Banco de Dados");</script>
	<?php 
	    header("refresh: 0.1; url= ../adiciona_admin.php");
	    die();
  } else {
 
	  	$sql = "INSERT INTO login SET  data = '$dateNew', nome = '$nome', email = '$email', senha = '$senha64' "; 
		$conexao->query($sql);//Insere no banco  ?>
   			<script>alert("Cadastrado com sucesso");</script>
	 	<?php 
	header("refresh: 0.1; url= ../listar_admin.php");
    die();	
	}



}

 
