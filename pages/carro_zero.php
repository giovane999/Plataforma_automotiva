<?php
  $resultado = mysqli_query($conexao, "SELECT * FROM carro "); 
?>

<div class="row">
  <!-- start car listing col2 -->
  <?php foreach($resultado as $carros) : ?>

  <div class="col-md-3 col-sm-6">
    <!-- start car listing col2 -->
    <div class="car-listing-col2">
      <a href="<?= htmlspecialchars($carros['carro_url']) ?>.php" title="<?= htmlspecialchars($carros['carro_nome']) ?>">
        <!-- start imgb -->
        <span class="imgb">
          <img src="assets/img_mini/<?=htmlspecialchars($carros['carro_imagem_mini']) ?>" alt="<?= htmlspecialchars($carros['carro_nome']) ?> na Consecionaria Tal">
        </span>
        <!-- end imgb -->
        <strong><?= htmlspecialchars($carros['carro_nome']) ?></strong>
      </a>
    </div>
    <!-- end car listing col2 -->
    </div>

    <?php endforeach ?>

    <!-- end car listing col2 -->
  </div>
 
</div>