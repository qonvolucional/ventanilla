
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Formato de Información AS
        <small class="text-success">Agregar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Administración</a></li>
        <li><a class="pull-right" href="<?php echo base_url(); ?>emprendimiento/FormatoInscripcion">Formato de Inscripción</a></li>
        <li class="active">Agregar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box box-success">
            <!-- .box-header -->
            <div class="box-header">

              <div class="form-group row">
                <label for="lista-emprendimiento" class="col-sm-2 text-right">Emprendimiento:</label>
                <div class="col-sm-8">
                  <input disabled type="text" name="razon_social" id="razon_social" class="form-control" value="<?php echo (!empty($empresa))? $empresa->razon_social:''; ?>">
                  <input type="hidden" name="empresa_id" id="empresa_id" value="<?php echo (!empty($empresa))? $empresa->id:''; ?>">
                  <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
                </div>

              </div>

            </div>
            <!-- /.box-header -->
            <!-- Apertura ./box-body -->
            <div class="box-body">
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <!-- nav-tabs -->
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">1.1 Tenencia de la tierra</a></li>
                  <li><a href="#tab_2" data-toggle="tab">1.2 Leg. Ambiental Colombia</a></li>
                  <li><a href="#tab_3" data-toggle="tab">2. Certificaciones</a></li>
                  <li><a href="#tab_4" data-toggle="tab">3. Sostenibilidad Ambiental</a></li>
                  <li><a href="#tab_5" data-toggle="tab">4. Sostenibilidad Social</a></li>
                  <li><a href="#tab_6" data-toggle="tab">5. Sostenibilidad Economica</a></li>
                </ul>
                <!-- /.nav-tabs -->
                <!-- tab-content --> 
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <form role="form" id="almacenarTenenciaTierra">
                      <div class="box-header with-border bg-success">
                        <h3 class="box-title text-success">1.1 TENENCIA DE LA TIERRA</h3>
                      </div>
                      <blockquote class="bg-warning">
                        <small class="text-success">Indique y describa el (los) tipo (s) de tenencia de tierra en su área de influencia y/o forma (s) de acceso a los recursos (<b>Marcar opción</b>)
                        </small>
                        <small class="text-success">El área de influencia corresponde al predio del cual es propietario o donde tiene derecho legal, o algún tipo de acuerdo para su uso. Descripción (tiempo, desde y hasta cuándo, pago por uso, condiciones, obligaciones, derechos, permisos, etc.)</small>
                      </blockquote>
                      <div class="box-body tenencia_tierra">
                        <?php if(!empty($tenencia_tierra)): ?>
                          <?php foreach ($tenencia_tierra as $tt): ?> 
                            <!--Inicio-->
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-check">  
                                  <label class="checkbox-inline" for="">
                                    <input class="form-check-input" type="checkbox" name="tenencia_tierra" id="tenencia_tierra" value="<?php echo $tt->id; ?>" ><?php echo $tt->nombre; ?>
                                  </label>
                                </div>
                              </div>
              
                              <div class="col-md-9">
                                <div class="form-group">
                                  <label for="" class="">Descripción</label>
                                  <textarea disabled name="descripcion_tt" id="descripcion_tt<?php echo $tt->id; ?>" class="form-control no" rows="2"></textarea>
                                </div>
                              </div>  
                            </div>
                            <!--Cierre-->
                          <?php endforeach; ?>
                        <?php endif; ?>
                        <!--Inicio OTRO-->
                        <div class="form-group row">
                          <div class="col-sm-5">
                            <div class="form-group">
                              <label for="otro" class="">Otro. ¿Cuál?</label>
                              <input type="text" name="otro" id="otro" class="form-control otro_tenencia_tierra" placeholder="¿Cuál otro?">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="d_otro" class="">Descripción</label>
                              <input type="text" name="d_otro" id="d_otro" class="form-control otro_tenencia_tierra" placeholder="Descripción">
                            </div>
                          </div>
                          <div class="col-sm-1 btn-centrar">
                            <a href="" class="btn btn-success btn-sm btn-circle pull-left" id="agregar_otro" name="agregar_otro"><span class="fa fa-plus"></span></a>
                          </div>    
                        </div>
                        <!--Cierre-->
                      </div>
                      <div class="box-footer">
                          <a href="#tab_2"  data-toggle="tab" id="btn-informacion" class="btn btn-primary pull-right" data-form="almacenarTenenciaTierra">Guardar y Continuar</a>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <form role="form" class="" id="almacenarLegislacionAmbiental">
                      <div class="box-header with-border bg-success">
                        <h3 class="box-title center text-success">1.2 LEGISLACIÓN AMBIENTAL COLOMBIANA</h3>
                      </div>
                      <blockquote class="bg-warning">
                        <small class="text-success">¿Cumple su iniciativa con todos los requisitos exigidos por la legislación colombiana para su producto?</small>
                        <small class="text-success">Descripción (especies, productos, cantidades, área, etc). En caso de haber sido negado, especificar mótivo.</small>
                      </blockquote>
                      <blockquote style="margin: 0px!important; border-color: green; padding-left: 5px!important;" class="bg-warning">
                        <small class="text-success">Registro</small>
                      </blockquote>
                      <div class="box-body content">
                        <?php if(!empty($registro)): ?>
                          <?php foreach($registro as $r): ?>
                            <label style="text-transform: uppercase;"><?php echo $r->nombre; ?></label>
                            <div class="row">
                             <div class="form-group col-md-3">
                               <label>Aplica Registro</label>
                               <select class="form-control aplica registro" data-main="registro" data-cod="<?php echo $r->id; ?>" name="aplica_registro<?php echo $r->id; ?>" id="aplica_registro<?php echo $r->id; ?>">
                                 <option selected value="">Seleccione opción</option>
                                 <option value="1">SI</option>
                                 <option value="2">NO</option>
                               </select>
                             </div>
                             <div class="form-group col-md-3">
                               <label for="cumple_registro">Cumple Registro</label>
                               <select disabled class="form-control" name="cumple_registro" id="cumple_registro<?php echo $r->id; ?>">
                                 <option selected value="">Seleccione opción</option>
                                 <option value="1">SI</option>
                                 <option value="2">NO</option>
                               </select> 
                             </div>
                             <div class="form-group col-md-3">
                               <label for="vigencia_registro">Vigencia</label>
                               <input disabled type="text" name="vigencia_registro" id="vigencia_registro<?php echo $r->id; ?>" class="form-control">
                             </div>
                             <div class="form-group col-md-3">
                               <label for="observacion_registro">Observación</label>
                               <input disabled type="text" name="observacion_registro" id="observacion_registro<?php echo $r->id; ?>" class="form-control">
                             </div>
                           </div>
                          <?php endforeach; ?>  
                        <?php endif;?>
                      </div>
                      <blockquote style="margin: 0px!important; border-color: green; padding-left: 5px!important;" class="bg-warning">
                        <small class="text-success">Permiso</small>
                      </blockquote>
                      <div class="box-body content">
                        <?php if(!empty($permiso)): ?>
                          <?php foreach($permiso as $p): ?>
                            <label style="text-transform: uppercase;"><?php echo $p->nombre; ?></label>
                            <div class="row">
                             <div class="form-group col-md-3">
                               <label>Aplica Registro</label>
                               <select class="form-control aplica permiso" data-main="permiso" data-cod="<?php echo $p->id; ?>" name="aplica_permiso<?php echo $p->id; ?>" id="aplica_permiso<?php echo $p->id; ?>">
                                 <option selected value="">Seleccione opción</option>
                                 <option value="1">SI</option>
                                 <option value="2">NO</option>
                               </select>
                             </div>
                             <div class="form-group col-md-3">
                               <label for="cumple_permiso">Cumple Registro</label>
                               <select disabled class="form-control" name="cumple_permiso" id="cumple_permiso<?php echo $p->id; ?>">
                                 <option selected value="">Seleccione opción</option>
                                 <option value="1">SI</option>
                                 <option value="2">NO</option>
                               </select> 
                             </div>
                             <div class="form-group col-md-3">
                               <label for="vigencia_permiso">Vigencia</label>
                               <input disabled type="text" name="vigencia_permiso" id="vigencia_permiso<?php echo $p->id; ?>" class="form-control">
                             </div>
                             <div class="form-group col-md-3">
                               <label for="observacion_permiso">Observación</label>
                               <input disabled type="text" name="observacion_permiso" id="observacion_permiso<?php echo $p->id; ?>" class="form-control">
                             </div>
                           </div>
                          <?php endforeach; ?>  
                        <?php endif;?>
                      </div>
                      <blockquote style="margin: 0px!important; border-color: green; padding-left: 5px!important;" class="bg-warning">
                        <small class="text-success">Licencia</small>
                      </blockquote>
                      <div class="box-body">
                        <?php if(!empty($licencia)): ?>
                          <?php foreach($licencia as $l): ?>
                            <label style="text-transform: uppercase;"><?php echo $l->nombre; ?></label>
                            <div class="row">
                             <div class="form-group col-md-3">
                               <label>Aplica Registro</label>
                               <select class="form-control aplica licencia" data-main="licencia" data-cod="<?php echo $l->id; ?>" name="aplica_licencia<?php echo $l->id; ?>" id="aplica_licencia<?php echo $l->id; ?>">
                                 <option selected value="">Seleccione opción</option>
                                 <option value="1">SI</option>
                                 <option value="2">NO</option>
                               </select>
                             </div>
                             <div class="form-group col-md-3">
                               <label for="cumple_licencia">Cumple Registro</label>
                               <select disabled class="form-control" name="cumple_licencia" id="cumple_licencia<?php echo $l->id; ?>">
                                 <option selected value="">Seleccione opción</option>
                                 <option value="1">SI</option>
                                 <option value="2">NO</option>
                               </select> 
                             </div>
                             <div class="form-group col-md-3">
                               <label for="vigencia_licencia">Vigencia</label>
                               <input disabled type="text" name="vigencia_licencia" id="vigencia_licencia<?php echo $l->id; ?>" class="form-control">
                             </div>
                             <div class="form-group col-md-3">
                               <label for="observacion_licencia">Observación</label>
                               <input disabled type="text" name="observacion_licencia" id="observacion_licencia<?php echo $l->id; ?>" class="form-control">
                             </div>
                           </div>
                          <?php endforeach; ?>  
                        <?php endif;?>  
                      </div>
                      <blockquote style="margin: 0px!important; border-color: green; padding-left: 5px!important;" class="bg-warning">
                        <small class="text-success">OTROS</small>
                      </blockquote>
                      <div class="box-body">
                       <div class="row">
                         <div class="form-group col-md-3">
                           <label for="otro_legislacion_ambiental">Otro. ¿Cúal?</label>
                           <input type="text" name="otro_legislacion_ambiental" id="otro_legislacion_ambiental" class="form-control">
                         </div>
                         <div class="form-group col-md-3">
                           <label for="cumple_otro_leg_ambiental">Cumple</label>
                           <select class="form-control" name="cumple_otro_leg_ambiental" id="cumple_otro_leg_ambiental">
                             <option selected value="">Seleccione opción</option>
                             <option value="1">SI</option>
                             <option value="2">NO</option>
                           </select> 
                         </div>
                         <div class="form-group col-md-5">
                           <label for="observacion_otro_leg_ambiental">Observación</label>
                           <input type="text" name="observacion_otro_leg_ambiental" id="observacion_otro_leg_ambiental" class="form-control">
                         </div>
                         <div class="form-group col-md-1">
                           <a href="" class="btn btn-success btn-circle btn-lg pull-right"><span class="fa fa-plus"></span></a>
                         </div>
                       </div>
                      </div>
                      <div class="box-footer">
                        <a href="#tab_3"  data-toggle="tab" id="btn-legislacion" data-form="almacenarLegislacionAmbiental" class="btn btn-primary pull-right">Guardar y Continuar</a>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    <form role="form" id="almacenarCertificacion">
                      <div class="box-header with-border bg-success">
                        <h3 class="box-title center text-success">2. INFORMACIÓN SOBRE CERTIFICACIONES</h3>
                      </div>
                      <div class="box-body">
                        <div class="row">
                          <div class="form-group col-sm-10">
                              <label for="comunidades_locales">¿La iniciativa involucra a miembros de las comunidades locales?</label>
                              <select id="comunidades_locales" name="comunidades_locales" class="form-control estado" data-visibility="certificacion">
                                <option value="1">SI</option>
                                <option value="2" selected>NO</option>
                              </select>
                          </div>
                        </div>
                        
                        <div id="certificacion" style="display: none;">
                          <blockquote class="bg-warning">
                            <small class="text-success"><b>Certificación</b></small>
                            <small class="text-success">(Seleccione las opciones con la cual cumpla)</small>
                          </blockquote>
                          <?php if(!empty($certificacion)): ?>
                          <?php foreach ($certificacion as $ce): ?> 
                            <!--Inicio-->
                            <div class="form-group row">
                              <div class="col-md-3">
                                <div class="form-check">  
                                  <label class="checkbox-inline" for=""><input class="form-check-input certificacion" type="checkbox" data-main="certificacion" name="certificacion[]" id="certificacion<?php echo $ce->id; ?>" value="<?php echo $ce->id; ?>"><?php echo $ce->nombre; ?></label>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                  <label>Etapa</label>
                                  <select disabled class="form-control" name="etapa_certificacion[<?php echo $ce->id; ?>]" id="etapa_certificacion<?php echo $ce->id; ?>">
                                    <option selected>Selecciona una opción</option>
                                    <option value="1">Propuesta</option>
                                    <option value="2">En proceso</option>
                                    <option value="3">Emitida</option>
                                  </select>
                                </div>
                              </div>  
                              <div class="col-md-2">
                                <div class="form-group">
                                  <label for="" class="">Vigencia</label>
                                  <input type="text" disabled name="vigencia_certificacion[<?php echo $ce->id; ?>]" id="vigencia_certificacion<?php echo $ce->id; ?>" class="form-control" rows="2">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="" class="">Observación</label>
                                  <textarea disabled name="observacion_certificacion[<?php echo $ce->id; ?>]" id="observacion_certificacion<?php echo $ce->id; ?>" class="form-control"></textarea>
                                </div>
                              </div>    
                            </div>
                            <!--Cierre-->
                          <?php endforeach; ?>
                        <?php endif; ?>
                        <!--Inicio OTRO-->
                        <div class="form-group row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="otro" class="">Otro. ¿Cuál?</label>
                              <input type="text" name="otro_certificacion" id="otro_certificacion" class="form-control" placeholder="¿Cuál otro?">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Etapa</label>
                              <select disabled class="form-control" name="otro_etapa_certificacion" id="otro_etapa_certificacion">
                                <option selected>Selecciona una opción</option>
                                <option value="1">Propuesta</option>
                                <option value="2">En proceso</option>
                                <option value="3">Emitida</option>
                              </select>
                            </div>
                          </div>  
                          <div class="col-md-2">
                            <div class="form-group">
                              <label for="" class="">Vigencia</label>
                              <input type="text" disabled name="otro_vigencia_certificacion" id="otro_vigencia_certificacion" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="" class="">Observación</label>
                              <textarea disabled name="otro_observacion_certificacion" id="otro_observacion_certificacion" class="form-control" rows="1"></textarea>
                            </div>
                          </div>
                          <div class="col-md-1 btn-centrar">
                            <button class="btn btn-success btn-sm btn-circle pull-left" id="btn-agregarElemento" name=""><span class="fa fa-plus"></span></button>
                          </div>    
                        </div>
                        <!--Cierre-->
                        </div>
                        
                        
                      </div>
                      <div class="box-footer">
                        <a href="#tab_4"  data-toggle="tab" id="btn-certificacion" data-form="almacenarCertificacion" class="btn btn-primary pull-right">Guardar y Continuar</a>
                        </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_4">
                    <form role="form"id="almacenarSostenibilidadAmbiental">
                      <div class="box-header with-border bg-success">
                        <h3 class="box-title center text-success">3. INFORMACIÓN DE SOSTENIBILIDAD AMBIENTAL</h3>
                      </div>
                      <blockquote style="margin: 0px!important; border-color: green; padding-left: 5px!important;" class="bg-warning">
                        <small class="text-success"><b>1. Prácticas de conservación</b></small>
                        <small class="text-success">Por favor indique el tipo de práctica de conservación empleada en el área de influencia de la iniciativa.</small>
                        <small class="text-success">Descripción (Especies, métodos, técnicas, frecuencia)</small>
                      </blockquote>
                      <div class="box-body">

                        <?php if(!empty($practica_conservacion)): ?>
                          <?php foreach($practica_conservacion as $pc): ?>
                            <!--Inicio-->
                            <div class="form-group row">
                              <div class="col-sm-3">
                                <div class="form-check">
                                  <label class="checkbox-inline">
                                     <input class="form-check-input conservacion" type="checkbox" name="practica_conservacion[]" id="practica_conservacion<?php echo $pc->id; ?>" value="<?php echo $pc->id; ?>"><?php echo $pc->nombre; ?>
                                  </label>
                                </div>
                              </div>
                              <div class="col-sm-3">
                                <label for="">Área</label>
                                <input disabled type="text" name="area_practica_conservacion[<?php echo $pc->id; ?>]" id="area_practica_conservacion<?php echo $pc->id; ?>" class="form-control" placeholder="Área">
                              </div> 
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label for="" class="">Descripción</label>
                                  <textarea disabled rows="1" name="descripcion_practica_conservacion[<?php echo $pc->id; ?>]" id="descripcion_practica_conservacion<?php echo $pc->id; ?>" class="form-control" placeholder="Descripción"></textarea>
                                </div>
                              </div>  
                            </div>
                            <!--Cierre-->
                          <?php endforeach; ?>
                        <?php endif; ?>
                        
                        <!--Inicio OTRO-->
                        <div class="form-group row">
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label for="otro" class="">Otro. ¿Cuál?</label>
                              <input type="text" name="otro_conservacion" id="otro_conservacion" class="form-control" placeholder="¿Cuál otro?">
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label for="a_otro" class="">Área</label>
                              <input type="text" name="a_otro_conservacion" id="a_otro_conservacion" class="form-control" placeholder="Área">
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-group">
                              <label for="d_otro" class="">Descripción</label>
                              <input type="text" name="d_otro_conservacion" id="d_otro_conservacion" class="form-control" placeholder="Descripción">
                            </div>
                          </div>
                          <div class="col-sm-1 btn-centrar">
                            <button class="btn btn-success btn-sm btn-circle pull-left" id="" name=""><span class="fa fa-plus"></span></button>
                          </div>    
                        </div>
                        <!--Cierre-->
                      </div>
                      <blockquote style="margin: 0px!important; border-color: green; padding-left: 5px!important;" class="bg-warning">
                        <small class="text-success">2. Área de los ecosistemas</small>
                        <small class="text-success">Si la respuesta es si, señala la (s) opción (es) e indique el área del ecosistema sobre los cuales su actividad tiene influencia directa.</small>
                      </blockquote>
                      <div class="box-body">
                        <?php if(!empty($area_ecosistema)): ?>
                          <?php foreach($area_ecosistema as $ac): ?>
                            <!--Inicio-->
                            <div class="form-group row">
                              <div class="col-sm-3">
                                <div class="form-check">
                                  <label class="checkbox-inline">
                                     <input class="form-check-input ecosistema" type="checkbox" name="area_ecosistema[]" id="area_ecosistema<?php echo $ac->id; ?>" value="<?php echo $ac->id; ?>"><?php echo $ac->nombre; ?>
                                  </label>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <label for="">Área</label>
                                <input disabled type="text" name="area_area_ecosistema[<?php echo $ac->id; ?>]" id="area_area_ecosistema<?php echo $ac->id; ?>" class="form-control" placeholder="Área">
                              </div>  
                            </div>
                            <!--Cierre-->
                          <?php endforeach; ?>
                        <?php endif; ?>
                        
                        <!--Inicio OTRO-->
                        <div class="form-group row">
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label for="otro" class="">Otro. ¿Cuál?</label>
                              <input type="text" name="otro" id="otro_ecosistema" class="form-control" placeholder="¿Cuál otro?">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="d_otro" class="">Área</label>
                              <input type="text" name="area_otro_ecosistema" id="area_otro_ecosistema" class="form-control" placeholder="Área">
                            </div>
                          </div>
                          <div class="col-sm-1 btn-centrar">
                            <button class="btn btn-success btn-sm btn-circle pull-left" id="" name=""><span class="fa fa-plus"></span></button>
                          </div>    
                        </div>
                        <!--Cierre-->
                      </div>
                      <blockquote style="margin: 0px!important; border-color: green; padding-left: 5px!important;" class="bg-warning">
                        <small class="text-success">3. Plan de manejo o Plan de uso</small>
                        <small class="text-success">¿Cuentas con un plan de manejo o plan de uso y aprovechamiento de la especie o tiene un documento en el cual se especifique cada uno de los objetivos, actividades, impactos y sistema de seguimiento de su sistema de producción?</small>
                      </blockquote>
                      <div class="box-body">

                        <?php if(!empty($plan_manejo)): ?>
                          <?php foreach($plan_manejo as $pm): ?>
                            <!--Inicio-->
                            <div class="form-group row">
                              <div class="col-sm-3">
                                <div class="form-check">
                                  <label class="checkbox-inline">
                                     <input class="form-check-input plan_manejo" type="checkbox" name="plan_manejo[]" id="plan_manejo<?php echo $pm->id; ?>" value="<?php echo $pm->id; ?>"><?php echo $pm->nombre; ?>
                                  </label>
                                </div>
                              </div>
                              <div class="col-sm-2">
                                <div class="form-group">
                                  <label for="plan_manejo_aplica[<?php echo $pm->id; ?>]">Aplica</label>
                                  <select disabled class="form-control" name="plan_manejo_aplica[<?php echo $pm->id; ?>]" id="plan_manejo_aplica<?php echo $pm->id; ?>">
                                    <option value="1">NO APLICA</option>
                                    <option value="2">APLICA</option>
                                  </select>
                                </div>  
                              </div>
                              <div class="col-sm-2">
                                <div class="form-group">
                                  <label for="">Cumple</label>
                                  <select disabled class="form-control" name="plan_manejo_cumple[<?php echo $pm->id; ?>]" id="plan_manejo_cumple<?php echo $pm->id; ?>">
                                    <option value="1">NO CUMPLE</option>
                                    <option value="2">CUMPLE</option>
                                  </select>
                                </div>  
                              </div>
                              <div class="col-sm-2">
                                <label for="">Vigencia</label>
                                <input disabled type="text" name="plan_manejo_vigencia[<?php echo $pm->id; ?>]" id="plan_manejo_vigencia<?php echo $pm->id; ?>" class="form-control" placeholder="Vigencia">
                              </div> 
                              <div class="col-sm-3">
                                <div class="form-group">
                                  <label for="obs_pm" class="">Observación</label>
                                  <textarea disabled rows="2" name="plan_manejo_observacion[<?php echo $pm->id; ?>]" id="plan_manejo_observacion<?php echo $pm->id; ?>" class="form-control" placeholder="Observación"></textarea>
                                </div>
                              </div>  
                            </div>
                            <!--Cierre-->
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </div>
                      <div class="box-footer">
                        <a href="#tab_5"  data-toggle="tab" id="btn-sostenibilidadAmbiental" data-form="almacenarSostenibilidadAmbiental" class="btn btn-primary pull-right">Guardar y Continuar</a>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_5">
                    <form role="form" id="almacenarSostenibilidadSocial">
                      <div class="box-header with-border bg-success">
                        <h3 class="box-title center text-success">4. INFORMACIÓN DE SOSTENIBILIDAD SOCIAL</h3>
                      </div>
                      <div class="box-body">
                        <div class="row">
                          <div class="form-group col-sm-10">
                              <label for="sa_comunidades_locales">¿La iniciativa involucra a miembros de las comunidades locales?</label>
                              <select id="sa_comunidades_locales" name="sa_comunidades_locales" class="form-control estado" data-visibility="involucra">
                                <option selected value="">Seleccione...</option>
                                <option value="1">SI</option>
                                <option value="2">NO</option>
                              </select>
                          </div>
                        </div>
                        <div id="involucra" style="display: none;">
                          <blockquote class="bg-warning">
                            <small class="text-success"><b>¿Cómo los involucras los miembros de las comunidades locales?</b></small>
                          </blockquote>
                          <div class="row">
                            <div class="form-group col-md-12">
                                <?php if(!empty($involucra)): ?>
                                  <?php foreach ($involucra as $inv ):?>
                                    <div class="checkbox">
                                      <label><input type="checkbox" class="form-check-input involucra" id="involucra<?php echo $inv-> id; ?>" name="involucra[<?php echo $inv-> id; ?>]" value="<?php echo $inv->id; ?>"><?php echo $inv->nombre; ?></label>
                                    </div>
                                  <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                          </div>
                          <!--Inicio OTRO-->
                          <div class="form-group row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="otro" class="">Otro. ¿Cuál?</label>
                                <select name="otro_involucra[]" id="otro_involucra" class="form-control">
                                  <option selected value="">Selecciona una opción</option>
                                  <option value="1">SI</option>
                                  <option value="2">NO</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-5">
                              <div class="form-group">
                                <label for="" class="">Nombre</label>
                                <input type="text" disabled name="otro_item_involucra" id="otro_item_involucra" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-1 btn-centrar">
                              <button class="btn btn-success btn-sm btn-circle pull-left" id="" name=""><span class="fa fa-plus"></span></button>
                            </div>    
                          </div>
                          <!--Cierre-->
                        </div>    
                        <div class="row">
                          <div class="form-group col-sm-10">
                              <label for="sa_miembros_comunales">¿La iniciativa realiza actividades con los miembros de las comunidades locales?</label>
                              <select id="sa_miembros_comunales" name="sa_miembros_comunales" class="form-control estado" data-visibility="actividad_involucra_cc">
                                <option selected value="">Seleccione...</option>
                                <option value="1">SI</option>
                                <option value="2">NO</option>
                              </select>
                          </div>
                        </div>
                        <div id="actividad_involucra_cc" style="display: none;">
                        <blockquote class="bg-warning">
                          <small class="text-success"><b>Actividades con miembros de las comunidades locales</b></small>
                        </blockquote>
                        <div class="row">
                          <div class="form-group col-md-12">
                              <?php if(!empty($actividad_involucra)): ?>
                                <?php foreach ($actividad_involucra as $ac ):?>
                                  <div class="row">
                                    <div class="col-md-3">
                                      <div class="form-check">  
                                        <label class="checkbox-inline" for="">
                                          <input class="form-check-input actividad_involucra" type="checkbox" name="actividad_involucra[]" id="actividad_involucra<?php echo $ac->id; ?>" value="<?php echo $ac->id; ?>" ><?php echo $ac->nombre; ?>
                                        </label>
                                      </div>
                                    </div>
                    
                                    <div class="col-md-5">
                                      <div class="form-group">
                                        <label for="" class="">Descripción</label>
                                        <textarea disabled name="descripcion_ac[<?php echo $ac->id; ?>]" id="descripcion_ac<?php echo $ac->id; ?>" class="form-control" rows="2"></textarea>
                                      </div>
                                    </div>

                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label for="">Fuente de recursos</label>
                                        <select disabled name="fuente_recursos_ac[<?php echo $ac->id;?>]" id="fuente_recursos_ac<?php echo $ac->id;?>" class="form-control">
                                          <option value="1">Lo realizó con recursos propios</option>
                                          <option value="2">Gestionó los recursos ante otra entidad</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                <?php endforeach; ?>
                              <?php endif; ?>
                          </div>
                        </div>
                        <!--Inicio OTRO-->
                        <div class="form-group row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="otro" class="">Otro. ¿Cuál?</label>
                              <input type="text" name="otra_actividad_involucra" id="otra_actividad_involucra" class="form-control" placeholder="Nombre de otra actividad">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="form-group">
                              <label for="" class="">Descripcion</label>
                              <input type="text" disabled name="desc_otra_actividad_involucra" id="desc_otra_actividad_involucra" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="">Fuente de recursos</label>
                              <select name="otra_fuente_recursos_ac[1]" id="otra_fuente_recursos_ac" class="form-control">
                                <option value="1">Lo realizó con recursos propios</option>
                                <option value="2">Gestionó los recursos ante otra entidad</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-1 btn-centrar">
                            <button class="btn btn-success btn-sm btn-circle pull-left" id="" name=""><span class="fa fa-plus"></span></button>
                          </div>    
                        </div>
                        <!--Cierre-->
                        </div> 
                        <div class="row">
                          <div class="form-group col-sm-10">
                              <label for="sa_programa_trabajo">¿Su iniciativa tiene programas para los trabajadores, empleados?</label>
                              <select id="sa_programa_trabajo" name="sa_programa_trabajo" class="form-control estado" data-visibility="programa_empleados">
                                <option selected value="">Seleccione...</option>
                                <option value="1">SI</option>
                                <option value="2">NO</option>
                              </select>
                          </div>
                        </div>
                        <div id="programa_empleados" style="display:none;">
                        <blockquote class="bg-warning">
                          <small class="text-success"><b>Programas para los empleados</b></small>
                        </blockquote>
                        <div class="row">
                          <div class="form-group col-md-12">
                              <?php if(!empty($actividad_involucra)): ?>
                                <?php foreach ($actividad_involucra as $pe ):?>
                                  <div class="row">
                                    <div class="col-md-3">
                                      <div class="form-check">  
                                        <label class="checkbox-inline" for="">
                                          <input class="form-check-input programa" type="checkbox" name="programa_empleado[]" id="programa_empleado<?php echo $pe->id; ?>" value="<?php echo $pe->id; ?>" ><?php echo $pe->nombre; ?>
                                        </label>
                                      </div>
                                    </div>
                    
                                    <div class="col-md-9">
                                      <div class="form-group">
                                        <label for="" class="">Descripción</label>
                                        <textarea disabled name="descripcion_pe[<?php echo $pe->id; ?>]" id="descripcion_pe<?php echo $pe->id; ?>" class="form-control" rows="2"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                <?php endforeach; ?>
                              <?php endif; ?>
                          </div>
                        </div>
                        <!--Inicio OTRO-->
                        <div class="form-group row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="otro" class="">Otro. ¿Cuál?</label>
                              <input type="text" name="otra_programa_empleado[1]" id="otra_programa_empleado" class="form-control" placeholder="Nombre de otra actividad">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="form-group">
                              <label for="" class="">Descripcion</label>
                              <input type="text" disabled name="desc_otra_programa_empleado[1]" id="desc_otra_programa_empleado" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-1 btn-centrar">
                            <button class="btn btn-success btn-sm btn-circle pull-left" id="" name=""><span class="fa fa-plus"></span></button>
                          </div>    
                        </div>
                        <!--Cierre-->
                        </div> 
                        <div class="row">
                          <div class="form-group col-sm-10">
                              <label for="sa_apoyado">¿La iniciativa o el empresario han recibido algún apoyo por parte de una institución pública o privada?</label>
                              <select id="sa_apoyado" name="sa_apoyado" class="form-control estado" data-visibility="apoyos_entidad">
                                <option selected>Seleccione...</option>
                                <option value="1">SI</option>
                                <option value="2">NO</option>
                              </select>
                          </div>
                        </div>
                        <div id="apoyos_entidad" style="display: none;">
                          <blockquote class="bg-warning">
                            <small class="text-success"><b>Apoyo por parte de entidades públicas y/o privadas</b></small>
                            <small class="text-success">Enliste el tipo de apoyo recibido</small>
                          </blockquote>
                          <div class="row">
                            <div class="form-group col-md-12">
                                <?php for($i=1; $i<=5; $i++): ?>
                                    <div class="row">
                                      <div class="col-md-3">
                                        <div class="form-group">  
                                         <label>Tipo de apoyo</label>
                                         <input type="text" name="tipo_apoyo[<?php echo $i; ?>]" id="tipo_apoyo<?php echo $i; ?>" class="form-control apoyos" data-cod="<?php echo $i; ?>" placeholder="Tipo de apoyo">
                                        </div>
                                      </div>                     
                                      <div class="col-md-5">
                                        <div class="form-group">
                                          <label for="" class="">Entidad</label>
                                          <input disabled name="apoyo_entidad[<?php echo $i; ?>]" id="apoyo_entidad<?php echo $i; ?>" class="form-control" placeholder="Entidad quien apoyo">
                                        </div>
                                      </div>

                                      <div class="col-md-2">
                                        <div class="form-group">
                                          <label for="">Tipo de entidad</label>
                                          <select disabled name="apoyo_tipo_entidad[<?php echo $ac->id;?>]" id="apoyo_tipo_entidad<?php echo $ac->id;?>" class="form-control">
                                            <option value="1">Pública</option>
                                            <option value="2">Privada</option>
                                            <option value="3">ONG</option>
                                            <option value="4">Otra</option>
                                          </select>
                                        </div>
                                      </div>

                                      <div class="col-md-2">
                                        <div class="form-group">
                                          <label for="">Año</label>
                                          <input disabled type="text" name="anio_apoyo[<?php echo $i; ?>]" id="anio_apoyo<?php echo $i; ?>" class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                  <?php endfor; ?>
                            </div>
                          </div>
                      </div>
                      </div>
                      <div class="box-header">
                        <a href="#tab_6"  data-toggle="tab" data-form="almacenarSostenibilidadSocial" id="btn-social" class="btn btn-primary pull-right">Guardar y Continuar</a>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_6">
                    <form role="form">
                      <div class="box-header with-border bg-success">
                        <h3 class="box-title center text-success">5. INFORMACIÓN DE SOSTENIBILIDAD ECONOMICA</h3>
                      </div>
                      <div class="box-body">
                        <!-- Comienzo de row-->
                        <div class="row">
                          <blockquote class="bg-warning">
                            <small class="text-success">Bien o servicio líder</small>
                          </blockquote>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Bien o Servicio</label>
                              <input type="text" name="bien[1]" id="bien[1]" class="form-control" placeholder="Servicio o Bien">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Unidades vendidas</label>
                              <input type="number" name="unidad_vendida[1]" id="unidad_vendida[1]" class="form-control" placeholder="Unidades vendidas">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Unidad de medida</label>
                              <select name="unidad_medida[1]" id="unidad_medida[1]" class="form-control">
                                <option>Unidad 1</option>
                                <option>Unidad 1</option>
                                <option>Unidad 1</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Costos de producción</label>
                              <input type="number" name="costo_produccion[1]" id="costo_produccion[1]" class="form-control" value="0">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Precio Unitario de Venta</label>
                              <input type="number" name="precio_unitario_venta[1]" id="precio_unitario_venta[1]" class="form-control" placeholder="Precio Unitario de Venta">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Ganancia por Unidad</label>
                              <input disabled type="number" name="ganancia_unidad[1]" id="ganancia_unidad[1]" class="form-control" placeholder="Servicio o Bien">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Ventas Anuales</label>
                              <input disabled type="text" name="venta_anual[1]" id="venta_anual[1]" class="form-control" placeholder="Ventas anuales">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Los ingresos son superiores a los costos</label>
                              <select name="ingresos_vs_costos[1]" id="ingresos_vs_costos[1]" class="form-control">
                                <option>Selecciona una opción</option>
                                <option value="1">SI</option>
                                <option value="2">NO</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <blockquote class="bg-warning">
                            <small class="text-success">Costos</small>
                          </blockquote>
                          <div class="col col-md-4">
                              <label for="" class="border">Costo promedio de insumos totales</label>
                              <div class="row">
                                <div class="form-group col col-md-4">
                                  <label for="insumo_semanal">Semanal</label>
                                  <input type="number" name="insumos_semanal" class="form-control" id="insumos_semanal" value="0">
                                </div>
                                <div class="form-group col col-md-4">
                                  <label for="insumo_mensual">Mensual</label>
                                  <input type="number" name="insumo_mensual" class="form-control" id="insumo_mensual" value="0">
                                </div>
                                <div class="form-group col col-md-4">
                                  <label for="insumo_anual">Total</label>
                                  <input disabled type="number" name="insumo_anual" class="form-control" id="insumo_anual" value="0">
                                </div>
                              </div>
                          </div>

                          <div class="col col-md-4">
                              <label for="" class="border">Costo promedio de mano de obra</label>
                              <div class="row">
                                <div class="form-group col col-md-4">
                                  <label for="mano_obra_semanal">Semanal</label>
                                  <input type="number" name="mano_obra_semanal" class="form-control" id="mano_obra_semanal" value="0">
                                </div>
                                <div class="form-group col col-md-4">
                                  <label for="mano_obra_mensua">Mensual</label>
                                  <input type="number" name="mano_obra_mensua" class="form-control" id="mano_obra_mensua" value="0">
                                </div>
                                <div class="form-group col col-md-4">
                                  <label for="mano_obra_anual">Anual</label>
                                  <input type="number" name="mano_obra_anual" class="form-control" id="mano_obra_anual" value="0">
                                </div>
                              </div>
                          </div>

                          <div class="col col-md-4">
                              <label for="" class="border">Total de ventas realizadas</label>
                              <div class="row">
                                <div class="form-group col col-md-6">
                                  <label for="valor_ventas">Valor</label>
                                  <input type="number" name="valor_ventas" class="form-control" id="valor_ventas" value="0">
                                </div>
                                <div class="form-group col col-md-6">
                                  <label for="anio_ventas">Año</label>
                                  <input type="number" name="anio_ventas" class="form-control" id="anio_ventas" value="0">
                                </div>
                              </div>
                          </div>
                        </div>
                        <!-- Fin de row-->
                        
                      </div>
                      <div class="box-footer">
                        <a href="<?php echo base_url(); ?>emprendimiento/FormatoInscripcion"  id="btn-observacion" class="btn btn-primary pull-right">Guardar y Finalizar</a>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- /.Custom Tabs -->
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
  <!-- /.content-wrapper