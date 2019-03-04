<?php error_reporting(E_ALL ^ E_NOTICE);
require_once("conexao.php");
require_once("../cadastro.php");

function insereUser($conexao, $email, $senhaLogin) {

    //$sql = "INSERT INTO login SET  email = '$email', senha = '$senhaLogin' ";
    $sql = "insert into login (email, senha) values ('{$email}', '{$senhaLogin}')";
	
    $resultadoDaInsercao = mysqli_query($conexao, $sql);
    return $resultadoDaInsercao;
}

 
$insere = insereUser($conexao, $email, $senhaLogin);

if($insere == null){
	$_SESSION["nao_cadastrado"] = "Usuario não foi cadastrado!";
	die();

}else{
	$_SESSION["cadastrado"] = "Usuario cadastrado com sucesso!";
}



 