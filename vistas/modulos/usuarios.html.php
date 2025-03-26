<div class="content-wrapper">

	<section class="content-header">
		<h1>
			Administrar usuarios
		</h1>
		
		<ol class="breadcrumb">
			<li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
			<li class="active">Administrar usuarios</li>
		</ol>
	</section>

	<section class="content">

		<div class="box">

			<div class="box-header with-border">

				<button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">

					Agregar usuario

				</button>

			</div><!-- /.box-header -->

			<div class="box-body">
				
				<table class="table table-bordered table-striped dt-responsive tablas">

					<thead>

						<tr>

							<th style="width: 1%; white-space: nowrap; text-align: center;">#</th>
							<th style="text-align: center;">Nombre</th>
							<th style="text-align: center;">Usuario</th>
							<th style="text-align: center;">Foto</th>
							<th style="text-align: center;">Perfil</th>
							<th style="width: 1%; white-space: nowrap; text-align: center;">Estado</th>
							<th style="text-align: center;">Último login</th>
							<th style="text-align: center;">Acciones</th>

						</tr>

					</thead>

					<tbody>

						<tr>

							<td style="vertical-align: middle; text-align: center;">1</td>
							<td style="vertical-align: middle;">Usuario Administrador</td>
							<td style="vertical-align: middle; text-align: center;">admin</td>
							<td style="vertical-align: middle; text-align: center;">
								<img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px">
							</td>
							<td style="vertical-align: middle; text-align: center;">Administrador</td>
							<td style="vertical-align: middle; text-align: center;"><button class="btn btn-success btn-xs">Activado</button></td>
							<td style="vertical-align: middle; text-align: center;" >2017-12-11 12:05:32</td>
							<td style="vertical-align: middle; text-align: center;">

								<div class="btn-group">

									<button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

									<button class="btn btn-danger"><i class="fa fa-times"></i></button>

								</div><!-- /.btn-group -->

							</td>


						</tr>

						<tr>

							<td style="vertical-align: middle; text-align: center;">2</td>
							<td style="vertical-align: middle;">Usuario Administrador</td>
							<td style="vertical-align: middle; text-align: center;">admin</td>
							<td style="vertical-align: middle; text-align: center;">
								<img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px">
							</td>
							<td style="vertical-align: middle; text-align: center;">Administrador</td>
							<td style="vertical-align: middle; text-align: center;"><button class="btn btn-success btn-xs">Activado</button></td>
							<td style="vertical-align: middle; text-align: center;" >2017-12-11 12:05:32</td>
							<td style="vertical-align: middle; text-align: center;">

								<div class="btn-group">

									<button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

									<button class="btn btn-danger"><i class="fa fa-times"></i></button>

								</div><!-- /.btn-group -->

							</td>


						</tr>

						<tr>

							<td style="vertical-align: middle; text-align: center;">3</td>
							<td style="vertical-align: middle;">Usuario Administrador</td>
							<td style="vertical-align: middle; text-align: center;">admin</td>
							<td style="vertical-align: middle; text-align: center;">
								<img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px">
							</td>
							<td style="vertical-align: middle; text-align: center;">Administrador</td>
							<td style="vertical-align: middle; text-align: center;"><button class="btn btn-success btn-xs">Activado</button></td>
							<td style="vertical-align: middle; text-align: center;" >2017-12-11 12:05:32</td>
							<td style="vertical-align: middle; text-align: center;">

								<div class="btn-group">

									<button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

									<button class="btn btn-danger"><i class="fa fa-times"></i></button>

								</div><!-- /.btn-group -->

							</td>


						</tr>

						

					</tbody>


				</table>

			</div><!-- /.box-body -->

		</div><!-- /.box -->

	</section><!-- /.content -->

</div><!-- /.content-wrapper -->

<!--===========================================
	MODAL AGREGAR USUARIO
============================================-->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">

	<div class="modal-dialog">

		<div class="modal-content">

			<form role="form" method="post" enctype="multipart/form-data">

				<!--===========================================
					CABEZA DEL MODAL
				============================================-->
				
				<div class="modal-header bg-primary">
	
					<button type="button" class="close" data-dismiss="modal">&times;</button>
	
					<h4 class="modal-title">Agregar usuario</h4>
	
				</div><!-- /.modal-header -->
	
				<!--===========================================
					CUERPO DEL MODAL
				============================================-->
				
				<div class="modal-body">
	
					<div class="box-body">
	
						<!-- ENTRADA PARA EL NOMBRE -->
						<div class="form-group">
	
							<div class="input-group">
	
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
	
								<input class="form-control input-lg" type="text" name="nuevoNombre" placeholder="Ingresar nombre" required>
	
							</div>
	
						</div><!-- /.form-group -->
	
						<!-- ENTRADA PARA EL USUARIO -->
						<div class="form-group">
	
							<div class="input-group">
	
								<span class="input-group-addon"><i class="fa fa-key"></i></span>
	
								<input class="form-control input-lg" type="text" name="nuevoUsuario" placeholder="Ingresar usuario" required>
	
							</div>
	
						</div><!-- /.form-group -->
	
						<!-- ENTRADA PARA CONTRASEÑA -->
						<div class="form-group">
	
							<div class="input-group">
	
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
	
								<input class="form-control input-lg" type="password" name="nuevoPassword" placeholder="Ingresar contraseña" required>
	
							</div>
	
						</div><!-- /.form-group -->
	
						<!-- ENTRADA PARA SELECCIONAR SU PERFIL -->
						<div class="form-group">
	
							<div class="input-group">
	
								<span class="input-group-addon"><i class="fa fa-users"></i></span>
	
								<select class="form-control input-lg" name="nuevoPerfil">
	
									<option value="">Seleccionar perfil</option>
	
									<option value="Administrador">Administrador</option>
	
									<option value="Especial">Especial</option>
	
									<option value="Vendedor">Vendedor</option>
	
								</select>
	
							</div>
	
						</div><!-- /.form-group -->
	
						<!-- ENTRADA PARA SUBIR FOTO -->
						<div class="form-group">
	
							<div class="panel">SUBIR FOTO</div>
	
							<input type="file" id="nuevaFoto" name="nuevaFoto">
	
							<p class="help-block">Peso máximo de la foto 200 MB</p>
	
							<img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="100px">
	
						</div><!-- /.form-group -->
	
					</div><!-- /.box-body -->
	
				</div><!-- /.modal-body -->
	
				<!--===========================================
					PIE DEL MODAL
				============================================-->
				
				<div class="modal-footer">
	
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
	
					<button type="submit" class="btn btn-primary" data-dismiss="modal">Guardar usuario</button>
	
				</div><!-- /.modal-footer -->

			</form>

		</div><!-- /.modal-content -->

	</div><!-- /.modal-dialog -->

</div><!-- /.modal -->