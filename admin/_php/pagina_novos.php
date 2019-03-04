<?php
  $resultado = mysqli_query($conexao, "SELECT * FROM carro WHERE carro_nome = {$carro_nome}"); 
 ?>
 
<div class="row">
  <!-- start car listing col2 -->
  <?php foreach($resultado as $carros) : ?>

  <div class="col-md-3 col-sm-6">
    <!-- start car listing col2 -->
    <div class="car-listing-col2">
      <a href="<?= $carros['carro_url'] ?>.php" title="<?= $carros['carro_nome'] ?>">
        <!-- start imgb -->
        <span class="imgb">
          <img src="assets/img_mini/<?= $carros['carro_imagem_mini'] ?>" alt="<?= $carros['carro_nome'] ?> na Consecionaria Tal">
        </span>
        <!-- end imgb -->
        <strong><?= $carros['carro_nome'] ?></strong>
      </a>
    </div>
    <!-- end car listing col2 -->
    </div>

    <?php endforeach ?>

    <!-- end car listing col2 -->
  </div>
 
</div>