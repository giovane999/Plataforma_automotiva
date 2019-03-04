<?php 
require_once("conexao.php");
require_once("logica_user.php");
verificaUsuario();

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $modelo) {
    $query = "UPDATE carro SET carro_nome = '{$nome}', carro_preco = '{$preco}', carro_descricao = '{$descricao}', 
    carro_modelo= '{$modelo}' WHERE carro_id = {$id} ";
    return mysqli_query($conexao, $query);
}

$id = $_POST['carro_id'];
$nome = $_POST['carro_nome'];
$preco = $_POST['carro_preco'];
$modelo = $_POST['carro_modelo'];
$descricao = $_POST['carro_descricao']; 
  
alteraProduto($conexao, $id, $nome, $preco, $descricao, $modelo);
  ?>
    <script>alert("O produto <?= $nome ?>modelo <?= $modelo ?> foi alterado.");</script>
<?php  
    header("Refresh: 0.1; url=../listar_carros.php");
    die();
    $msg = mysqli_error($conexao);
?>
    <script>alert("O produto <?= $nome ?>não foi alterado: <?= $msg?>");</script>
<?php
    header("Refresh: 0.1; url=../listar_carros.php");
    die();
 ?> 