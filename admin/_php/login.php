<?php 
require_once("conexao.php");
require_once("confere_user.php");  
require_once("logica_user.php");  

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST['senha']);

if($usuario == null){
	$_SESSION["danger"] = "Usuário ou senha invalida!";
	header("Location: ../");

}else{
	$_SESSION["success"] = "Logado com sucesso!";
	logaUsuario($usuario["nome"]);
	header("Location: ../");
}