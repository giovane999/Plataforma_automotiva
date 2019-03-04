<?php
require_once("conexao.php");

if(empty($_POST["whats_nome"]) || empty($_POST["whats_numero"])){  ?>

    <script>alert("Preencha os campos para continuar");</script>
<?php
    header("refresh: 0.1; url= /");
    die();

}else{ //Se input nao tiver vazio cadastra no banco;



 	date_default_timezone_set('America/Sao_Paulo');
	$date = date_create();
	$dateNew = date_format($date, 'd.m.Y');
	$whats_nome = $_POST["whats_nome"];
	$telefone = $_POST["whats_numero"];


  $sql = "INSERT INTO whats SET  data = '$dateNew', whats_nome = '$whats_nome', whats_numero = '$telefone' ";
	$conexao->query($sql);//Insere no banco  ?>
			<script>
        alert("Mensagem enviada com sucesso");
        window.location.href = "../index";
      </script>
 	<?php
	die();
}
