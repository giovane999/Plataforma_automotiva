<?php  
require_once("conexao.php");
require_once("remove_user_logica.php");
require_once("logica_user.php");
require_once("logica_user.php");
verificaUsuario();


$id = $_GET['id'];
removeLoja($conexao, $id);

$_SESSION['success'] = "Loja Removida com sucesso.";?>
	<script>alert("Loja Removida com Sucesso")</script>
<?php 
	header("Refresh: 0.1; url= ../listar_loja.php");
	die();
?>

