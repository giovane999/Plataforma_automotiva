<?php 

function buscaUsuario($conexao,$email,$senha){
	$senha64 = base64_encode($senha);
	$email = mysqli_real_escape_string($conexao, $email);
	$query = "select * from login where email='{$email}' and senha='{$senha64}'";
	$resultado = mysqli_query($conexao,$query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}