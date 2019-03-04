<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("_php/arquivos_conexao.php");
require_once("_php/header.php");
require_once("_php/menu_lateral.php");
verificaUsuario();

	$resultado_leads = mysqli_query($conexao, "SELECT * FROM leads"); //puxa listagem de visitantes
?>

<div class="col-sm-9 conteudo col-sm-offset-3 col-md-10 flex fora_home col-md-offset-2">

<table class="table listas table-striped table-bordered">
	<h1>Leads Recebidos</h1>
	<tr>
	    <td><b>Formulário</b></td>
	    <td><b>Nome</b></td>
	    <td><b>E-mail</b></td>
	    <td><b>Telefone</b></td>
	    <td><b>Modelo</b></td>
	    <td><b>Loja</b></td>
	    <td><b>Mensagem</b></td>
	    <td><b>Data</b></td>
	    <td><b>Remover</b></td>
	</tr>

<?php foreach($resultado_leads as $leads) : ?>
	<?php  $tel = $leads['telefone'];  ?>
	<tr>
	    <td><?= htmlspecialchars($leads['meio_captacao']) ?></td>
	    <td><?= htmlspecialchars($leads['nome']) ?></td>
			<td><?= htmlspecialchars($leads['email']) ?></td>
	    <td><?= htmlspecialchars(mask($tel, '(##) #####-####')) ?></td>
	    <td><?= htmlspecialchars($leads['modelo']) ?></td>
	    <td><?= htmlspecialchars($leads['loja']) ?></td>
	    <td><?= htmlspecialchars($leads['mensagem']) ?></td>
	    <td><?= htmlspecialchars($leads['data']) ?></td>
		<td> <a class="btn btn-danger" href="_php/remove_leads.php?id=<?= $leads['id'] ?>">Remover</a> </td>
	</tr>

<?php endforeach ?>

</table>


</div>


<?php
	require_once("_php/footer.php");
?>
