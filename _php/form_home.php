<?php
require_once("conexao.php");

if( empty($_POST["nome"]) || empty($_POST["email"]) ){  ?>

    <script>alert("Preencha os campos para continuar");</script>
<?php
    header("refresh: 0.1; url= /");
    die();

}else{ //Se input nao tiver vazio cadastra no banco;



 	date_default_timezone_set('America/Sao_Paulo');
	$date = date_create();
	$dateNew = date_format($date, 'd.m.Y');
  $meio_captacao = "Form Home";
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$telefone = $_POST["telefone"];
  $modelo = $_POST["modelo"];
	$loja = $_POST["loja"];
	$mensagem = $_POST["mensagem"];


  $sql = "INSERT INTO leads SET
      data = '$dateNew',
      meio_captacao = '$meio_captacao',
      nome = '$nome',
      email = '$email',
      telefone = '$telefone',
      modelo = '$modelo',
      loja = '$loja',
      mensagem = '$mensagem' ";
	$conexao->query($sql);//Insere no banco  ?>
			<script>
        alert("Mensagem enviada com sucesso");
        window.location.href = "../index";
      </script>
 	<?php
	die();
}
