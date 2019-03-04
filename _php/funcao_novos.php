<?php


// PEGA NOME DO CARRO 
$url = $_SERVER["REQUEST_URI"]; // monta o URL
$endereco = str_replace(".php", "", $_SERVER["REQUEST_URI"]); // Pega a o endereço sem o .php
$url = str_replace("/", "",  $endereco  ); // remove a / se houver

$resultado = mysqli_query($conexao, "SELECT * FROM carro WHERE carro_url = '$url' ");



foreach($resultado as $carros){
    $titleHtml =  "".ucfirst($carros['carro_nome'])." na Concessionária e Revenda Autorizada Renault no Rio de Janeiro, RJ | Azzurra Renault" ;
}
