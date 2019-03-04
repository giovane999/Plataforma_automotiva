<!-- start fillform -->
  <div class="fillform clearfix">
    <h3> solicitar cotação</h3>
      <form action="_php/form_home.php" method="POST" class="formComponent" data-class-sending="" >
          <input name="nome" type="text" required="true" placeholder="Nome:" class="form-control name">
          <input name="email" type="email" required="true" placeholder="Email:" class="form-control email">
          <input name="telefone" type="tel" required="true" placeholder="Telefone:" class="form-control phone">

          <select name="modelo" id="" class="form-control form-control1 input-car">
              <option value="">Modelo Desejado</option>
              <option name="Kwid">Kwid</option>
              <option name="Captur">Captur</option>
          </select>

          <select name="unidade" id="" class="form-control select" required="true">
              <option name="">Loja Mais Próxima</option>
              <option name="ILHA_DO_GOVERNADOR">ILHA DO GOVERNADOR</option>
              <option name="DUQUE_DE_CAXIAS">DUQUE DE CAXIAS</option>
              <option name="ITAGUAI">ITAGUAI</option>
          </select>

          <textarea name="mensagem" rows="1" cols="1" placeholder="Mensagem:" class="form-control textarea"></textarea>

          <input name="submit" type="submit" value="SOLICITAR COTAÇÃO" class="btn-submit">
      </form>
  </div>
  <!-- end fillform -->
