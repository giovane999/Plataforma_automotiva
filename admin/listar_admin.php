<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("_php/arquivos_conexao.php");
require_once("_php/header.php");
require_once("_php/menu_lateral.php");
verificaUsuario(); 

	$resultado = mysqli_query($conexao, "SELECT * FROM login"); //puxa listagem de visitantes 
?>

<div class="col-sm-9 conteudo col-sm-offset-3 col-md-10 flex fora_home col-md-offset-2">

<table class="table listas table-striped table-bordered">
	<h1>Listagem de Administradores</h1>
	<tr> 
	    <td><b>Nome</b></td>
	    <td><b>E-mail</b></td> 
	    <td><b>Data de Cadastro</b></td>
	    <td><b>Remover</b></td>
	</tr>

<?php foreach($resultado as $admin) : ?>
	<?php  $tel = $admin['telefone'];  ?>
	<tr>
	    <td><?= htmlspecialchars($admin['nome']) ?></td>
	    <td><?= htmlspecialchars($admin['email']) ?></td> 
	    <td><?= htmlspecialchars($admin['data']) ?></td>
		<td> <a class="btn btn-danger" href="_php/remove_admin.php?id=<?= $admin['id_user'] ?>">Remover</a> </td>
	</tr>

<?php endforeach ?>

</table>
 

</div>


<?php 
	require_once("_php/footer.php");
?>
