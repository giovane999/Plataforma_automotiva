<?php require_once("conexao.php");
require_once("banco_usuario.php"); 
require_once("logica_user.php"); 

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST['senha']);

if($usuario == null){
	$_SESSION["danger"] = "Usuário ou senha invalida!";
	header("Location: ../admin/");
	die();

}else{
	$_SESSION["success"] = "Logado com sucesso!";
	logaUsuario($usuario["email"]);
	header("Location: ../admin/");
}

 