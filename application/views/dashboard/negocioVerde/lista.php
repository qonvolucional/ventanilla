
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

          <div class="box">
            <div class="box-header">
              <div>
                <b style="font-size: 1.1em;">Acciones</b>
              </div>
              <span style="color: skyblue;"><i class="fa fa-circle fa-sm"></i></span>
              <span>Ver Registro
              <span style="color: orange;"><i class="fa fa-circle fa-sm"></i></span>
              <span>Editar Registro
              <!-- <span style="color: red;"><i class="fa fa-circle fa-sm"></i></span>
              <span>Eliminar Registro -->
                   
                
              <a href="<?php echo base_url(); ?>emprendimiento/negocioVerde/agregar" class="btn btn-success btn-flat pull-right"><span class="fa fa-plus"></span> Agregar registro</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  <th>Razón social</th>
	                  <th>Identificación</th>
	                  <th>Representante Legal</th>
	                  <th>Tamaño</th>
	                  <th>Acciones</th>
	                </tr>
                </thead>
                <tbody>
                	<?php if(!empty($empresas)): ?>
                		<?php foreach ($empresas as $empresa ):?> 
			                <tr>
			                  <td><?php echo $empresa->razon_social; ?></td>
			                  <td><?php echo $empresa->identificacion; ?></td>
			                  <td><?php echo $empresa->representante_legal; ?></td>
			                  <td><?php echo $empresa->nombre; ?></td>
			                  <td>
			                  	<div class="btn-group">
			                  	<a href="" class="btn btn-info"><span class="fa fa-eye"></span></a>
			                  	<a href="" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
			                  	<!-- <a href="" class="btn btn-danger"><span class="fa fa-remove"></span></a> -->
			                  	</div>
			              	  </td>
			              	</tr>
	              		<?php endforeach; ?>
	              	<?php endif; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Razón social</th>
                  <th>Identificación</th>
                  <th>Representante Legal</th>
                  <th>Tamaño</th>
                  <th>Opciones</th>
                </tr>
                </tfoot>
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