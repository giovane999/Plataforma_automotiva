<?php

// Remove Admin
function removeAdmin($conexao, $id) { // Remove Admin
$query = "DELETE FROM login WHERE id_user = {$id}";
	return mysqli_query($conexao, $query);
}

// Remove Visitante
function removeCarro($conexao, $id) { // Remove Visitante
$query = "DELETE FROM carro WHERE carro_id = {$id}";
	return mysqli_query($conexao, $query);
}


// Remove Telefone
function removeLoja($conexao, $id) { // Remove Telefone
$query = "DELETE FROM loja WHERE loja_id = {$id}";
	return mysqli_query($conexao, $query);
}

// Remove Whats
function removeWhats($conexao, $id) { // Remove Whats
$query = "DELETE FROM whats WHERE whats_id = {$id}";
	return mysqli_query($conexao, $query);
}

// Remove EMAIL
function removeEmail($conexao, $id) { // Remove Whats
$query = "DELETE FROM leads WHERE id = {$id}";
	return mysqli_query($conexao, $query);
}
