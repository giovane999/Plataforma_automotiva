<?php  
require_once("conexao.php");
require_once("remove_user_logica.php");
require_once("logica_user.php");
require_once("logica_user.php");
verificaUsuario();


$id = $_GET['id'];
removeAdmin($conexao, $id);

$_SESSION['success'] = "Admin removido com sucesso.";?>
	<script>alert("Admin Removido com Sucesso")</script>
<?php 
	header("Refresh: 0.1; url= ../listar_admin.php");
	die();
?>

