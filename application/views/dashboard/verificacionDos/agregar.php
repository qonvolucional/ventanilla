<div class="content-wrapper">
   <section class="content-header">
      <h1>
        Hoja de Verificación Dos (2) - <small><?php echo $empresa->razon_social ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Administración</a></li>
        <li><a class="pull-right" href="<?php echo base_url(); ?>emprendimiento/FormatoInscripcion">Hoja de verificación dos</a></li>
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
                         <small class="text-success">El tamaño máximo para subir el archivo es de <b>1MB</b> 
                        </small>
                      </blockquote>

                  </div>

                  <div class="box-body">
                     <div class="nav-tabs-custom">
                           <ul class="nav nav-pills  nav-justified">
                              <li class="active"><a href="#tab_1_1" data-toggle="tab">Criterios de Cumplimiento</a></li>
                              <li ><a href="#tab_2_1" data-toggle="tab">Criterios Adicionales</a></li>
                              <li ><a href="#tab_3_1" data-toggle="tab">Resultados de Evaluacion</a></li>
                            </ul>
                     </div>
                    <!-- tab-content --> 
                     <div class="tab-content">
                       <!-- Start Tab 1 - Criterios de Cumplimiento -->
                          <div class="tab-pane active" id="tab_1_1">
                               
                         <!-- Custom Tabs -->
                           <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1" data-toggle="tab">Viabilidad Económica</a></li>
                                <li ><a href="#tab_2" data-toggle="tab">Impacto Ambienta Positivo</a></li>
                                <li ><a href="#tab_3" data-toggle="tab">Enfoque Ciclo de Vida</a></li>
                                <li ><a href="#tab_4" data-toggle="tab">Vida Útil</a></li>
                                <li ><a href="#tab_5" data-toggle="tab">Sustitución de Sustancias</a></li>
                                 <li ><a href="#tab_6" data-toggle="tab">Reciclabilidad</a></li>
                                <li ><a href="#tab_7" data-toggle="tab">Uso Eficiente y Sostenible</a></li>
                                 <li ><a href="#tab_8" data-toggle="tab">Responsabilidad Social - Interior</a></li>
                                <li ><a href="#tab_9" data-toggle="tab">Responsabilidad Social - Cadena de Valor</a></li>
                                <li ><a href="#tab_10" data-toggle="tab">Responsabilidad Social - Exteriror</a></li>
                                 <li ><a href="#tab_11" data-toggle="tab">Comunicación de Atributos</a></li>
                              </ul>
                            
                            <!-- tab-content --> 
                            <div class="tab-content">
                               <!-- Start Tab 1 - Cumplimiento Legal -->
                               <div class="tab-pane active" id="tab_1">
                                      
                                       <?php if(!empty($viabilidad_economica)): ?>
                                          <?php foreach ($viabilidad_economica as $ve): ?> 
                                            <!--Inicio-->
                                          <div class="row">
                                              <div class="col-md-5">
                                                    <input type="hidden" class="verificación" value="<?php echo $ve->id; ?>">
                                                    <p class="form-control-static">
                                                      <?php echo $ve->nombre; ?>
                                                    </p>
                                                
                                                </div>
                                                <div class="form-group col-md-2">
                                                     <label for="cumple_invima">Calificador (0, 0.5, 1, N/A)</label>
                                                     <select class="form-control " name="cumple_invima" id="calificacion_<?php echo $ve->id; ?>">
                                                       <option value="1" selected>0</option>
                                                       <option value="2" >0.5</option>
                                                       <option value="3">1</option>
                                                       <option value="4">N/A</option>
                                                     </select>
                                                </div>
                                                <div class="col-md-4">
                                                  <div class="form-group">
                                                    <label for="" class="">Observaciones</label>
                                                    <textarea name="descripcion_ia[<?php echo $ve->id; ?>]" id="observacion_<?php echo $ve->id; ?>" class="form-control" rows="2"></textarea>
                                                  </div>
                                                </div>  
                                                 
                                            </div>
                                             <div class="row">
                                              <div class="col-md-4">
                                                  <div class="input-group">
                                                    <label for="evindencia_<?php echo $ve->id; ?>" class="alert alert-success" role="alert">
                                                        <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span><span > Click para seleccionar las <strong>Evidencias (fotos, documentos, datos, etc)</strong></span>
                                                    </label>
                                                     <input type="file" id="evindencia_<?php echo $ve->id; ?>" class="btn btn-default" value="Archivo" style="display: none;" >
                                                    
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
                                 <div class="box-header with-border bg-success">
                                  <h3 class="box-title text-success">Impacto ambiental positivo y contribuición a la conservación y preserveración de los recursos ecosistemicos</h3>
                                  </div>

                                     <?php if(!empty($impapcto_ambiental)): ?>
                                          <?php foreach ($impapcto_ambiental as $ia): ?> 
                                            <!--Inicio-->
                                          <div class="row">
                                              <div class="col-md-5">
                                                    <input type="hidden" class="verificación" value="<?php echo $ia->id; ?>">
                                                    <p class="form-control-static">
                                                      <?php echo $ia->nombre; ?>
                                                    </p>
                                                
                                                </div>
                                                <div class="form-group col-md-2">
                                                     <label for="cumple_invima">Calificador (0, 0.5, 1, N/A)</label>
                                                     <select class="form-control " name="cumple_invima" id="calificacion_<?php echo $ia->id; ?>">
                                                       <option value="1" selected>0</option>
                                                       <option value="2" >0.5</option>
                                                       <option value="3">1</option>
                                                       <option value="4">N/A</option>
                                                     </select>
                                                </div>
                                                <div class="col-md-4">
                                                  <div class="form-group">
                                                    <label for="" class="">Observaciones</label>
                                                    <textarea name="descripcion_ia[<?php echo $ve->id; ?>]" id="observacion_<?php echo $ia->id; ?>" class="form-control" rows="2"></textarea>
                                                  </div>
                                                </div>  
                                                 
                                            </div>
                                             <div class="row">
                                              <div class="col-md-4">
                                                  <div class="input-group">
                                                    <label for="evindencia_<?php echo $ve->id; ?>" class="alert alert-success " role="alert">
                                                        <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span><span > Click para seleccionar las <strong>Evidencias (fotos, documentos, datos, etc)</strong></span>
                                                    </label>
                                                     <input type="file" id="evindencia_<?php echo $ia->id; ?>" class="btn btn-primary" value="Archivo" style="display: none;" >
                                                    
                                                  </div>
                                                </div>
                                             </div>
                                            <!--Cierre-->
                                          <?php endforeach; ?>
                                        <?php endif; ?>
                               </div>
                               <!-- End Tab -->

                               <!-- Start Tab 3 -  -->
                               <div class="tab-pane" id="tab_3">
                                  <div class="box-header with-border bg-success">
                                    <h3 class="box-title text-success">Enfoque ciclo de vida del bien o servicio</h3>
                                    </div>
                                    <?php if(!empty($enfoque_ciclo)): ?>
                                          <?php foreach ($enfoque_ciclo as $ec): ?> 
                                            <!--Inicio-->
                                          <div class="row">
                                              <div class="col-md-5">
                                                    <input type="hidden" class="verificación" value="<?php echo $ec->id; ?>">
                                                    <p class="form-control-static">
                                                      <?php echo $ec->nombre; ?>
                                                    </p>
                                                
                                                </div>
                                                <div class="form-group col-md-2">
                                                     <label for="cumple_invima">Calificador (0, 0.5, 1, N/A)</label>
                                                     <select class="form-control " name="cumple_invima" id="calificacion_<?php echo $ec->id; ?>">
                                                       <option value="1" selected>0</option>
                                                       <option value="2" >0.5</option>
                                                       <option value="3">1</option>
                                                       <option value="4">N/A</option>
                                                     </select>
                                                </div>
                                                <div class="col-md-4">
                                                  <div class="form-group">
                                                    <label for="" class="">Observaciones</label>
                                                    <textarea name="observacion[<?php echo $ec->id; ?>]" id="observacion_<?php echo $ec->id; ?>" class="form-control" rows="2"></textarea>
                                                  </div>
                                                </div>  
                                                 
                                            </div>
                                             <div class="row">
                                              <div class="col-md-4">
                                                  <div class="input-group">
                                                    <label for="evindencia_<?php echo $ec->id; ?>" class="alert alert-success " role="alert">
                                                        <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span><span > Click para seleccionar las <strong>Evidencias (fotos, documentos, datos, etc)</strong></span>
                                                    </label>
                                                     <input type="file" id="evindencia_<?php echo $ec->id; ?>" class="btn btn-primary" value="Archivo" style="display: none;" >
                                                    
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

                                       <?php if(!empty($vida_util)): ?>
                                          <?php foreach ($vida_util as $vu): ?> 
                                            <!--Inicio-->
                                          <div class="row">
                                              <div class="col-md-5">
                                                    <input type="hidden" class="verificación" value="<?php echo $vu->id; ?>">
                                                    <p class="form-control-static">
                                                      <?php echo $vu->nombre; ?>
                                                    </p>
                                                
                                                </div>
                                                <div class="form-group col-md-2">
                                                     <label for="cumple_invima">Calificador (0, 0.5, 1, N/A)</label>
                                                     <select class="form-control " name="cumple_invima" id="calificacion_<?php echo $vu->id; ?>">
                                                       <option value="1" selected>0</option>
                                                       <option value="2" >0.5</option>
                                                       <option value="3">1</option>
                                                       <option value="4">N/A</option>
                                                     </select>
                                                </div>
                                                <div class="col-md-4">
                                                  <div class="form-group">
                                                    <label for="" class="">Observaciones</label>
                                                    <textarea name="observacion[<?php echo $vu->id; ?>]" id="observacion_<?php echo $vu->id; ?>" class="form-control" rows="2"></textarea>
                                                  </div>
                                                </div>  
                                                 
                                            </div>
                                             <div class="row">
                                              <div class="col-md-4">
                                                  <div class="input-group">
                                                    <label for="evindencia_<?php echo $vu->id; ?>" class="alert alert-success " role="alert">
                                                        <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span><span > Click para seleccionar las <strong>Evidencias (fotos, documentos, datos, etc)</strong></span>
                                                    </label>
                                                     <input type="file" id="evindencia_<?php echo $vu->id; ?>" class="btn btn-primary" value="Archivo" style="display: none;" >
                                                    
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
                                   <div class="box-header with-border bg-success">
                                      <h3 class="box-title text-success">Sustitución de sustancia o materiales peligrosos</h3>
                                  </div>
                                        <?php if(!empty($sustancia_material)): ?>
                                          <?php foreach ($sustancia_material as $sm): ?> 
                                            <!--Inicio-->
                                          <div class="row">
                                              <div class="col-md-5">
                                                    <input type="hidden" class="verificación" value="<?php echo $sm->id; ?>">
                                                    <p class="form-control-static">
                                                      <?php echo $sm->nombre; ?>
                                                    </p>
                                                
                                                </div>
                                                <div class="form-group col-md-2">
                                                     <label for="cumple_invima">Calificador (0, 0.5, 1, N/A)</label>
                                                     <select class="form-control " name="cumple_invima" id="calificacion_<?php echo $sm->id; ?>">
                                                       <option value="1" selected>0</option>
                                                       <option value="2" >0.5</option>
                                                       <option value="3">1</option>
                                                       <option value="4">N/A</option>
                                                     </select>
                                                </div>
                                                <div class="col-md-4">
                                                  <div class="form-group">
                                                    <label for="" class="">Observaciones</label>
                                                    <textarea name="observacion[<?php echo $sm->id; ?>]" id="observacion_<?php echo $sm->id; ?>" class="form-control" rows="2"></textarea>
                                                  </div>
                                                </div>  
                                                 
                                            </div>
                                             <div class="row">
                                              <div class="col-md-4">
                                                  <div class="input-group">
                                                    <label for="evindencia_<?php echo $sm->id; ?>" class="alert alert-success " role="alert">
                                                        <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span><span > Click para seleccionar las <strong>Evidencias (fotos, documentos, datos, etc)</strong></span>
                                                    </label>
                                                     <input type="file" id="evindencia_<?php echo $sm->id; ?>" class="btn btn-primary" value="Archivo" style="display: none;" >
                                                    
                                                  </div>
                                                </div>
                                             </div>
                                            <!--Cierre-->
                                          <?php endforeach; ?>
                                        <?php endif; ?>
                               </div>
                               <!-- End Tab -->


                               <!-- Start Tab 6 - Reciclabilidad y/o uso de Materiales reciclados -->
                               <div class="tab-pane" id="tab_6">
                                <div class="box-header with-border bg-success">
                                  <h3 class="box-title text-success">Reciclabilidad y/o uso de Materiales reciclados</h3>
                                  </div>
                                       <?php if(!empty($reciclabilidad)): ?>
                                          <?php foreach ($reciclabilidad as $re): ?> 
                                            <!--Inicio-->
                                          <div class="row">
                                              <div class="col-md-5">
                                                    <input type="hidden" class="verificación" value="<?php echo $re->id; ?>">
                                                    <p class="form-control-static">
                                                      <?php echo $re->nombre; ?>
                                                    </p>
                                                
                                                </div>
                                                <div class="form-group col-md-2">
                                                     <label for="cumple_invima">Calificador (0, 0.5, 1, N/A)</label>
                                                     <select class="form-control " name="cumple_invima" id="calificacion_<?php echo $re->id; ?>">
                                                       <option value="1" selected>0</option>
                                                       <option value="2" >0.5</option>
                                                       <option value="3">1</option>
                                                       <option value="4">N/A</option>
                                                     </select>
                                                </div>
                                                <div class="col-md-4">
                                                  <div class="form-group">
                                                    <label for="" class="">Observaciones</label>
                                                    <textarea name="observacion[<?php echo $re->id; ?>]" id="observacion_<?php echo $re->id; ?>" class="form-control" rows="2"></textarea>
                                                  </div>
                                                </div>  
                                                 
                                            </div>
                                             <div class="row">
                                              <div class="col-md-4">
                                                  <div class="input-group">
                                                    <label for="evindencia_<?php echo $re->id; ?>" class="alert alert-success " role="alert">
                                                        <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span><span > Click para seleccionar las <strong>Evidencias (fotos, documentos, datos, etc)</strong></span>
                                                    </label>
                                                     <input type="file" id="evindencia_<?php echo $re->id; ?>" class="btn btn-primary" value="Archivo" style="display: none;" >
                                                    
                                                  </div>
                                                </div>
                                             </div>
                                            <!--Cierre-->
                                          <?php endforeach; ?>
                                        <?php endif; ?>
                               </div>
                               <!-- End Tab -->


                              <!-- Start Tab 7 - Uso eficiente y sostenible de recursos para la producción de bienes o servicios -->
                               <div class="tab-pane" id="tab_7">
                                <div class="box-header with-border bg-success">
                                  <h3 class="box-title text-success">Reciclabilidad y/o uso de Materiales reciclados</h3>
                                  </div>
                                    <?php if(!empty($uso_eficiente)): ?>
                                          <?php foreach ($uso_eficiente as $ue): ?> 
                                            <!--Inicio-->
                                          <div class="row">
                                              <div class="col-md-5">
                                                    <input type="hidden" class="verificación" value="<?php echo $ue->id; ?>">
                                                    <p class="form-control-static">
                                                      <?php echo $ue->nombre; ?>
                                                    </p>
                                                
                                                </div>
                                                <div class="form-group col-md-2">
                                                     <label for="cumple_invima">Calificador (0, 0.5, 1, N/A)</label>
                                                     <select class="form-control " name="cumple_invima" id="calificacion_<?php echo $ue->id; ?>">
                                                       <option value="1" selected>0</option>
                                                       <option value="2" >0.5</option>
                                                       <option value="3">1</option>
                                                       <option value="4">N/A</option>
                                                     </select>
                                                </div>
                                                <div class="col-md-4">
                                                  <div class="form-group">
                                                    <label for="" class="">Observaciones</label>
                                                    <textarea name="observacion[<?php echo $ue->id; ?>]" id="observacion_<?php echo $ue->id; ?>" class="form-control" rows="2"></textarea>
                                                  </div>
                                                </div>  
                                                 
                                            </div>
                                             <div class="row">
                                              <div class="col-md-4">
                                                  <div class="input-group">
                                                    <label for="evindencia_<?php echo $ue->id; ?>" class="alert alert-success " role="alert">
                                                        <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span><span > Click para seleccionar las <strong>Evidencias (fotos, documentos, datos, etc)</strong></span>
                                                    </label>
                                                     <input type="file" id="evindencia_<?php echo $ue->id; ?>" class="btn btn-primary" value="Archivo" style="display: none;" >
                                                    
                                                  </div>
                                                </div>
                                             </div>
                                            <!--Cierre-->
                                          <?php endforeach; ?>
                                        <?php endif; ?>
                               </div>
                               <!-- End Tab -->

                                <!-- Start Tab 8 - Responsabilidad social al interior de la empresa -->
                               <div class="tab-pane" id="tab_8">
                                <div class="box-header with-border bg-success">
                                  <h3 class="box-title text-success">Responsabilidad social al interiror de la empresa </h3>
                                  </div>
                                    <?php if(!empty($responsabilidad_interior)): ?>
                                          <?php foreach ($responsabilidad_interior as $ri): ?> 
                                            <!--Inicio-->
                                          <div class="row">
                                              <div class="col-md-5">
                                                    <input type="hidden" class="verificación" value="<?php echo $ri->id; ?>">
                                                    <p class="form-control-static">
                                                      <?php echo $ri->nombre; ?>
                                                    </p>
                                                
                                                </div>
                                                <div class="form-group col-md-2">
                                                     <label for="cumple_invima">Calificador (0, 0.5, 1, N/A)</label>
                                                     <select class="form-control " name="cumple_invima" id="calificacion_<?php echo $ri->id; ?>">
                                                       <option value="1" selected>0</option>
                                                       <option value="2" >0.5</option>
                                                       <option value="3">1</option>
                                                       <option value="4">N/A</option>
                                                     </select>
                                                </div>
                                                <div class="col-md-4">
                                                  <div class="form-group">
                                                    <label for="" class="">Observaciones</label>
                                                    <textarea name="observacion[<?php echo $ri->id; ?>]" id="observacion_<?php echo $ri->id; ?>" class="form-control" rows="2"></textarea>
                                                  </div>
                                                </div>  
                                                 
                                            </div>
                                             <div class="row">
                                              <div class="col-md-4">
                                                  <div class="input-group">
                                                    <label for="evindencia_<?php echo $ri->id; ?>" class="alert alert-success " role="alert">
                                                        <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span><span > Click para seleccionar las <strong>Evidencias (fotos, documentos, datos, etc)</strong></span>
                                                    </label>
                                                     <input type="file" id="evindencia_<?php echo $ri->id; ?>" class="btn btn-primary" value="Archivo" style="display: none;" >
                                                    
                                                  </div>
                                                </div>
                                             </div>
                                            <!--Cierre-->
                                          <?php endforeach; ?>
                                        <?php endif; ?>
                               </div>
                               <!-- End Tab -->

                               <!-- Start Tab 9 - Resposabilidad social en la cadena de valor de la empresa -->
                               <div class="tab-pane" id="tab_9">
                                <div class="box-header with-border bg-success">
                                  <h3 class="box-title text-success">Resposabilidad social en la cadena de valor de la empresa </h3>
                                  </div>
                                       <?php if(!empty($responsabilidad_cadena)): ?>
                                          <?php foreach ($responsabilidad_cadena as $rc): ?> 
                                            <!--Inicio-->
                                          <div class="row">
                                              <div class="col-md-5">
                                                    <input type="hidden" class="verificación" value="<?php echo $rc->id; ?>">
                                                    <p class="form-control-static">
                                                      <?php echo $rc->nombre; ?>
                                                    </p>
                                                
                                                </div>
                                                <div class="form-group col-md-2">
                                                     <label for="cumple_invima">Calificador (0, 0.5, 1, N/A)</label>
                                                     <select class="form-control " name="cumple_invima" id="calificacion_<?php echo $rc->id; ?>">
                                                       <option value="1" selected>0</option>
                                                       <option value="2" >0.5</option>
                                                       <option value="3">1</option>
                                                       <option value="4">N/A</option>
                                                     </select>
                                                </div>
                                                <div class="col-md-4">
                                                  <div class="form-group">
                                                    <label for="" class="">Observaciones</label>
                                                    <textarea name="observacion[<?php echo $rc->id; ?>]" id="observacion_<?php echo $rc->id; ?>" class="form-control" rows="2"></textarea>
                                                  </div>
                                                </div>  
                                                 
                                            </div>
                                             <div class="row">
                                              <div class="col-md-4">
                                                  <div class="input-group">
                                                    <label for="evindencia_<?php echo $rc->id; ?>" class="alert alert-success " role="alert">
                                                        <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span><span > Click para seleccionar las <strong>Evidencias (fotos, documentos, datos, etc)</strong></span>
                                                    </label>
                                                     <input type="file" id="evindencia_<?php echo $rc->id; ?>" class="btn btn-primary" value="Archivo" style="display: none;" >
                                                    
                                                  </div>
                                                </div>
                                             </div>
                                            <!--Cierre-->
                                          <?php endforeach; ?>
                                        <?php endif; ?>
                               </div>
                               <!-- End Tab -->

                               <!-- Start Tab 10 - Responsabilidad social al exterior de la empresa -->
                               <div class="tab-pane" id="tab_10">
                                <div class="box-header with-border bg-success">
                                  <h3 class="box-title text-success">Responsabilidad social al exterior de la empresa </h3>
                                  </div>
                                        <?php if(!empty($responsabilidad_exterior)): ?>
                                          <?php foreach ($responsabilidad_exterior as $rex): ?> 
                                            <!--Inicio-->
                                          <div class="row">
                                              <div class="col-md-5">
                                                    <input type="hidden" class="verificación" value="<?php echo $rex->id; ?>">
                                                    <p class="form-control-static">
                                                      <?php echo $rex->nombre; ?>
                                                    </p>
                                                
                                                </div>
                                                <div class="form-group col-md-2">
                                                     <label for="cumple_invima">Calificador (0, 0.5, 1, N/A)</label>
                                                     <select class="form-control " name="cumple_invima" id="calificacion_<?php echo $rex->id; ?>">
                                                       <option value="1" selected>0</option>
                                                       <option value="2" >0.5</option>
                                                       <option value="3">1</option>
                                                       <option value="4">N/A</option>
                                                     </select>
                                                </div>
                                                <div class="col-md-4">
                                                  <div class="form-group">
                                                    <label for="" class="">Observaciones</label>
                                                    <textarea name="observacion[<?php echo $rex->id; ?>]" id="observacion_<?php echo $rex->id; ?>" class="form-control" rows="2"></textarea>
                                                  </div>
                                                </div>  
                                                 
                                            </div>
                                             <div class="row">
                                              <div class="col-md-4">
                                                  <div class="input-group">
                                                    <label for="evindencia_<?php echo $rex->id; ?>" class="alert alert-success " role="alert">
                                                        <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span><span > Click para seleccionar las <strong>Evidencias (fotos, documentos, datos, etc)</strong></span>
                                                    </label>
                                                     <input type="file" id="evindencia_<?php echo $rex->id; ?>" class="btn btn-primary" value="Archivo" style="display: none;" >
                                                    
                                                  </div>
                                                </div>
                                             </div>
                                            <!--Cierre-->
                                          <?php endforeach; ?>
                                        <?php endif; ?>
                               </div>
                               <!-- End Tab -->


                               <!-- Start Tab 11 - Comunicación de atributos del bien -->
                               <div class="tab-pane" id="tab_11">
                                <div class="box-header with-border bg-success">
                                  <h3 class="box-title text-success"> Comunicación de atributos del bien</h3>
                                  </div>
                                   <?php if(!empty($comunicacion_atributo)): ?>
                                          <?php foreach ($comunicacion_atributo as $ca): ?> 
                                            <!--Inicio-->
                                          <div class="row">
                                              <div class="col-md-5">
                                                    <input type="hidden" class="verificación" value="<?php echo $ca->id; ?>">
                                                    <p class="form-control-static">
                                                      <?php echo $ca->nombre; ?>
                                                    </p>
                                                
                                                </div>
                                                <div class="form-group col-md-2">
                                                     <label for="cumple_invima">Calificador (0, 0.5, 1, N/A)</label>
                                                     <select class="form-control " name="cumple_invima" id="calificacion_<?php echo $ca->id; ?>">
                                                       <option value="1" selected>0</option>
                                                       <option value="2" >0.5</option>
                                                       <option value="3">1</option>
                                                       <option value="4">N/A</option>
                                                     </select>
                                                </div>
                                                <div class="col-md-4">
                                                  <div class="form-group">
                                                    <label for="" class="">Observaciones</label>
                                                    <textarea name="observacion[<?php echo $ca->id; ?>]" id="observacion_<?php echo $ca->id; ?>" class="form-control" rows="2"></textarea>
                                                  </div>
                                                </div>  
                                                 
                                            </div>
                                             <div class="row">
                                              <div class="col-md-4">
                                                  <div class="input-group">
                                                    <label for="evindencia_<?php echo $ca->id; ?>" class="alert alert-success " role="alert">
                                                        <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span><span > Click para seleccionar las <strong>Evidencias (fotos, documentos, datos, etc)</strong></span>
                                                    </label>
                                                     <input type="file" id="evindencia_<?php echo $ca->id; ?>" class="btn btn-primary" value="Archivo" style="display: none;" >
                                                    
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

                       <!-- Start Tab 2 - Criterios Adicionales -->
                         <div class="tab-pane" id="tab_2_1">
                          <div class="nav-tabs-custom">
                             <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_2_2" data-toggle="tab">Esquema, programa o reconocimientos</a></li>
                                <li><a href="#tab_2_3" data-toggle="tab">Responsabilidad Social</a></li>
                              </ul>
                          </div>
                          
                          <div class="tab-content">
                            <div class="tab-pane active" id="tab_2_2">
                                      
                                       <?php if(!empty($esquema_programa)): ?>
                                          <?php foreach ($esquema_programa as $ve): ?> 
                                            <!--Inicio-->
                                          <div class="row">
                                              <div class="col-md-5">
                                                    <input type="hidden" class="verificación" value="<?php echo $ve->id; ?>">
                                                    <p class="form-control-static">
                                                      <?php echo $ve->nombre; ?>
                                                    </p>
                                                
                                                </div>
                                                <div class="form-group col-md-2">
                                                     <label for="cumple_invima">Calificador (0, 0.5, 1, N/A)</label>
                                                     <select class="form-control " name="cumple_invima" id="calificacion_<?php echo $ve->id; ?>">
                                                       <option value="1" selected>0</option>
                                                       <option value="2" >0.5</option>
                                                       <option value="3">1</option>
                                                       <option value="4">N/A</option>
                                                     </select>
                                                </div>
                                                <div class="col-md-4">
                                                  <div class="form-group">
                                                    <label for="" class="">Observaciones</label>
                                                    <textarea name="descripcion_ia[<?php echo $ve->id; ?>]" id="observacion_<?php echo $ve->id; ?>" class="form-control" rows="2"></textarea>
                                                  </div>
                                                </div>  
                                                 
                                            </div>
                                             <div class="row">
                                              <div class="col-md-4">
                                                  <div class="input-group">
                                                    <label for="evindencia_<?php echo $ve->id; ?>" class="alert alert-success " role="alert">
                                                        <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span><span > Click para seleccionar las <strong>Evidencias (fotos, documentos, datos, etc)</strong></span>
                                                    </label>
                                                     <input type="file" id="evindencia_<?php echo $ve->id; ?>" class="btn btn-primary" value="Archivo" style="display: none;" >
                                                    
                                                  </div>
                                                </div>
                                             </div>
                                            <!--Cierre-->
                                          <?php endforeach; ?>
                                        <?php endif; ?>
                              </div>

                              <div class="tab-pane" id="tab_2_3">
                                      
                                       <?php if(!empty($responsabilidad_social)): ?>
                                          <?php foreach ($responsabilidad_social as $resp): ?> 
                                            <!--Inicio-->
                                          <div class="row">
                                              <div class="col-md-5">
                                                    <input type="hidden" class="verificación" value="<?php echo $resp->id; ?>">
                                                    <p class="form-control-static">
                                                      <?php echo $resp->nombre; ?>
                                                    </p>
                                                
                                                </div>
                                                <div class="form-group col-md-2">
                                                     <label for="cumple_invima">Calificador (0, 0.5, 1, N/A)</label>
                                                     <select class="form-control " name="cumple_invima" id="calificacion_<?php echo $resp->id; ?>">
                                                       <option value="1" selected>0</option>
                                                       <option value="2" >0.5</option>
                                                       <option value="3">1</option>
                                                       <option value="4">N/A</option>
                                                     </select>
                                                </div>
                                                <div class="col-md-4">
                                                  <div class="form-group">
                                                    <label for="" class="">Observaciones</label>
                                                    <textarea name="descripcion_ia[<?php echo $resp->id; ?>]" id="observacion_<?php echo $resp->id; ?>" class="form-control" rows="2"></textarea>
                                                  </div>
                                                </div>  
                                                 
                                            </div>
                                             <div class="row">
                                              <div class="col-md-4">
                                                  <div class="input-group">
                                                    <label for="evindencia_<?php echo $resp->id; ?>" class="alert alert-success " role="alert">
                                                        <span class="glyphicon glyphicon-open-file" aria-hidden="true"></span><span > Click para seleccionar las <strong>Evidencias (fotos, documentos, datos, etc)</strong></span>
                                                    </label>
                                                     <input type="file" id="evindencia_<?php echo $resp->id; ?>" class="btn btn-primary" value="Archivo" style="display: none;" >
                                                    
                                                  </div>
                                                </div>
                                             </div>
                                            <!--Cierre-->
                                          <?php endforeach; ?>
                                        <?php endif; ?>
                              </div>
                          </div>


                         </div>
                         <!-- end tab -->

                         <!-- Start Tab 3 - Resultados -->
                         <div class="tab-pane" id="tab_3_1">
                            <div class="tab-pane active" id="tab_3_2">
                              <div class="panel panel-success">
                                  <div class="panel-heading">
                                      <h2 class="panel-title">Evaluacion y Puntajes totales</h2>
                                  </div>
                                  <div class="panel-body">
                                      <table class="table">
                                        <tbody>
                                          <tr>
                                            <td>Criterios de Cumplimiento de Negocios Verdes</td>
                                            <td><span  class="label label-success">0%</span></td>
                                          </tr>
                                          <tr>
                                            <td>Criterios Adicionales (ideales) Negocios Verdes</td>
                                            <td><span  class="label label-success">0%</span></td>
                                          </tr>
                                          <tr>
                                            <td><h2>Resultado</h2></td>
                                            <td><h2><span  class="label label-default">Básico</span></h2></td>
                                          </tr>

                                        </tbody>
                                      </table>
                                  </div>
                            </div>

                              <div class="panel panel-success">
                                 <div class="panel-heading">
                                  <h3 class="panel-title">Detalles del resultados Nivel 1. Criterios de Cumplimiento de Negocios verdes</h3>
                                  </div>
                                  <div class="panel-body">
                                  <table class="table">
                                      <thead>
                                      <tr>
                                        <th>Criterio</th>
                                        <th>Promedio</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>Viabilidad económica del Negocio</td>
                                          <td><span  class="label label-success">0%</span></td>
                                        </tr>
                                        <tr>
                                          <td>Impacto Ambiental Positivo y contribución a la conservación y preservación de los recursos ecosistemicos</td>
                                          <td><span  class="label label-success">0%</span></td>
                                        </tr>
                                        <tr>
                                          <td>Enfoque ciclo de vida del bien o servicio</td>
                                          <td><span  class="label label-success">0%</span></td>
                                        </tr>
                                        <tr>
                                          <td>Vida útil</td>
                                          <td><span  class="label label-success">0%</span></td>
                                        </tr>
                                        <tr>
                                          <td>Sustitución de sustancias o materiales peligrosos</td>
                                          <td><span  class="label label-success">0%</span></td>
                                        </tr>
                                        <tr>
                                          <td>Reciclabilidad y/o uso de materiales reciclados</td>
                                          <td><span  class="label label-success">0%</span></td>
                                        </tr>
                                        <tr>
                                          <td>Uso eficiente y sostenible de recursos para la producción de bienes o servicios</td>
                                          <td><span  class="label label-success">0%</span></td>
                                        </tr>
                                        <tr>
                                          <td>Responsabilidad social al interior de la empresa</td>
                                          <td><span  class="label label-success">0%</span></td>
                                        </tr>
                                        <tr>
                                          <td>Responsabilidad social en la cadena de valor de la empresa</td>
                                          <td><span  class="label label-success">0%</span></td>
                                        </tr>
                                        <tr>
                                          <td>Responsabilidad social al exterior de la empresa</td>
                                          <td><span  class="label label-success">0%</span></td>
                                        </tr>
                                        <tr>
                                          <td>Comunicación de atributos del bien y servicio</td>
                                          <td><span  class="label label-success">0%</span></td>
                                        </tr>
                                      </tbody>
                                      <tfoot>
                                         <tr class="success">
                                          <th>Puntaje Final</th>
                                          <th><h4><span  class="label label-success">0%</span></h4></th>
                                        </tr>
                                      </tfoot>
                                  </table>
                                  </div>
                              </div>

                                 <div class="panel panel-success">
                                  <div class="panel-heading">
                                  <h3 class="panel-title">Detaller del resultados Nivel 2. Criterios Adicionales de Negocios verdes</h3>
                                  </div>
                                  <div class="panel-body">
                                   <table class="table">
                                      <thead>
                                      <tr>
                                        <th>Criterio</th>
                                        <th>Promedio</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>Esquemas, programas o reconocimientos implementados o recibidos</td>
                                          <td><span  class="label label-success">0%</span></td>
                                        </tr>
                                        <tr>
                                          <td>Responsabilidad social al interior de la empresa adicional</td>
                                          <td><span  class="label label-success">0%</span></td>
                                        </tr>
                                      </tbody>
                                      <tfoot>
                                        <tr class="success">
                                          <th>Puntaje Final</th>
                                          <th><h4><span  class="label label-success">0%</span></h4></th>
                                        </tr>
                                      </tfoot>
                                  </table>
                                  </div>
                            </div>
                         </div>
                         <!-- end tab -->
                    </div>
                   </div>
              </div>
            </div>
        </div>
    </section>
</div>


