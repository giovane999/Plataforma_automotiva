<!-- Novo Modal Whats -->
<div class="modal fade" id="whatsappModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="z-index:9999; display:block;" role="document">
		<div class="modal-content" style="padding: 5px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Contate nosso agente via Whatsapp.</h4>
			</div>

			<div class="modal-body">
				<div class="fillform clearfix form-content"> 
					<form action="_php/whats_form.php" method="POST">
						<div class="form-group">
							<input name="whats_nome" type="text" required="true" placeholder="Nome:" class="form-control name user-error"aria-invalid="true">
						</div>
						
						<div class="form-group ">    
							<input name="whats_numero" type="tel" required="true" placeholder="Telefone:" class="form-control fone phone telefone">
						</div>
						
						<div class="form-group ">   
							<input name="submit" type="submit" value="ENVIAR" class="btn-submit btn-fill-little-radius"></form>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Fim do Novo Modal Whats -->