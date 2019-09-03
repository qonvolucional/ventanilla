<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Usuario
        <small>Agregar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Administración</a></li>
        <li class="active"><a href="<?php echo base_url(); ?>usuario">Usuario</a></li>
      </ol>
    </section>

    <section class="content">
    	<div class="row">
    		<div class="col col-xs-12">
    			<?php if($this->session->flashdata("error")):?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                        
                     </div>
                <?php endif;?>
    			<div class="box box-warning">
    				<div class="box-header image">
    					<img src="<?php echo base_url(); ?>assets/template/img/avatar2.png" class="img-circle img-thumbnail" alt="User Image">
    				</div>
    				<form role="form" action="<?php echo base_url();?>usuario/almacenar" method="post" enctype="multipart/form-data">
    					<h4 class="box-header with-border">DATOS PERSONALES</h2>
    					<div class="box-body">
    						<div class="col-md-10 col-md-offset-1">
	    						<div class="row">
									<div class="form-group col col-xs-6">
										<label for="identificacion">Identificación</label>
										<input type="text" name="identificacion" id="identificacion" class="form-control" placeholder="Identicación">
									</div>
									<div class="form-group col col-xs-6">
										<label for="rol_id">Rol</label>
										<select class="form-control" id="rol_id" name="rol_id">
											<?php if(!empty($roles)):?>
												<?php foreach ($roles as $rol):?>
													<option value="<?php echo $rol->id; ?>"> <?php echo $rol->nombre; ?> </option>
												<?php endforeach;?>
											<?php endif;?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="form-group col col-xs-6">
										<label for="nombre1">Primer Nombre</label>
										<input type="text" name="nombre1" id="nombre1" class="form-control" placeholder="Primer Nombre">
									</div>
									<div class="form-group col col-xs-6">
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
								<div class="form-group">
									<label>Foto de perfil</label>
									<input type="file" name="imagen" id="name">
								</div>
								<div class="form-group">
		    						<button type="submit" name="btn-guardar" id="btn-guardar" class="btn btn-success pull-right">Guardar</button>
		    					</div>
							</div>
    					</div>
    					
    				</form>
    			</div>
    		</div>			
		</div>
    </section>	
</div>