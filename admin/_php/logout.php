<?php 
require_once("logica_user.php"); 
require_once("logica_user.php");
verificaUsuario();

logout();
$_SESSION["success"] = "Deslogado com sucesso";


header("Location: ../");
die();