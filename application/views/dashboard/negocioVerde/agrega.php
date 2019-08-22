<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Formato de Inscripción
        <small>Agregar</small>
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
            <!-- /.box-header -->
            <div class="box-body">
              <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <!-- nav-tabs -->
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">I. Información General</a></li>
                  <li class="disabled"><a href="#tab_2" data-toggle="tab">II. Descripción</a></li>
                  <li class="disabled"><a href="#tab_3" data-toggle="tab">III. Categoría</a></li>
                  <li class="disabled"><a href="#tab_4" data-toggle="tab">IV. Información Empresa</a></li>
                  <li class="disabled"><a href="#tab_5" data-toggle="tab">V. Información del verificador y empresario</a></li>
                  <li class="disabled"><a href="#tab_6" data-toggle="tab">VI. Observaciones generales</a></li>
                </ul>
                <!-- /.nav-tabs -->
                <!-- tab-content --> 
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <form role="form" method="post" class="info">
                      <div class="box-header with-border bg-success">
                        <h3 class="box-title text-success">I. INFORMACIÓN GENERAL</h3>
                      </div>
                      <div class="box-body">
                        <div class="row">
                          <div class="form-group col col-xs-4">
                              <label for="tipo_persona">Tipo de Persona</label>
                              <select id="tipo_persona" name="tipo_persona" class="form-control">
                                <option selected>Seleccione...</option>
                                <option value="1">1</option>
                              </select>
                          </div>
                          <div class="form-group col col-xs-4">
                              <label for="tipo_identificacion">Tipo de Identificación</label>
                              <select id="tipo_identificacion" name="tipo_identificacion" class="form-control">
                                <option selected>Seleccione...</option>
                                <option value="1">1</option>
                              </select>
                          </div>
                          <div class="form-group col col-xs-4">
                              <label for="identificacion">Número de Identificación</label>
                              <input type="text" name="identificacion" id="identificacion" class="form-control" placeholder="Identificación">
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col col-xs-12">
                            <label for="razon_social">Razón Social</label>
                            <input type="text" class="form-control" name="razon_social" id="razon_social" placeholder="Razón Social">
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col col-xs-4">
                            <label for="representante_legal">Representante Legal</label>
                            <input type="text" class="form-control" id="representante_legal" name="representante_legal" placeholder="Representante Legal">
                          </div>
                          <div class="form-group col col-xs-4">
                            <label for="documento">Documento</label>
                            <input type="text" class="form-control" id="documento" name="documento" placeholder="Documento">
                          </div>
                          <div class="form-group col col-xs-4">
                            <label for="correo">Correo</label>
                            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo Electrónico">
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col col-xs-4">
                            <label for="telefono_fijo">Telefono Fijo</label>
                            <input type="text" class="form-control" id="telefono_fijo" name="telefono_fijo" placeholder="Telefono Fijo">
                          </div>
                          <div class="form-group col col-xs-4">
                            <label for="celular">Celular</label>
                            <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular">
                          </div>
                          <div class="form-group col col-xs-4">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección de Correspondencia">
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col col-xs-6">
                            <label for="region">Región</label>
                            <select id="region" name="region" class="form-control">
                              <option selected>Seleccione...</option>
                              <option value="1">1</option>
                            </select>
                          </div>
                          <div class="form-group col col-xs-6">
                            <label for="autoridad_ambiental">Autoridad Ambiental</label>
                            <select id="autoridad_ambiental" name="autoridad_ambiental" class="form-control">
                              <option selected>Seleccione...</option>
                              <option value="1">1</option>
                            </select>
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col col-xs-3">
                            <label for="departamento">Departamento</label>
                            <select id="departamento" name="departamento" class="form-control">
                              <option selected>Seleccione...</option>
                              <option value="1">1</option>
                            </select>
                          </div>
                          <div class="form-group col col-xs-3">
                            <label for="municipio">Municipio</label>
                            <select id="municipio" name="municipio" class="form-control">
                              <option selected>Seleccione...</option>
                              <option value="1">1</option>
                            </select>
                          </div>
                          <div class="form-group col col-xs-3">
                            <label for="vereda">Vereda</label>
                            <input type="text" class="form-control" id="vereda" name="vereda" placeholder="Vereda">
                          </div>
                          <div class="form-group col col-xs-3">
                            <label for="direccion_predio">Dirección</label>
                            <input type="text" class="form-control" id="direccion_predio" name="direccion_predio" placeholder="Dirección de Predio">
                          </div>
                        </div>

                        <div class="row">

                          <div class="col-xs-3 dl-horizontal">
                            <label>Localización específica
                            </label>
                          </div>         
                          <div class="form-group col col-xs-3">
                            <label for="coordenada_n">a) Coordenada Norte</label>
                            <input type="text" class="form-control" id="coordenada_n" name="coordenada_n" placeholder="Coordenada Norte">
                          </div>
                          <div class="form-group col col-xs-3">
                            <label for="coordenada_w">b) Coordenada Oeste</label>
                            <input type="text" class="form-control" id="coordenada_w" name="coordenada_w" placeholder="Coordenada Oeste">
                          </div>
                          <div class="form-group col col-xs-3">
                            <label for="altitud">c) Altitud (m.s.n.m)</label>
                            <input type="text" class="form-control" id="altitud" name="altitud" placeholder="Altitud (M.S.N.M.)">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group  col col-xs-4">
                            <label for="area_predio">Area Total Predio</label>
                            <input type="number" class="form-control" id="area_predio" name="area_predio" placeholder="Área Tota del Predio">
                          </div>
                          <div class="form-group col col-xs-4">
                            <label for="unidad_medida_predio">Unidad de medida</label>
                            <select id="unidad_medida_predio" name="unidad_medida_predio" class="form-control">
                              <option value="" selected>Seleccione una opción</option>
                              <option value="1">Ha</option>
                              <option value="2">Ma2</option>
                              <option value="3">Fanegadas</option>
                              <option value="4">Cuadras</option>
                            </select>
                          </div>
                          <div class="form-group col col-xs-4">
                            <label for="pot_municipal">El Predio cumple con el POT Municipio</label>
                            <select id="pot_municipal" name="pot_municipal" class="form-control">
                              <option value="" selected>Seleccione</option>
                              <option value="1">No</option>
                              <option value="2">Si</option>
                            </select>
                          </div>
                        </div>
                        <blockquote class="bg-warning">
                          <small class="text-success"><b>Para la Asociación se recomienda hacer un protocolo de medición.</b></small>
                        </blockquote>
                        <div class="row">
                          <div class="form-group col col-xs-3">
                            <label for="asociacion">Asociación</label>
                            <select id="asociacion" name="asociacion" class="form-control">
                              <option selected>Selecciona una opción</option>
                              <option value="1">SI</option>
                              <option value="2">NO</option>
                            </select>
                          </div>
                          <div class="form-group  col col-xs-3">
                            <label for="numero_asociacion">Número de Asociados</label>
                            <input type="number" class="form-control" id="numero_asociacion" name="numero_asociacion" placeholder="Número de Asociados">
                          </div>
                          <div class="form-group col col-xs-3">
                            <label for="famiempresa">Famiempresa</label>
                            <select id="famiempresa" name="famiempresa" class="form-control">
                              <option selected>Seleccione...</option>
                              <option value="1">1</option>
                            </select>
                          </div>
                          <div class="form-group col col-xs-3">
                            <label for="tamanio_empresa">Tamaño de Empresa</label>
                            <select id="tamanio_empresa" name="tamanio_empresa" class="form-control">
                              <option value="" selected>Seleccione</option>
                              <option value="1">No</option>
                              <option value="2">Si</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="box-footer">
                          <a href="#tab_2"  data-toggle="tab" id="btn-informacion" class="btn btn-primary pull-right">Guardar y Continuar</a>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <form role="form">
                      <div class="box-header with-border bg-success">
                        <h3 class="box-title center text-success">II. DESCRIPCIÓN DE NEGOCIO VERDE</h3>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                            <label for="descripcion bg-info">Descripción del Negocio(Bien o Servicio)</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="caracteristicas" class="bg-secondary">Características ambientales de su negocio verde(incluir el impacto ambiental positivo generado)</label>
                            <textarea class="form-control" id="caracteristicas" name="caracteristicas" rows="5"></textarea>
                        </div>
                      </div>
                      <div class="box-footer">
                        <a href="#tab_3"  data-toggle="tab" id="btn-descripcion" class="btn btn-primary pull-right">Guardar y Continuar</a>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    <form role="form">
                      <div class="box-header with-border bg-success">
                        <h3 class="box-title center text-success">III. CATEGORÍA DE NEGOCIO VERDE</h3>
                      </div>
                      <div class="box-body">
                        <div class="row">
                          <div class="form-group col col-xs-4">
                              <label for="categoria_negocio">Categoría</label>
                              <select id="categoria_negocio" name="categoria_negocio" class="form-control">
                                <option selected>Seleccione...</option>
                                <option value="1">1</option>
                              </select>
                          </div>
                          <div class="form-group col col-xs-4">
                              <label for="sector">Sector</label>
                              <select id="sector" name="sector" class="form-control">
                                <option selected>Seleccione...</option>
                                <option value="1">1</option>
                              </select>
                          </div>
                          <div class="form-group col col-xs-4">
                              <label for="subsector">Subsector</label>
                              <select id="subsector" name="subsector" class="form-control">
                                <option selected>Seleccione...</option>
                                <option value="1">1</option>
                              </select>
                          </div>
                        </div>
                      </div>
                      <div class="box-footer">
                        <a href="#tab_4"  data-toggle="tab" id="btn-categoria" class="btn btn-primary pull-right">Guardar y Continuar</a>
                        </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_4">
                    
                    <form role="form">
                      <div class="box-header with-border bg-success">
                        <h3 class="box-title center text-success">IV. INFORMACIÓN DE EMPRESA</h3>
                      </div>
                      <div class="box-body">
                        <!-- Comienzo de row-->
                        <blockquote class="bg-warning">
                          <small class="text-success"><b>Características de los socios y empleados</b></small>
                        </blockquote>
                        <div class="row border-red">
                          <div class="col col-md-5">
                              <label for="" class="border">1. Número de socios</label>
                              <div class="row">
                                <div class="form-group col col-md-4">
                                  <label for="socio_masculino">Másculino</label>
                                  <input type="number" name="socio_masculino" class="form-control" id="socio_masculino" value="0">
                                </div>
                                <div class="form-group col col-md-4">
                                  <label for="socio_femenino">Femenino</label>
                                  <input type="number" name="socio_femenino" class="form-control" id="socio_femenino" value="0">
                                </div>
                                <div class="form-group col col-md-4">
                                  <label for="socio_total">Total</label>
                                  <input type="number" name="socio_total" class="form-control" id="socio_total" disabled value="0">
                                </div>
                              </div>
                          </div>

                          <div class="col col-md-7">
                              <label for="" class="border">2. ¿Cuantos socios están vinculados laboralmente con la empresa?</label>
                              <div class="row">
                                <div class="form-group col col-md-4">
                                  <label for="vinculado_masculino">Másculino</label>
                                  <input type="number" name="vinculado_masculino" class="form-control" id="vinculado_masculino" value="0">
                                </div>
                                <div class="form-group col col-md-4">
                                  <label for="vinculado_femenino">Femenino</label>
                                  <input type="number" name="vinculado_femenino" class="form-control" id="vinculado_femenino" value="0">
                                </div>
                                <div class="form-group col col-md-4">
                                  <label for="vinculado_total">Total</label>
                                  <input type="number" name="vinculado_total" class="form-control" id="vinculado_total" disabled value="0">
                                </div>
                              </div>
                          </div>

                          <div class="col col-md-5">
                              <label for="" class="border">3. Número de empleados (<small>Incluye los socio vinclados laboralmente</small>)</label>
                              <div class="row">
                                <div class="form-group col col-md-4">
                                  <label for="empleado_masculino">Másculino</label>
                                  <input type="number" name="empleado_masculino" class="form-control" id="empleado_masculino" value="0">
                                </div>
                                <div class="form-group col col-md-4">
                                  <label for="empleado_femenino">Femenino</label>
                                  <input type="number" name="empleado_femenino" class="form-control" id="empleado_femenino" value="0">
                                </div>
                                <div class="form-group col col-md-4">
                                  <label for="empleado_total">Total</label>
                                  <input type="number" name="empleado_total" class="form-control" id="empleado_total" disabled value="0">
                                </div>
                              </div>
                          </div>
                        </div>
                        <!-- Fin de row-->
                        <blockquote class="bg-warning">
                          <small class="text-success"><b>Para el número de empleados diligencia los siguientes espacios:</b></small>
                        </blockquote>
                        <!-- Comienzo de row-->
                        <div class="row border-red">
                          <div class="col col-md-6">
                              <label for="" class="border">4. Tipo de vinculacion laboral(Indicar Nº de empleos)</label>
                              <div class="row">
                                <div class="form-group col col-md-3">
                                  <label for="vinculacion_indefinido">Indefinido</label>
                                  <input type="number" name="vinculacion_indefinido" class="form-control" id="vinculacion_indefinido" value="0">
                                </div>
                                <div class="form-group col col-md-3">
                                  <label for="vinculacion_definido">Definido</label>
                                  <input type="number" name="vinculacion_definido" class="form-control" id="vinculacion_definido" value="0">
                                </div>
                                <div class="form-group col col-md-6">
                                  <label for="vinculacion_dias">Por días(Jornales) <small>promedio de días</small></label>
                                  <input type="number" name="vinculacion_dias" class="form-control" id="vinculacion_dias" value="0">
                                </div>
                              </div>
                          </div>
                          <div class="col col-md-6">
                              <label for="" class="border">6. Edad <small>(Indicar número de empleados)</small></label>
                              <div class="row">
                                <div class="form-group col col-md-4">
                                  <label for="edad_rango1">Entre 18-30 años</label>
                                  <input type="number" name="edad_rango1" class="form-control" id="edad_rango1" value="0">
                                </div>
                                <div class="form-group col col-md-4">
                                  <label for="edad_rango2">Entre 30-50 años</label>
                                  <input type="number" name="edad_rango2" class="form-control" id="edad_rango2" value="0">
                                </div>
                                <div class="form-group col col-md-4">
                                  <label for="edad_rango3">Mayores de 50 años</label>
                                  <input type="number" name="edad_rango3" class="form-control" id="edad_rango3"  value="0">
                                </div>
                              </div>
                          </div>
                        </div>
                        <!-- Fin de row-->
                        <!-- Comienzo de row-->
                        <div class="row border-red">
                          <div class="col col-md-12">
                              <label for="" class="border">5. Nivel Educativo <small>(Indicar número de empleados)</small></label>
                              <div class="row">
                                <div class="form-group col col-md-2">
                                  <label for="educacion_primaria">Primaria</label>
                                  <input type="number" name="educacion_primaria" class="form-control" id="educacion_primaria" value="0">
                                </div>
                                <div class="form-group col col-md-2">
                                  <label for="educacion_bachiller">Bachillerato</label>
                                  <input type="number" name="educacion_bachiller" class="form-control" id="educacion_bachiller" value="0">
                                </div>
                                <div class="form-group col col-md-2">
                                  <label for="educacion_tecnica">Técnico</label>
                                  <input type="number" name="educacion_tecnica" class="form-control" id="educacion_tecnica" value="0">
                                </div>
                                <div class="form-group col col-md-2">
                                  <label for="educacon_universitaria">Universitario</label>
                                  <input type="number" name="educacon_universitaria" class="form-control" id="educacon_universitaria" value="0">
                                </div>
                                <div class="form-group col col-md-2">
                                  <label for="educacion_otro">Otro</label>
                                  <input type="number" name="educacion_otro" class="form-control" id="educacion_otro" value="0">
                                </div>
                                <div class="form-group col col-md-2">
                                  <label for="nivel_educativo_total">Total</label>
                                  <input type="number" name="nivel_educativo_total" class="form-control" id="nivel_educativo_total" value="0" disabled>
                                </div>
                              </div>
                          </div>
                        </div>
                        <!-- Fin de row-->
                        <!-- Comienzo de row-->
                        <div class="row border-red">
                          <div class="col-md-3">
                            <label for="" class="">7. Condiciones especiales de los empleados</label>
                          </div>  
                          <div class="col-md-9">
                              <div class="row">
                                <div class="form-group col-xs-6">
                                  <label for="comunidad_indigena">Personas de comunidades indigenas</label>
                                  <select name="comunidad_indigena" id="comunidad_indigena" class="form-control">
                                    <option value="">Seleccione...</option>
                                    <option value="0">No</option>
                                    <option value="1">Si</option>
                                  </select>
                                </div>
                                <div class="form-group col col-xs-6">
                                  <label for="cantidad_indigena">Número de empleados</label>
                                  <input type="number" name="cantidad_indigena" id="cantidad_indigena" class="form-control" value="0">
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-group col col-xs-6">
                                  <label for="situacion_discapacidad">Personas en situación de discapacidad</label>
                                  <select name="situacion_discapacidad" id="situacion_discapacidad" class="form-control">
                                    <option value="">Seleccione...</option>
                                    <option value="0">No</option>
                                    <option value="1">Si</option>
                                  </select>
                                </div>
                                <div class="form-group col col-xs-6">
                                  <label for="cantidad_discapacidad">Número de empleados</label>
                                  <input type="number" name="cantidad_discapacidad" id="cantidad_discapacidad" class="form-control" value="0">
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-group col col-xs-6">
                                  <label for="adulto_mayor">Adulto mayor</label>
                                  <select name="adulto_mayor" id="adulto_mayor" class="form-control">
                                    <option value="">Seleccione...</option>
                                    <option value="0">No</option>
                                    <option value="1">Si</option>
                                  </select>
                                </div>
                                <div class="form-group col col-xs-6">
                                  <label for="cantidad_adulto">Número de empleados</label>
                                  <input type="number" name="cantidad_adulto" id="cantidad_adulto" class="form-control" value="0">
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-group col col-xs-6">
                                  <label for="madres_cabeza">Madres cabeza de hogar</label>
                                  <select name="madres_cabeza" id="madres_cabeza" class="form-control">
                                    <option value="">Seleccione...</option>
                                    <option value="0">No</option>
                                    <option value="1">Si</option>
                                  </select>
                                </div>
                                <div class="form-group col col-xs-6">
                                  <label for="cantidad_madre">Número de empleados</label>
                                  <input type="number" name="cantidad_madre" id="cantidad_madre" class="form-control" value="0">
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-group col col-xs-6">
                                  <label for="reinsertado">Reinsertado</label>
                                  <select name="reinsertado" id="reinsertado" class="form-control">
                                    <option value="">Seleccione...</option>
                                    <option value="0">No</option>
                                    <option value="1">Si</option>
                                  </select>
                                </div>
                                <div class="form-group col col-xs-6">
                                  <label for="cantidad_reinsertado">Número de empleados</label>
                                  <input type="number" name="cantidad_reinsertado" id="cantidad_reinsertado" class="form-control" value="0">
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-group col col-xs-6">
                                  <label for="desplazado">Desplazados</label>
                                  <select name="desplazado" id="desplazado" class="form-control">
                                    <option value="">Seleccione...</option>
                                    <option value="0">No</option>
                                    <option value="1">Si</option>
                                  </select>
                                </div>
                                <div class="form-group col col-xs-6">
                                  <label for="cantidad_desplazado">Número de empleados</label>
                                  <input type="number" name="cantidad_desplazado" id="cantidad_desplazado" class="form-control" value="0">
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-group col col-xs-6">
                                  <label for="persona_otro">Otros</label>
                                  <select name="persona_otro" id="persona_otro" class="form-control">
                                    <option value="">Seleccione...</option>
                                    <option value="0">No</option>
                                    <option value="1">Si</option>
                                  </select>
                                </div>
                                <div class="form-group col col-xs-6">
                                  <label for="cantidad_otro">Número de empleados</label>
                                  <input type="number" name="cantidad_otro" id="cantidad_otro" class="form-control" value="0">
                                </div>
                              </div>
                          </div>
                        </div>
                        <!-- Fin de row-->
                        <blockquote class="bg-warning">
                          
                          <small class="text-success">

                            <b>Características del negocio (Marcar las opciones de la pregunta 1, que cumplas).</b>
                          </small>
                        </blockquote>
                        <!-- Comienzo de row-->
                        <div class="row border-red">
                          <div class="col-md-6">
                            <label for="" class="">1. Actividades realizadas por la empresa</label>
                            <div class="form-check">
                              <label class="checkbox-inline"><input type="checkbox" name="actividad_empresa[]" id="actividad_empresa[]" class="form-check-input">Producción materia prima</label>
                              <label class="checkbox-inline"><input type="checkbox" name="actividad_empresa[]" id="actividad_empresa[]" class="form-check-input">Transformación</label>
                              <label class="checkbox-inline"><input type="checkbox" name="actividad_empresa[]" id="actividad_empresa[]" class="form-check-input">Comercialización</label>
                            </div>
                          </div>
                          <div class="col col-md-6">
                            <div class="form-group">
                              <label for="etapa_empresarial">2. Etapa empresarial</label>
                              <select class="form-control">
                                <option value="">Seleccione...</option>
                                <option value="1">Opción 1</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <!-- Fin de row-->
                        <!-- Comienzo de row-->
                        <div class="row">
                          <div class="col-xs-3">
                             <label for="" class="">3. Bienes y/o servicios del negocio</label>
                          </div>
                          <div class="col col-xs-9">
                            <div class="form-group row">
                              <label for="bien1" class="col-md-3 control-label">Bien y/o servicio 1</label>
                              <div class="col-md-9">
                                <input type="text" name="bien1" id="bien1" class="form-control" placeholder="Bien y/0 servicio 1">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="bien2" class="col-md-3 control-label">Bien y/o servicio 2</label>
                              <div class="col-md-9">
                                <input type="text" name="bien2" id="bien2" class="form-control" placeholder="Bien y/0 servicio 2">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="bien3" class="col-md-3 control-label">Bien y/o servicio 3</label>
                              <div class="col-md-9">
                                <input type="text" name="bien3" id="bien3" class="form-control" placeholder="Bien y/0 servicio 3">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="bien4" class="col-md-3 control-label">Bien y/o servicio 4</label>
                              <div class="col-md-9">
                                <input type="text" name="bien4" id="bien4" class="form-control" placeholder="Bien y/0 servicio 4">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="bien5" class="col-md-3 control-label">Bien y/o servicio 5</label>
                              <div class="col-md-9">
                                <input type="text" name="bien5" id="bien5" class="form-control" placeholder="Bien y/0 servicio 5">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="bien_lider" class="col-md-3 control-label">4. Bien y/o servicio líder <small>(No debe estar dentro de los anteriores bienes)</small></label>
                              <div class="col-md-9">
                                <input type="text" name="bien_lider" id="bien_lider" class="form-control" placeholder="Bien y/0 servicio líder (No debe estar dentro de los anteriores bienes)">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Fin de row-->
                        <!-- Comienzo de row-->
                        <div class="row border-red">
                          <div class="col col-md-12">
                              <label for="" class="border">5. Sobre la organización</label>
                              <div class="row">
                                <div class="form-group col col-xs-6">
                                  <label for="constitucion_legal">¿Su organización está constituida legalmente (camara de comercio, DIAN)?</label>
                                  <select name="constitucion_legal" id="constitucion_legal" class="form-control">
                                    <option value="">Seleccione...</option>
                                    <option value="0">No</option>
                                    <option value="1">Si</option>
                                  </select>
                                </div>
                                <div class="form-group col col-xs-6">
                                  <label for="anio_funcionamiento">Años de funcionamiento de la empresa</label>
                                  <input type="text" name="anio_funcionamiento" id="anio_funcionamiento" class="form-control" placeholder="Años de funcionamiento de la empresa">
                                </div>
                              </div>
                              <div class="row">
                                <div class="form-group col col-xs-6">
                                  <label for="operando_actual">¿Su organización se encuentra operando en la actualidad?</label>
                                  <select name="operando_actual" id="operando_actual" class="form-control">
                                    <option value="">Seleccione...</option>
                                    <option value="0">No</option>
                                    <option value="1">Si</option>
                                  </select>
                                </div>
                                <div class="form-group col col-xs-6">
                                  <label for="anio_desp_registro">¿Cuantos años de funcionamiento despues de registro ante camara y comercio?</label>
                                  <input type="text" name="anio_desp_registro" id="anio_desp_registro" class="form-control" placeholder="¿Cuantos años de funcionamiento despues de registro ante camara y comercio?">
                                </div>
                              </div>
                          </div>
                        </div>
                        <!-- Fin de row-->
                      </div>
                      <div class="box-footer">
                        <a href="#tab_5"  data-toggle="tab" id="btn-informacionEmpresa" class="btn btn-primary pull-right">Guardar y Continuar</a>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_5">
                    
                    <form role="form">
                      <div class="box-header bg-success">
                        <h3 class="box-title center text-success">V. INFORMACIÓN DEL VERIFICADOR Y EMPRESARIO</h3>
                      </div>
                      <div class="box-body">
                        <blockquote class="bg-warning">
                          <small class="text-success"><b>Información de Verificador</b></small>
                        </blockquote>
                        <div class="row">
                          <div class="form-group col col-xs-3">
                              <label for="nombre_verificador">Nombre</label>
                              <input type="text" name="nombre_verificador" id="nombre_verificador" class="form-control" placeholder="Nombre de verificador">
                          </div>
                          <div class="form-group col col-xs-3">
                              <label for="entidad_verificador">Entidad</label>
                              <input type="text" name="entidad_verificador" id="entidad_verificador" class="form-control" placeholder="Entidad de verificador">
                          </div>
                          <div class="form-group col col-xs-3">
                              <label for="area_verificador">Área</label>
                              <input type="text" name="area_verificador" id="area_verificador" class="form-control" placeholder="Área de verificador">
                          </div>
                          <div class="form-group col col-xs-3">
                              <label for="cargo_verificador">Cargo</label>
                              <input type="text" name="cargo_verificador" id="cargo_verificador" class="form-control" placeholder="Cargo de verificador">
                          </div>
                        </div>
                        <blockquote class="bg-warning">
                          <small class="text-success"><b>Información de Empresario (Quien diligencia formulario)</b></small>
                        </blockquote>
                        <div class="row">
                          <div class="form-group col col-xs-4">
                              <label for="nombre_empresario">Nombre</label>
                              <input type="text" name="nombre_empresario" id="nombre_empresario" class="form-control" placeholder="Nombre de verificador">
                          </div>
                          <div class="form-group col col-xs-4">
                              <label for="identificacion_empresario">Identificación</label>
                              <input type="text" name="identificacion_empresario" id="identificacion_empresario" class="form-control" placeholder="Identificación de Empresario">
                          </div>
                          <div class="form-group col col-xs-3">
                              <label for="cargo_empresario">Cargo</label>
                              <input type="text" name="cargo_empresario" id="cargo_empresario" class="form-control" placeholder="Cargo de Empresario">
                          </div>
                        </div>
                        
                      </div>
                      <div class="box-header">
                        <a href="#tab_6"  data-toggle="tab" id="btn-verificador-empresario" class="btn btn-primary pull-right">Guardar y Continuar</a>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_6">
                    <form role="form">
                      <div class="box-header with-border bg-success">
                        <h3 class="box-title center text-success">VI. OBSERVACIONES GENERALES</h3>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                            <label for="observaciones_generales">Observaciones Generales</label>
                            <textarea class="form-control" id="observaciones_generales" name="observaciones_generales" rows="10"></textarea>
                        </div>
                        
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
            <div class="box-footer">
              <div class="form-group alert alert-success" role="alert">
                <label for="image-empresa">Imagen de empresa</label>
                <input type="file" class="form-control-file" name="image-empresa" id="image-empresa">
                <small><b>NOTA:</b> <p>Esta imagen será utilizada en caso de que el emprendimiento cumpla con mas del 50% luego de haber aplicado todos los criterios de evaluación para ser visualizada en la pagina principal</p> </small>
              </div>
            </div>

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