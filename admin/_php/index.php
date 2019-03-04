<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="../assets/css/custom.css">
<?php 
	require_once("conexao.php");
	$ip  = $_SERVER['REMOTE_ADDR'];  //Pegar Ip do Atacante.
	$URL_ATUAL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  //Pegar URL do Atacante.
	date_default_timezone_set('America/Sao_Paulo');
	$dia_visita = date("d-m-Y");  //Dia da visita
	$horas_visita = date("H:i:s");	//Horario da visita

	//Inserindo Dados
	$inserir_dados_mysql = mysqli_query($conexao, "INSERT INTO ataques (ip,url,dia,hora) VALUES ('$ip', '$URL_ATUAL', '$dia_visita', '$horas_visita') ") or die(mysqli_error($conexao));


?>
</head>
<body>

	<div style="height: 98vh; display:flex; justify-content:center; align-items:center">
		<h1>Detectamos ações não amigaveis e seu ip foi salvo: <?= $ip ?></h1>
	</div>

</body>
</html>