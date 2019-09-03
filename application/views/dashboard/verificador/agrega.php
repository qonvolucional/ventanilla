<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Verificador por Empresa
        <small>Nuevo</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>verificador/almacenar" method="POST">
                            <div class="form-group <?php echo form_error('persona_id') == true ? 'has-error':''?>">
                                <label for="persona_id">Verificador:</label>
                                <select name="persona_id" id="persona_id" class="form-control">
                                    <?php if(!empty($verificadores)):?>
                                        <?php foreach($verificadores as $verificador):?>
                                            <option value="<?php echo $verificador->id; ?>"><?php echo $verificador->nombre; ?></option>
                                        <?php endforeach;?>    
                                    <?php endif;?>    
                                </select>
                                <?php echo form_error("persona_id","<span class='help-block'>","</span>");?>
                            </div>
                            <div class="form-group <?php echo form_error('empresa_id') == true ? 'has-error':''?>">
                                <label for="empresa_id">Emprendimiento:</label>
                                <select name="empresa_id" id="empresa_id" class="form-control">
                                    <?php if(!empty($empresas)):?>
                                        <?php foreach($empresas as $empresa):?>
                                            <option value="<?php echo $empresa->id; ?>"><?php echo $empresa->nombre; ?></option>
                                        <?php endforeach;?>    
                                    <?php endif;?>    
                                </select>
                                <?php echo form_error("empresa_id","<span class='help-block'>","</span>");?>
                            </div>
                            <div class="form-group <?php echo form_error('entidad_id') == true ? 'has-error':''?>">
                                <label for="entidad_id">Entidades:</label>
                                <select name="entidad_id" id="entidad_id" class="form-control">
                                    <?php if(!empty($entidades)):?>
                                        <?php foreach($entidades as $entidad):?>
                                            <option value="<?php echo $entidad->id; ?>"><?php echo $entidad->nombre; ?></option>
                                        <?php endforeach;?>    
                                    <?php endif;?>    
                                </select>
                                <?php echo form_error("entidad_id","<span class='help-block'>","</span>");?>
                            </div>
                            <div class="form-group <?php echo form_error('area_id') == true ? 'has-error':''?>">
                                <label for="area_id">Area:</label>
                                <select name="area_id" id="area_id" class="form-control">
                                    <?php if(!empty($areas)):?>
                                        <?php foreach($areas as $area):?>
                                            <option value="<?php echo $area->id; ?>"><?php echo $area->nombre; ?></option>
                                        <?php endforeach;?>    
                                    <?php endif;?>    
                                </select>
                                <?php echo form_error("area_id","<span class='help-block'>","</span>");?>
                            </div>
                            <div class="form-group <?php echo form_error('cargo_id') == true ? 'has-error':''?>">
                                <label for="cargo_id">Cargo:</label>
                                <select name="cargo_id" id="cargo_id" class="form-control">
                                    <?php if(!empty($cargos)):?>
                                        <?php foreach($cargos as $cargo):?>
                                            <option value="<?php echo $cargo->id; ?>"><?php echo $cargo->nombre; ?></option>
                                        <?php endforeach;?>    
                                    <?php endif;?>    
                                </select>
                                <?php echo form_error("cargo_id","<span class='help-block'>","</span>");?>
                            </div>    
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->