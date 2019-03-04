<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("_php/arquivos_conexao.php");
require_once("_php/header.php");
require_once("_php/menu_lateral.php");

verificaUsuario(); 

$id = $_GET['id'];
$alteraCarro = mysqli_query($conexao, "SELECT * FROM carro WHERE carro_id = {$id} "); //puxa listagem de carros 

?>     


<div class="col-sm-9 conteudo col-sm-offset-3 col-md-10 fora_home col-md-offset-2">
<div class="login2  " style="width: 50%;">
    <div class="login_wrapper">
        <div class="login_limiter_cadastro">
    <h1>Cadastrar Carro</h1>
        <?php    foreach($alteraCarro as $carro) : ?>
            <form action="_php/alterar_carro.php"  method="POST">

                <div class="login_group">
                    <input type="text" placeHolder="id" class="login_input hidden" name="carro_id" value="<?=$carro['carro_id']?>" required />
                </div>

                <div class="login_group">
                    <input type="text" placeHolder="Nome" class="login_input" name="carro_nome" value="<?=$carro['carro_nome']?>" required />
                </div>

                <div class="login_group">
                    <input type="text" id="phonenumber"   placeHolder="Preço" class="login_input" name="carro_preco" value="<?=$carro['carro_preco']?>" required />
                </div> 

                <div class="login_group">
                    <input type="text" placeHolder="Modelo" class="login_input" name="carro_modelo" value="<?=$carro['carro_modelo']?>" required />
                </div>
 
                <div class="login_group">
                    <textarea class="login_input" name="carro_descricao"><?=$carro['carro_descricao']?></textarea>
                </div>
 
                <div class="login_group">
                    <button type="submit" class="login_submit">Alterar</button>
                </div>
             
            </form>
            <?php endforeach ?>
            
        </div>
    </div>
     
</div>
<div class="col-md-6" style="display: flex;justify-content: center;flex-direction:column;align-items: center;">
    Avatar
        <div class="avatar">
            <img src="../../assets/img_mini/<?= $carro['carro_imagem_mini'] ?>" alt="" style="max-width:100%" >
        </div>
    </div>
</div>



<?php 
    require_once("_php/footer.php");
?>
