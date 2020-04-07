<?php use App\Models\UsuariosModel; ?>
<?= view("dashboard/edu/menu"); ?>
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
				<div class="x_title">
					<button type="button" class="btn btn-primary" onclick="window.location.href='/catalogos/usuario'" style="background: #2A3F54"><i class="glyphicon glyphicon-chevron-left"></i> Regresar</button>
					<div class="clearfix"></div>
				</div>
				<div <?=!$created ? "hidden" : "" ?> class="x_title" >
					<h2>Crear usuario</h2>
					<div class="clearfix"></div>
				</div>
				<div <?= $created ? "hidden" : "" ?> class="x_title" >
					<h2>Editar usuario</h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content" style="background: #fff;border: 1px solid #E1E1E1;padding-top: 10px;border-radius: 10px">
					<div class="clearfix"></div>
					<div class="col-md-12">
						<div class="x_content">
							<div class="x_content">
								<div class="row">
									<div class="col-sm-12">
										<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >
											<!-- campos para crear -->
											<div class="item form-group "  <?= !$created ? "hidden" : "" ?> >
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Seleccione la persona<span class="required">*</span>
												</label>
												<div class="input-group mb-3 col-md-6">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1"><i class="	fa fa-user" style="color:#2A3F54;width: 20px;height: 24px;
														"></i></span>
													</div>
													<select class="form-control col-md-11" name="personaId" id="personaId" >
														<?php foreach ($personas as $p): ?>
															<option value="<?= $p->personaId ?>"><?= $p->nombres ,' - ', $p->apellidos ?></option>
														<?php endforeach?>
													</select> 
												</div>
											</div>
											<div class="item form-group col-md-12" <?= !$created ? "hidden" : "" ?> >
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Seleccione el rol<span class="required">*</span>
												</label>
												<div class="input-group mb-3 col-md-6">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1"><i class="fa fa-users" style="color:#2A3F54;width: 20px;height: 24px;
														"></i></span>
													</div>
													<select class="form-control" name="rolId" id="rolId" >
														<?php foreach ($rol as $r): ?>
															<option value="<?= $r->rolId ?>"><?= $r->nombreRol?></option>
														<?php endforeach?>
													</select> 
												</div>
											</div>
											<!-- 	campos para editar -->
											<div class="item form-group col-md-12" <?= $created ? "hidden" : "" ?>>
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Seleccione la persona<span class="required">*</span>
												</label>
												<div class="input-group mb-3 col-md-6">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1"><i class="	fa fa-asl-interpretingfa fa-user" style="color:#2A3F54;width: 20px;height: 24px;
														"></i></span>
													</div>
													<select class="form-control col-md-11" name="personaId_editar" id="personaId_editar">
														<?php foreach ($personas as $p): ?>
															<option <?= $user->personaId !== $p->personaId ?: "selected"?> value="<?= $p->personaId ?>"><?= $p->nombres, ' - ',$p->apellidos ?> </option>
														<?php endforeach?>
													</select> 
												</div>
											</div>
											<div class="item form-group col-md-12" <?= $created ? "hidden" : "" ?>>
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Seleccione el rol<span class="required">*</span>
												</label>
												<div class="input-group mb-3 col-md-6">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1"><i class="	fa fa-users" style="color:#2A3F54;width: 20px;height: 24px;
														"></i></span>
													</div>
													<select class="form-control"  name="rolId_editar" id="rolId_editar">
														<?php foreach ($rol as $r): ?>
															<option <?= $user->rolId !== $r->rolId ?: "selected"?> value="<?= $r->rolId ?>"><?= $r->nombreRol ?> </option>
														<?php endforeach?>
													</select>
												</div>
											</div>
											<div class="item form-group col-md-12">
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Usuario <span class="required">*</span>
												</label>
												<div class="input-group mb-3 col-md-6">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1"><i class="	fa fa-user" style="color:#2A3F54;width: 20px;height: 24px;
														"></i></span>
													</div>
													<input class="form-control" type="text" id="usuario" name="usuario" value="<?=old('usuario', $user->usuario)?>"/>
												</div>
											</div>
											<div class="item form-group col-md-12">
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Contraseña<span class="required">*</span>
												</label>
												<div class="input-group mb-3 col-md-6">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">***</span>
													</div>
													<input class="form-control" type="password" id="clave" name="clave" value=""/>
												</div>
											</div>
											<div class="item form-group col-md-12" <?= $created ? "hidden" : "" ?>>
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Seleccione el estado<span class="required">*</span>
												</label>
												<div class="input-group mb-3 col-md-6">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1"><i class="fa fa-toggle-on" style="color:#2A3F54;width: 20px;height: 24px;
														"></i></span>
													</div>
													<select class="form-control"  name="estado_editar" id="estado_editar">
														<option value="<?=old('estado', $user->estado)?>"><?=old('estado', $user->estado)?></option>
														<option value="RETIRADO">RETIRADO</option>
														<option value="ACTIVO">ACTIVO</option>
														<option value="EN PROCESO">EN PROCESO</option>
													</select>
												</div>
											</div>
											<button class="btn btn-success" type="submit" style="width: 48%;margin-left: 26%"><i class="fa fa-save"></i> <?=$textButton?></button>
										</form>
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
	$(document).ready(function(){
		$('#personaId').select2();
	});
	$(document).ready(function(){
		$('#personaId_editar').select2();
	});
</script>




