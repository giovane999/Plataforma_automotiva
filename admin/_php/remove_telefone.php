<?php  
require_once("conexao.php");
require_once("remove_user_logica.php");
require_once("logica_user.php");
require_once("logica_user.php");
verificaUsuario();


$id = $_GET['id'];
removeTelefone($conexao, $id);

$_SESSION['success'] = "Telefone removido com sucesso.";?>
	<script>alert("Telefone Removido com Sucesso")</script>
<?php 
	header("Refresh: 0.1; url= ../listar_telefone.php");
	die();
?>

