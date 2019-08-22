<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Usuario
        <small>Ver</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Administración</a></li>
        <li class="active">Usuario</li>
      </ol>
    </section>

    <section class="content">
    	<div class="row">
    		<div class="col col-xs-12">
    			<div class="box box-warning">
    				<div class="box-header image">
    					<img src="<?php echo base_url(); ?>assets/template/img/avatar2.png" class="img-circle img-thumbnail" alt="User Image">
    				</div>
    				<form role="form">
    					<h4 class="box-header with-border">DATOS PERSONALES</h2>
    					<div class="box-body">
    						<div class="col-md-10 col-md-offset-1">
    						<div class="row">
								<div class="form-group col col-xs-4">
									<label for="identificacion">Identificación</label>
									<input type="text" name="identificacion" id="identificacion" class="form-control" placeholder="Identicación">
								</div>
								<div class="form-group col col-xs-4">
									<label for="nombre1">Primer Nombre</label>
									<input type="text" name="nombre1" id="nombre1" class="form-control" placeholder="Primer Nombre">
								</div>
								<div class="form-group col col-xs-4">
									<label for="nombre2">Segundo Nombre</label>
									<input type="text" name="nombre2" id="nombre2" class="form-control" placeholder="Segudo Nombre">
								</div>
							</div>
							<div class="row">
								<div class="form-group col col-xs-6">
									<label for="apellido1">Primer Apellido</label>
									<input type="text" name="apellido1" id="apellido1" class="form-control" placeholder="Primer Apellido">
								</div>
								<div class="form-group col col-xs-6">
									<label for="apellido2">Segundo Apellido</label>
									<input type="text" name="apellido2" id="apellido2" class="form-control" placeholder="Segudo Apellido">
								</div>
							</div>
							<div class="row">
								<div class="form-group col col-xs-4">
									<label for="correo">Correo Electrónico</label>
									<input type="email" name="correo" id="correo" class="form-control" placeholder="Correo Electrónico">
								</div>
								<div class="form-group col col-xs-4">
									<label for="celular">Celular</label>
									<input type="text" name="celular" id="celular" class="form-control" placeholder="Celular">
								</div>
								<div class="form-group col col-xs-4">
									<label for="fijo">Telefono fijo</label>
									<input type="text" name="fijo" id="fijo" class="form-control" placeholder="Telefono Fijo">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-xs-12">
									<label for="direccion">Dirección</label>
									<input type="text" name="direccion" id="direccion" class="form-control" placeholder="Dirección">
								</div>
							</div>
							</div>
    					</div>
    					<div class="box-footer image">
    						<a name="btn-modificar" id="btn-modificar" class="btn btn-warning">Modificar</a>
    					</div>
    				</form>
    				<form role="form">
    					<h4 class="box-header with-border">CONTRASEÑA</h4>
    					<div class="box-body">
    						<div class="col-md-10 col-md-offset-1">
    						<div class="row">
								<div class="form-group col col-xs-4">
									<label for="clave-actual">Contraseña actual</label>
									<input type="password" name="clave-actual" id="clave-actual" class="form-control" placeholder="Contraseña actual">
								</div>
								<div class="form-group col col-xs-4">
									<label for="nueva-clase">Nueva Contraseñ</label>
									<input type="password" name="nueva-clase" id="nueva-clase" class="form-control" placeholder="Nueva contraseña">
								</div>
								<div class="form-group col col-xs-4">
									<label for="confirma-clave">Confirmar contraseña</label>
									<input type="password" name="confirma-clave" id="confirma-clave" class="form-control" placeholder="Confirmación de contraseña">
								</div>
							</div>
						</div>
    					</div>
    					<div class="box-footer image">
    						<a name="btn-modificar" id="btn-modificar" class="btn btn-warning">Modificar</a>
    					</div>
    				</form>
    			</div>
    		</div>			
		</div>
    </section>	
</div>