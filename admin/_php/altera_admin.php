<?php
require_once("conexao.php");
require_once("logica_user.php");
verificaUsuario();

if(empty($_POST["nome"]) || empty($_POST["email"]) || empty($_POST["senha"])){  ?>

    <script>alert("Preencha os campos para continuar!");</script>
<?php
    header("refresh: 0.1; url= ../meu_user.php");
    die();

}else{ //Se input nao estiver vazio cadastra no banco;
	$date = date_create();
	$dateNew = date_format($date, 'd.m.Y');
	$nome = $_POST["nome"];
	$arquivo = $_POST["arquivo"];
	$email = $_POST["email"];
    $senha = $_POST["senha"];
	$senha64 = base64_encode($senha);
	require_once("valida_upload_admin.php");


	  	$sql = "UPDATE login SET  nome = '$nome', email = '$email', senha = '$senha64', foto_admin = '$nome_final'  WHERE nome = '$nome' ";
		$conexao->query($sql);//Insere no banco  ?>
   			<script>alert("Cadastrado com sucesso!");</script>
	 	<?php
	header("refresh: 0.1; url= ../meu_user.php");
    die();
}
