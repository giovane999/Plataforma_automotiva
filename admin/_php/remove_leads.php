<?php
require_once("conexao.php");
require_once("remove_user_logica.php");
require_once("logica_user.php");
require_once("logica_user.php");
verificaUsuario();


$id = $_GET['id'];
removeEmail($conexao, $id);

$_SESSION['success'] = "Lead Removido com sucesso.";?>
	<script>alert("Lead Removido com Sucesso")</script>
<?php
	header("Refresh: 0.1; url= ../email_recebidos.php");
	die();
?>
