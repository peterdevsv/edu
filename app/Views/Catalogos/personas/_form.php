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
					<button type="button" class="btn btn-primary" onclick="window.location.href='/catalogos/personas'" style="background: #2A3F54"><i class="glyphicon glyphicon-chevron-left"></i> Regresar</button>
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
											<!-- 	campos para editar -->

											<div class="item form-group col-md-6">
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Dui <span class="required">*</span>
												</label>
												<div class="input-group mb-3 col-md-6">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1"><i class="	fa fa-user" style="color:#2A3F54;width: 20px;height: 24px;
														"></i></span>
													</div>
													<input class="form-control" type="text" id="usuario" name="usuario" value="<?=old('DUI', $personas->DUI)?>"/>
												</div>
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nombre <span class="required">*</span>
												</label>
												<div class="input-group mb-3 col-md-6">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1"><i class="	fa fa-user" style="color:#2A3F54;width: 20px;height: 24px;
														"></i></span>
													</div>
													<input class="form-control" type="text" id="usuario" name="usuario" value="<?=old('nombres', $personas->nombres)?>"/>
												</div>

											</div>
											<div class="clearfix"></div>
											<div class="item form-group col-md-6">
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Apellidos <span class="required">*</span>
												</label>
												<div class="input-group mb-3 col-md-6">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1"><i class="	fa fa-user" style="color:#2A3F54;width: 20px;height: 24px;
														"></i></span>
													</div>
													<input class="form-control" type="text" id="usuario" name="usuario" value="<?=old('apellidos', $personas->apellidos)?>"/>
												</div>
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tipo de persona <span class="required">*</span>
												</label>
												<div class="input-group mb-3 col-md-6">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1"><i class="fa fa-toggle-on" style="color:#2A3F54;width: 20px;height: 24px;
														"></i></span>
													</div>
													<select class="form-control"  name="estado_editar" id="estado_editar">
														<option value="<?=old('tipoPersona', $personas->tipoPersona)?>"><?=old('tipoPersona', $personas->tipoPersona)?></option>
														<option value="Estudiante">Estudiante</option>
														<option value="Docente">Docente</option>
														<option value="Administrador">Administrador</option>
														<option value="Empleado">Empleado</option>
													</select>
												</div>

											</div>
											<div class="clearfix"></div>
											<div class="item form-group col-md-6">
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Estado civil <span class="required">*</span>
												</label>
												<div class="input-group mb-3 col-md-6">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1"><i class="fa fa-toggle-on" style="color:#2A3F54;width: 20px;height: 24px;
														"></i></span>
													</div>
													<select class="form-control"  name="estado_editar" id="estado_editar">
														<option value="<?=old('estadoCivil', $personas->estadoCivil)?>"><?=old('estadoCivil', $personas->estadoCivil)?></option>
														<option value="Soltero(a)">Soltero(a)</option>
														<option value="Casado(o)">Casado(o)</option>
														<option value="Estudiante">Estudiante</option>
														<option value="Empleado">Empleado</option>
													</select>
												</div>
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Sexo <span class="required">*</span>
												</label>
												<div class="input-group mb-3 col-md-6">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1"><i class="fa fa-toggle-on" style="color:#2A3F54;width: 20px;height: 24px;
														"></i></span>
													</div>
													<select class="form-control"  name="sexo" id="sexo">
														<option value="<?=old('sexo', $personas->sexo)?>"><?=old('sexo', $personas->sexo)?></option>
														<option value="M">M</option>
														<option value="F">F</option>
													</select>
												</div>

											</div>
											<div class="clearfix"></div>
											<div class="item form-group col-md-6">
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Teléfono <span class="required">*</span>
												</label>
		
																					<div class="input-group mb-3 col-md-6">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1"><i class="	fa fa-user" style="color:#2A3F54;width: 20px;height: 24px;
														"></i></span>
													</div>
													<input class="form-control" type="text" id="usuario" name="usuario" value="<?=old('DUI', $personas->DUI)?>"/>
												</div>
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email <span class="required">*</span>
												</label>
												<div class="input-group mb-3 col-md-6">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1"><i class="	fa fa-user" style="color:#2A3F54;width: 20px;height: 24px;
														"></i></span>
													</div>
													<input class="form-control" type="email"  id="telefono" name="telefono" value="<?=old('email', $personas->email)?>"/>
												</div>

											</div>

												<div class="clearfix"></div>
											<div class="item form-group col-md-6">
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Fecha de nacimiento <span class="required">*</span>
												</label>
												<div class="input-group mb-3 col-md-6">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1"><i class="	fa fa-user" style="color:#2A3F54;width: 20px;height: 24px;
														"></i></span>
													</div>
													<input class="form-control" type="date" id="usuario" name="usuario" value="<?=old('fechaNacimiento', $personas->fechaNacimiento)?>"/>
												</div>
												<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nombre <span class="required">*</span>
												</label>
												<div class="input-group mb-3 col-md-6">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1"><i class="	fa fa-user" style="color:#2A3F54;width: 20px;height: 24px;
														"></i></span>
													</div>
													<input class="form-control" type="datetime-local" id="usuario" name="usuario" value="<?=old('fechaIngreso', $personas->fechaIngreso)?>"/>
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
														<option value="<?=old('estado', $personas->estado)?>"><?=old('estado', $personas->estado)?></option>
														<option value="RETIRADO">RETIRADO</option>
														<option value="ACTIVO">ACTIVO</option>
														<option value="EN PROCESO">EN PROCESO</option>
													</select>
												</div>
			<!-- 																			<div class="input-group mb-3 col-md-6">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1"><i class="	fa fa-user" style="color:#2A3F54;width: 20px;height: 24px;
														"></i></span>
													</div>
													<textarea class="input-group-prepend" style=" height: 38px;width:80%"></textarea>
												</div> -->
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




