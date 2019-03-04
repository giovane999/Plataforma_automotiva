<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("_php/arquivos_conexao.php");
require_once("_php/header.php");
require_once("_php/menu_lateral.php");
verificaUsuario();
$user = usuarioLogado();

    $query = "select * from login where nome =  '$user'";
    $resultado = mysqli_query($conexao, $query);
?>

<div class="col-sm-9 conteudo col-sm-offset-3 col-md-10 flex fora_home col-md-offset-2">



<?php foreach($resultado as $admin) : ?>

    <div class="login2 col-md-4" style="width: auto;">
        <div class="login_wrapper">
            <div class="login_limiter_cadastro">
            <h1>Listagem de Administradores</h1>

                <form action="_php/altera_admin.php" enctype="multipart/form-data" method="POST">

                    <div class="login_group">
                        <input type="text" placeHolder="Nome" class="login_input" name="nome" value="<?= htmlspecialchars($admin['nome']) ?>"  required />
                    </div>

                    <div class="login_group">
                        <input type="email" placeHolder="E-mail" class="login_input" name="email" value="<?= htmlspecialchars($admin['email']) ?>" required />
                    </div>

                    <div class="login_group">
                        <input type="password" placeHolder="Nova Senha" class="login_input" name="senha" required />
                    </div>

                    <div class="login_group">
                        <input name="arquivo" type="file" class="login_input" placeHolder="Foto"  value="<?= htmlspecialchars($admin['email']) ?>" required  />
				    </div>

                    <div class="login_group">
                        <button type="submit" class="login_submit">Cadastrar</button>
                    </div>

                </form>
            </div>
        </div>


    </div>
    <?php endforeach ?>
    <div class="col-md-6" style="display: flex;justify-content: center;flex-direction:column;align-items: center;">
    Avatar
        <div class="avatar">
            <img src="assets/img_admin/<?= $admin['foto_admin'] ?>" alt="" style="max-width:90%" >
        </div>
    </div>
</div>


<?php
	require_once("_php/footer.php");
?>
