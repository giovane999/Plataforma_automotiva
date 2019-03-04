<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("_php/arquivos_conexao.php");
require_once("_php/header.php");
require_once("_php/menu_lateral.php");
verificaUsuario();

	$resultado_whats = mysqli_query($conexao, "SELECT * FROM whats"); //puxa listagem de visitantes
?>

<div class="col-sm-9 conteudo col-sm-offset-3 col-md-10 flex fora_home col-md-offset-2">

<table class="table listas table-striped table-bordered">
	<h1>Listagem de WhatsApp </h1>
	<tr>
	    <td><b>Nome</b></td>
	    <td><b>Telefone</b></td> 
	    <td><b>Data de Cadastro</b></td>
	    <td><b>Remover</b></td>
	</tr>

<?php foreach($resultado_whats as $whats) : ?>
	<?php  $tel = $whats['whats_numero'];  ?>
	<tr>
	    <td><?= htmlspecialchars($whats['whats_nome']) ?></td>
	    <td><?= htmlspecialchars(mask($tel, '(##) #####-####')) ?></td>
	    <td><?= htmlspecialchars($whats['data']) ?></td>
		<td> <a class="btn btn-danger" href="_php/remove_whats.php?id=<?= $whats['whats_id'] ?>">Remover</a> </td>
	</tr>

<?php endforeach ?>

</table>


</div>


<?php
	require_once("_php/footer.php");
?>
