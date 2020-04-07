<?php use App\Models\UsuariosModel; ?>
</div>
</div>
<div class="top_nav">
	<?= view("dashboard/edu/navbar"); ?>
	<?= view("dashboard/partials/_session"); ?>
</div>
<div class="right_col" role="main" >
	<div class="clearfix"></div>
	<div class="row" >
		<div class="col-md-12 col-sm-12 " >
			<div class="x_panel" style="border: 1px solid #e1e1e1;" >
				<div  class="x_title" >
					<h2>Seleccione un ciclo</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content" style="background: #fff;border: 1px solid #E1E1E1;padding-top: 10px;border-radius: 10px">
					<div class="clearfix"></div>
					<div class="col-md-12">
						<div class="x_content">
							<div class="x_content">
								<div class="row">
									<div class="col-md-12">
										<div  class="form-group">
											<select class="form-control" name="cicloId" id="cicloId">
												<?php foreach ($selectCiclo as $c): ?>
													<option value="<?= $c->ciclo ?>"><?= $c->ciclo ,' - ', $c->anio ?></option>
												<?php endforeach?>
											</select> 
												<button type="button" class="btn btn-primary col-md-3 float-right" onclick="procesarCiclo()" id="seleccionarCiclo" style="margin-top: 5%;background:#2A3F54">SELECCIONAR Y ENTRAR</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="/js/jquery-3.4.1.slim.min.js"></script>
<script type="text/javascript">
	function procesarCiclo(){
		var valorCiclo = document.getElementById('cicloId').value;
		if (valorCiclo=='1') {
			window.location="/principal";
		}else{

		}
	}
	$(document).ready(function(){
		$('#cicloId').select2();
	});

</script>

