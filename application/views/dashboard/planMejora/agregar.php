<div class="content-wrapper">
   <section class="content-header">
      <h1>
        Plan de Mejora - <small><?php echo $empresa->razon_social; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Administración</a></li>
        <li><a class="pull-right" href="<?php echo base_url(); ?>emprendimiento/FormatoInscripcion">Plan de Mejora</a></li>
        <li class="active">Agregar</li>
      </ol>
    </section>

     <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-success">

                  <div class="box-header">
                      <blockquote class="bg-warning">
                        <small class="text-success">RECUERDE: La información que va a diligenciar a continuación, debe estar en letra minúscula y con buena ortografía.                           
                        </small>
                      </blockquote>

                  </div>

                  <div class="box-body">
                          <div class="nav-tabs-custom">
                             <ul class="nav nav-pills  nav-justified">
                                <li class="active"><a href="#tab_nivel_0" data-toggle="tab">Nivel 0 - Verificación Uno(1)</a></li>
                                <li ><a href="#tab_nivel_1" data-toggle="tab">Nivel 1 - Verificación Dos(2)</a></li>
                              </ul>
                         </div>
                    <!-- tab-content --> 
                     <div class="tab-content">
                       <!-- Start Tab 1 - Criterios de Cumplimiento -->
                          <div class="tab-pane active" id="tab_nivel_0">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Criterio</th>
                                  <th>Acciones correctivas por indicador</th>
                                  <th>Actor que podria participar</th>
                                  <th>Resultados Esperados</th>
                                </tr>
                              </thead>
                              <tbody></tbody>
                            </table>
                          </div>

                          <div class="tab-pane" id="tab_nivel_1">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>Criterio</th>
                                    <th>Acciones correctivas por indicador</th>
                                    <th>Actor que podria participar</th>
                                    <th>Resultados Esperados</th>
                                  </tr>
                                </thead>
                                <tbody></tbody>
                              </table>
                          </div>   
                       </div>
                   </div>
              </div>
            </div>
        </div>
    </section>
</div>


