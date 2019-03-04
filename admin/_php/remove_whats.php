<?php
require_once("conexao.php");
require_once("remove_user_logica.php");
require_once("logica_user.php"); 
verificaUsuario();


$id = $_GET['id'];
removeWhats($conexao, $id);

$_SESSION['success'] = "WhatsApp Removido com sucesso.";?>
	<script>alert("WhatsApp Removido com Sucesso")</script>
<?php
	header("Refresh: 0.1; url= ../whats_recebidos.php");
	die();
?>
