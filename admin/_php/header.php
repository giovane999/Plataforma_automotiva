
    <header class="header navbar navbar-default navbar-fixed-top">
        <div class="pull-left">
            <!-- <a href="#" class="logo pull-left">
                <img src="" class="img-responsive">
            </a> -->
 
        </div> 

        <div class="pull-right">
            <div class="dropdown-header dropdown">
                <span class="dropdown-toggle show" data-toggle="dropdown">
                    <?php
                        $user = usuarioLogado(); 
                     	$resultado_admin = mysqli_query($conexao, "SELECT * FROM login WHERE nome = '$user'");
                        foreach($resultado_admin as $admin): 
                    ?>
                        <img src="assets/img_admin/<?= $admin['foto_admin'] ?>" height="32" width="32">
                    <?php endforeach ?>
                    <span class="caret"></span>
                </span>
                <ul class="dropdown-menu">
                    <li><a ><?= usuarioLogado(); ?></a></li>
                    <li><a href="meu_user.php">Minha Conta</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="_php/logout.php">Sair</a></li>
                </ul>
            </div>
        </div>
    </header>


