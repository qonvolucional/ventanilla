<div class="content-wrapper">
   <section class="content-header">
      <h1>
        Hoja de Verificación Uno (1) - <small><?php echo $empresa->razon_social ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Administración</a></li>
        <li><a class="pull-right" href="<?php echo base_url(); ?>emprendimiento/FormatoInscripcion">Hoja de verificación uno</a></li>
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
                        <small class="text-success">Son los aspectos ambientales y legales mínimos que todo bien o servicio  debe cumplir para poder ser considerado un Negocio Verde
                        </small>
                      </blockquote>
                  </div>

                  <div class="box-body">
                       <!-- Custom Tabs -->
                       <div class="nav-tabs-custom">
                          <ul class="nav nav-tabs">
                              <li class="active"><a href="#tab_1" data-toggle="tab">Cumplimiento Legal</a></li>
                              <li ><a href="#tab_2" data-toggle="tab">Condiciones Laborales</a></li>
                              <li ><a href="#tab_3" data-toggle="tab">Impacto Ambiental</a></li>
                              <li ><a href="#tab_4" data-toggle="tab">Impacto Social</a></li>
                              <li ><a href="#tab_5" data-toggle="tab">Sustancias o Materiales Peligrosos</a></li>
                            </ul>
                          
                          <!-- tab-content --> 
                          <div class="tab-content">
                             <!-- Start Tab 1 - Cumplimiento Legal -->
                             <div class="tab-pane active" id="tab_1">
                                  <?php if(!empty($cumplimiento_legal)): ?>
                                    <?php foreach ($cumplimiento_legal as $cl): ?> 
                                      <!--Inicio-->
                                    <div class="row">
                                        <div class="col-md-5">
                                              <p class="form-control-static">
                                                <?php echo $cl->nombre; ?>
                                              </p>
                                          
                                          </div>
                                          <div class="form-group col-md-2">
                                               <label for="cumple_invima">Si/ No/ No Aplica</label>
                                               <select class="form-control" name="cumple_invima" id="cumple_invima">
                                                 <option value="1">SI</option>
                                                 <option value="2" selected>No</option>
                                                 <option value="2">No Aplica</option>
                                               </select>
                                          </div>
                                          <div class="col-md-5">
                                            <div class="form-group">
                                              <label for="" class="">Observaciones</label>
                                              <textarea name="descripcion_cl[<?php echo $cl->id; ?>]" id="descripcion_cl_<?php echo $cl->id; ?>" class="form-control" rows="2"></textarea>
                                            </div>
                                          </div>  
                                      </div>
                                      <!--Cierre-->
                                    <?php endforeach; ?>
                                  <?php endif; ?>
                                  <!--Cierre-->
                             </div>
                             <!-- End Tab1 -->

                             <!-- Start Tab 2 - Condiciones Legales -->
                             <div class="tab-pane" id="tab_2">
                                 <?php if(!empty($condiciones_laborales)): ?>
                                    <?php foreach ($condiciones_laborales as $cll): ?> 
                                      <!--Inicio-->
                                    <div class="row">
                                        <div class="col-md-5">
                                              <p class="form-control-static">
                                                <?php echo $cll->nombre; ?>
                                              </p>
                                          
                                          </div>
                                          <div class="form-group col-md-2">
                                               <label for="cumple_invima">Si/ No/ No Aplica</label>
                                               <select class="form-control" name="cumple_invima" id="cumple_invima">
                                                 <option value="1">SI</option>
                                                 <option value="2" selected>No</option>
                                                 <option value="2">No Aplica</option>
                                               </select>
                                          </div>
                                          <div class="col-md-5">
                                            <div class="form-group">
                                              <label for="" class="">Observaciones</label>
                                              <textarea name="descripcion_cl[<?php echo $cll->id; ?>]" id="descripcion_cl_<?php echo $cll->id; ?>" class="form-control" rows="2"></textarea>
                                            </div>
                                          </div>  
                                      </div>
                                      <!--Cierre-->
                                    <?php endforeach; ?>
                                  <?php endif; ?>
                             </div>
                             <!-- End Tab -->

                             <!-- Start Tab 3 - Impacto Ambiental -->
                             <div class="tab-pane" id="tab_3">
                                 <?php if(!empty($impacto_ambiental)): ?>
                                    <?php foreach ($impacto_ambiental as $ia): ?> 
                                      <!--Inicio-->
                                    <div class="row">
                                        <div class="col-md-5">
                                              <p class="form-control-static">
                                                <?php echo $ia->nombre; ?>
                                              </p>
                                          
                                          </div>
                                          <div class="form-group col-md-2">
                                               <label for="cumple_invima">Si/ No/ No Aplica</label>
                                               <select class="form-control" name="cumple_invima" id="cumple_invima">
                                                 <option value="1">SI</option>
                                                 <option value="2" selected>No</option>
                                                 <option value="2">No Aplica</option>
                                               </select>
                                          </div>
                                          <div class="col-md-5">
                                            <div class="form-group">
                                              <label for="" class="">Observaciones</label>
                                              <textarea name="descripcion_cl[<?php echo $ia->id; ?>]" id="descripcion_cl_<?php echo $ia->id; ?>" class="form-control" rows="2"></textarea>
                                            </div>
                                          </div>  
                                      </div>
                                      <!--Cierre-->
                                    <?php endforeach; ?>
                                  <?php endif; ?>
                             </div>
                             <!-- End Tab -->

                             <!-- Start Tab 4 - Impacto Social -->
                             <div class="tab-pane" id="tab_4">
                              <?php if(!empty($impacto_social)): ?>
                                    <?php foreach ($impacto_social as $is): ?> 
                                      <!--Inicio-->
                                    <div class="row">
                                        <div class="col-md-5">
                                              <p class="form-control-static">
                                                <?php echo $is->nombre; ?>
                                              </p>
                                          
                                          </div>
                                          <div class="form-group col-md-2">
                                               <label for="cumple_invima">Si/ No/ No Aplica</label>
                                               <select class="form-control" name="cumple_invima" id="cumple_invima">
                                                 <option value="1">SI</option>
                                                 <option value="2" selected>No</option>
                                                 <option value="2">No Aplica</option>
                                               </select>
                                          </div>
                                          <div class="col-md-5">
                                            <div class="form-group">
                                              <label for="" class="">Observaciones</label>
                                              <textarea name="descripcion_ia[<?php echo $is->id; ?>]" id="descripcion_ia_<?php echo $is->id; ?>" class="form-control" rows="2"></textarea>
                                            </div>
                                          </div>  
                                      </div>
                                      <!--Cierre-->
                                    <?php endforeach; ?>
                                  <?php endif; ?>
                             </div>
                             <!-- End Tab -->

                             <!-- Start Tab 5 - Sustancias o Materiales Peligrosos -->
                             <div class="tab-pane" id="tab_5">
                              <?php if(!empty($sustancia_material)): ?>
                                    <?php foreach ($sustancia_material as $sm): ?> 
                                      <!--Inicio-->
                                    <div class="row">
                                        <div class="col-md-5">
                                              <p class="form-control-static">
                                                <?php echo $sm->nombre; ?>
                                              </p>
                                          
                                          </div>
                                          <div class="form-group col-md-2">
                                               <label for="cumple_invima">Si/ No/ No Aplica</label>
                                               <select class="form-control" name="cumple_invima" id="cumple_invima">
                                                 <option value="1">SI</option>
                                                 <option value="2" selected>No</option>
                                                 <option value="2">No Aplica</option>
                                               </select>
                                          </div>
                                          <div class="col-md-5">
                                            <div class="form-group">
                                              <label for="" class="">Observaciones</label>
                                              <textarea name="descripcion_ia[<?php echo $sm->id; ?>]" id="descripcion_ia_<?php echo $sm->id; ?>" class="form-control" rows="2"></textarea>
                                            </div>
                                          </div>  
                                      </div>
                                      <!--Cierre-->
                                    <?php endforeach; ?>
                                  <?php endif; ?>
                             </div>
                             <!-- End Tab -->
                          </div>
                       </div>
                   </div>
              </div>
            </div>
        </div>
    </section>
</div>


