<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("_php/arquivos_conexao.php");
require_once("_php/header.php");
require_once("_php/menu_lateral.php");
verificaUsuario(); 

	$resultado = mysqli_query($conexao, "SELECT * FROM carro"); //puxa listagem de carros 
?>

<div class="col-sm-9 conteudo col-sm-offset-3 col-md-10 flex conteudo fora_home col-md-offset-2">
	

<table class="table listas table-striped table-bordered">
	<h1>Listagem de Carros</h1>
	<tr> 
	    <td><b>Miniatura</b></td>
	    <td><b>Nome</b></td>
	    <td><b>Preço</b></td> 
	    <td><b>Modelo do Carro</b></td>
	    <td><b>Remover</b></td>
	    <td><b>Alterar</b></td>
	</tr>

<?php foreach($resultado as $carro) : ?> 
	<tr>
	    <td><img src="../assets/img_mini/<?=$carro['carro_imagem_mini']?>" alt=""></td> 
	    <td><?= htmlspecialchars($carro['carro_nome']) ?></td>
	    <td><?= htmlspecialchars($carro['carro_preco']) ?></td> 
	    <td><?= htmlspecialchars($carro['carro_modelo']) ?></td>
		<td> <a class="btn btn-primary" href="altera_carro.php?id=<?= $carro['carro_id'] ?>">Alterar</a> </td>
		<td> <a class="btn btn-danger" href="_php/remove_carro.php?id=<?= $carro['carro_id'] ?>">Remover</a> </td>
	</tr>

<?php endforeach ?>

</table>
 

</div>
<!-- ======================================================  -->
 
<!-- ======================================================  -->


<?php 
	require_once("_php/footer.php");
?>
