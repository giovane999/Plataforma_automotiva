<?php 
require_once("conexao.php");
require_once("remove_user_logica.php");
require_once("logica_user.php");
verificaUsuario();

$id = $_GET['id'];
removeCarro($conexao, $id);

$_SESSION['success'] = "Morador removido com sucesso.";?>
	<script>alert("Carro Removido com Sucesso")</script>
<?php 
	header("Refresh: 0.1; url= ../listar_carros.php");
	die();
?>

