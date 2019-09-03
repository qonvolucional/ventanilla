
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Negocios Verdes
        <small>Lista</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Administración</a></li>
        <li><a href="<?php echo base_url(); ?>emprendimiento/negocioVerde">Negocios Verdes</a></li>
        <li class="active">Lista</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->

          <div class="box box-success">
            <div class="box-header">
              <!-- <div>
                <b style="font-size: 1.1em;">Acciones</b>
              </div>
              <span style="color: skyblue;"><i class="fa fa-circle fa-sm"></i></span>
              <span>Ver Registro
              <span style="color: orange;"><i class="fa fa-circle fa-sm"></i></span>
              <span>Editar Registro
              <span style="color: red;"><i class="fa fa-circle fa-sm"></i></span>
              <span>Eliminar Registro -->
              <a href="<?php echo base_url(); ?>emprendimiento/negocioVerde/agregar" class="btn btn-primary btn-flat pull-right"><span class="fa fa-plus"></span> Agregar registro</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  <th>Razón social</th>
	                  <th>Formato AS</th>
	                  <th>Hojas de verificación</th>
	                  <th>Plan de Mejora</th>
	                  <th>Consolidado</th>
	                </tr>
                </thead>
                <tbody>
                	<?php if(!empty($empresas)): ?>
                		<?php foreach ($empresas as $empresa ):?> 
			                <tr>
			                  <td>
                          <?php echo $empresa->razon_social; ?> <a href="<?php base_url(); ?>emprendimiento/negocioVerde/ver/<?php echo $empresa->id; ?>" class="btn btn-info pull-right"><span class="fa fa-eye"></span></a>
                        </td>
			                  <td class="btn-centrar">
                          <a href="<?php base_url(); ?>formatoAS/<?php echo $empresa->id; ?>" class="btn btn-warning"><span class="fa fa-check-square"></span></a>
                        </td>
                        <td class="btn-centrar">
                          <div class="btn-group">
                            <a href="<?php base_url(); ?>verificacion-uno/<?php echo $empresa->id; ?>" class="btn btn-primary "><span class="fa fa-file-text">  Hoja 1</span></a>
                            <a href="<?php base_url(); ?>verificacion-dos/<?php echo $empresa->id; ?>" class="btn btn-success ">Hoja 2  <span class="fa fa-file-text-o"></span></a>
                          </div>
                        </td>
			                  <td class="btn-centrar">
                          <a href="<?php base_url(); ?>plan-de-mejora/<?php echo $empresa->id; ?>" class="btn btn-danger"> <span class="fa fa-plus-square"></span>
                        </td>
			                  <td class="btn-centrar">
                          <a href="#" class="btn btn-success"> <span class="fa fa-files-o"></span></td>
                        </td>
			              	</tr>
	              		<?php endforeach; ?>
	              	<?php endif; ?>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->