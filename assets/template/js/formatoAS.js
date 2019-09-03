$(document).ready(function(){
	var base_url = $("#base_url").val() + 'emprendimiento/formatoAS/';
	var id_otro = 0;
	//Desactivar la acción de los a.tab que esten disabled
	$('a[data-toggle="tab"]').on('click', function(e){
        if($(this).parent('li').hasClass('disabled')){
         return false;
        }
    });

	$('#agregar_otro').click(function(e){
		e.preventDefault();
		id_otro++;
		$('.box-body.tenencia_tierra').append('<div class="form-group row row'+id_otro+'"><div class="col-sm-5"><div class="form-group"><label>Otro. ¿Cuál?</label><input type="text" name="otro'+id_otro+'" id="otro'+id_otro+'" class="form-control otro_tenencia_tierra2" placeholder="¿Cuál otro?"></div></div><div class="col-sm-6"><div class="form-group"><label class="">Descripción</label><input type="text" name="d_otro'+id_otro+'" id="d_otro'+id_otro+'" class="form-control otro_tenencia_tierra2" placeholder="Descripción"></div></div><div class="col-sm-1 btn-centrar"><a class="btn btn-danger btn-sm btn-circle pull-left btn-remove" data-id="row'+id_otro+'" name="remove_otro"><span class="fa fa-minus"></span></a></div></div>');                    
		$('a.btn-remove').click(function(e){
			id = $(this).data('id');
			$('.'+id).remove();
		});
	});

	$('#almacenarLegislacionAmbiental .aplica').change(function(e){ 
		option = $(this).find('option:checked').val();
		id = $(this).data('main')+''+$(this).data('cod');
		//alert(id);
		if(option==1){
			$('#cumple_'+id+', #vigencia_'+id+', #observacion_'+id).removeAttr('disabled');
		}else{
			$('#cumple_'+id+', #vigencia_'+id+', #observacion_'+id).attr('disabled', 'disabled');
		}
	});

	//Detectar cuando los input Apoyos dejan de estar vacios
	$('input.apoyos').change(function(e){
		valor = $(this).val().trim();
		id = $(this).data('cod');
		if(valor != ""){
			$('#apoyo_entidad'+id+', select#apoyo_tipo_entidad'+id+', #anio_apoyo'+id).removeAttr('disabled');
		}else{
			$('#apoyo_entidad'+id+', select#apoyo_tipo_entidad'+id+', #anio_apoyo'+id).attr('disabled','disabled');
		}
	});

	//Checkbox Certificaciones
	$('.form-check-input[name="certificacion[]"]').click(function(){
		id = $(this).val();
		if($(this).is(':checked')){
			$('[name="etapa_certificacion['+id+']"], [name="vigencia_certificacion['+id+']"], [name="observacion_certificacion['+id+']"]').removeAttr('disabled');
		}else{
			$('[name="etapa_certificacion['+id+']"], [name="vigencia_certificacion['+id+']"], [name="observacion_certificacion['+id+']"]').attr('disabled','disabled');
		}
	});

	//Checkbox Prácticas de conservación
	$('.form-check-input[name="practica_conservacion[]"]').click(function(){
		id = $(this).val();
		if($(this).is(':checked')){
			$('[name="area_practica_conservacion['+id+']"], [name="descripcion_practica_conservacion['+id+']"]').removeAttr('disabled');
		}else{
			$('[name="area_practica_conservacion['+id+']"], [name="descripcion_practica_conservacion['+id+']"]').attr('disabled','disabled');
		}
	});

	//Checkbox Actividades Involucradas
	$('.form-check-input[name="actividad_involucra[]"]').click(function(){
		id = $(this).val();
		if($(this).is(':checked')){
			$('[name="descripcion_ac['+id+']"], [name="fuente_recursos_ac['+id+']"]').removeAttr('disabled');
		}else{
			$('[name="descripcion_ac['+id+']"], [name="fuente_recursos_ac['+id+']"]').attr('disabled','disabled');
		}
	});

	//Checkbox Programa Empleado
	$('.form-check-input[name="programa_empleado[]"]').click(function(){
		id = $(this).val();
		if($(this).is(':checked')){
			$('[name="descripcion_pe['+id+']"]').removeAttr('disabled');
		}else{
			$('[name="descripcion_pe['+id+']"]').attr('disabled','disabled');
		}
	});

	//Checkbox Área de ecosistema
	$('.form-check-input[name="area_ecosistema[]"]').click(function(){
		id = $(this).val();
		if($(this).is(':checked')){
			$('[name="area_area_ecosistema['+id+']"]').removeAttr('disabled');
		}else{
			$('[name="area_area_ecosistema['+id+']"]').attr('disabled','disabled');
		}
	});

	//Checkbox Plan Manejo o Plan de Mejora
	$('.form-check-input[name="plan_manejo[]"]').click(function(){
		id = $(this).val();
		if($(this).is(':checked')){
			$('[name="plan_manejo_aplica['+id+']"], [name="plan_manejo_cumple['+id+']"], [name="plan_manejo_vigencia['+id+']"], [name="plan_manejo_observacion['+id+']"]').removeAttr('disabled');
		}else{
			$('[name="plan_manejo_aplica['+id+']"], [name="plan_manejo_cumple['+id+']"], [name="plan_manejo_vigencia['+id+']"], [name="plan_manejo_observacion['+id+']"]').attr('disabled','disabled');
		}
	});

	//Checkbox Tenencia de Tierra
	$('.form-check-input').click(function(){
		id = $(this).val();
		if($(this).is(':checked')){
			$('#descripcion_tt'+id).removeAttr('disabled');
		}else{
			$('#descripcion_tt'+id).attr('disabled','disabled');
		}
	});

	//Checkbox Certificaciones
	$('.form-check-input[name="certificacion[]"]').click(function(){
		id = $(this).val();
		if($(this).is(':checked')){
			$('[name="etapa_certificacion['+id+']"], [name="vigencia_certificacion['+id+']"], [name="observacion_certificacion['+id+']"]').removeAttr('disabled');
		}else{
			$('[name="etapa_certificacion['+id+']"], [name="vigencia_certificacion['+id+']"], [name="observacion_certificacion['+id+']"]').attr('disabled','disabled');
		}
	});

	//Checkbox Otro Involucra
	$('select[name="otro_involucra[]"]').change(function(){
		id = $(this).val();
		if(id == '1'){
			$('[name="otro_item_involucra[1]"]').removeAttr('disabled');
		}else{
			$('[name="otro_item_involucra[1]"]').attr('disabled','disabled');
		}
	});

	//Remover clase disabled a los a.tab, cuando quede almacenada la información general del formato de información AS
    $('#btn-informacion').on('click', function(e){
      var empresa_id = parseInt($('#empresa_id').val());	
      var id = $(this).data('form');
      base = base_url + id;
      var tt = $('#'+id+' .form-check-input');
      var data = {'tenencia_tierra': []};
      var otro = $('#otro.otro_tenencia_tierra').val();
      var d_otro = $('#d_otro.otro_tenencia_tierra').val();
      if(otro.trim() != ""){
      	data['otro_tenencia_tierra'] = [{
      		'nombre':otro.trim(),
      		'descripcion': d_otro.trim(),
      		'empresa_id': empresa_id,
      	}]
      }
      //alert("formulario: ", id);
      $.each(tt, function(index, campo){
      	descripcion = $('#descripcion_tt'+campo.value).val();
      	aux = {
      			'empresa_id':empresa_id,
      			'opciones_id':campo.value,
      			'descripcion': (campo.checked) ? descripcion: "",
      			'confirmacion': (campo.checked) ? 1:0
      		};
      	data['tenencia_tierra'].push(aux); 
      	
      	// if(!$('#'+campo.name).is('.no') && $("#"+campo.name).is('.form-check-input')){
      	// 	descripcion = $('#descripcion_tt'+campo.value).val();
      	// 	aux = {
      	// 		'empresa_id':empresa_id,
      	// 		'opciones_id':campo.value,
      	// 		'descripcion': descripcion,
      	// 		'confirmacion': 1
      	// 	};
      	// 	data['tenencia_tierra'].push(aux); 
      	// }
      });
      console.log(data);
      
      $.ajax({
      	type: "POST",
      	url : base,
      	data : data,
      	success:function(response){
      		console.log(response);
      		//var respuesta = JSON.parse(response);

      	}
      });
      
    });

    $('#btn-certificacion').on('click', function(e){
    	alert('hola');
    	var empresa_id = parseInt($('#empresa_id').val());
    	var form = $(this).data('form');
    	var valor = $("#comunidades_logales option:selected").val();
    	var data = {
    		'certificacion': obtenerValoresCertificacion($('.certificacion.form-check-input'), 'certificacion', empresa_id, valor),
    	}
    	var otro = $('#otro_certificacion').val();
		
		if(otro.trim() != ""){
			var etapa_id = parseInt($('#otro_etapa_certificacion option:selected').val());
			var vigencia = $('#otro_vigencia_certificacion').val();
			var observacion = $('#otro_observacion_certificacion').val();
			data['otros_certificacion'] = [{
				'nombre':otro.trim(),
				'etapa_id': etapa_id,
				'empresa_id': empresa_id,
				'vigencia': vigencia,
				'observacion': observacion,
			}]
		}
    	console.log(data);
    });

    $('#btn-sostenibilidadAmbiental').on('click', function(e){
    	alert('hola');
    	var empresa_id = parseInt($('#empresa_id').val());
    	var form = $(this).data('form');
    	var data = {
    		'conservacion':obtenerValoresConservacion($('.conservacion.form-check-input'), 'practica_conservacion', empresa_id),
    		'ecosistema':obtenerValoresConservacion($('.ecosistema.form-check-input'), 'area_ecosistema', empresa_id),
    		'plan_manejo':obtenerValoresPlan($('.plan_manejo.form-check-input'), 'plan_manejo', empresa_id),
    	}
    	var otro_ecosistema = $('#otro_ecosistema').val();
    	var otro_conservacion = $('#otro_conservacion').val();
		
		if(otro_ecosistema.trim() != ""){
			var area = $('#area_otro_ecosistema').val();
			data['otros_ecosistema'] = [{
				'nombre':otro_ecosistea.trim(),
				'area': area,
				'empresa_id': empresa_id,
			}]
		}

		if(otro_conservacion.trim() != ""){
			var area = $('#a_otro_conservacion').val();
			var descripcion =$('#d_otro_conservacion').val();
			data['otros_conservacion'] = [{
				'nombre':otros_conservacion.trim(),
				'area': area,
				'descripcion': descripcion,
				'empresa_id': empresa_id,
			}]
		}

    	console.log(data); 
    });

    $('#btn-legislacion').on('click', function(e){
    	var empresa_id = parseInt($('#empresa_id').val());
    	var form = $(this).data('form');
    	var data = {
    		'permiso': obtenerValoresLegislacion($('.aplica.permiso'), 'permiso', empresa_id),
    		'registro': obtenerValoresLegislacion($('.aplica.registro'), 'registro', empresa_id),
    		'licencia': obtenerValoresLegislacion($('.aplica.licencia'), 'licencia', empresa_id),
    	};
    	var otro = $('#otro_legislacion_ambiental').val();
		
		if(otro.trim() != ""){
			var cumple_nocumple_id = $('#cumple_otro_leg_ambiental option:checked').val();
			var observacion = $('#observacion_otro_leg_ambiental').val();
			data['otros_legislacion'] = [{
				'nombre':otro.trim(),
				'cumple_nocumple_id': cumple_nocumple_id,
				'empresa_id': empresa_id,
			}]
		}

		console.log(data);
    });

    $('#btn-social').on('click', function(e){
    	var empresa_id = parseInt($('#empresa_id').val());
    	var form = $(this).data('form');
    	var v_involucra = $('#sa_comunidades_locales option:selected').val(); 
    	var v_actividad = $('#sa_miembros_comunales option:selected').val(); 
    	var v_programa = $('#sa_programa_trabajo option:selected').val(); 
    	var v_apoyo = $('#sa_apoyado option:selected').val(); 
    	var data = {
    		'involucra': obtenerValoresInvolucra($('.involucra.form-check-input'), empresa_id, v_involucra),
    		'actividades': obtenerValoresActividad($('.actividad_involucra.form-check-input'), empresa_id, v_actividad),
    		'programa': obtenerValoresPrograma($('.programa.form-check-input'), empresa_id, v_programa),
    		'instituciones': obtenerValoresApoyo($('input.apoyos'), empresa_id, v_apoyo),
    	};
    	
    	var otro_involucra = $('#otro_involucra option:selected').val();
    	var otra_actividad_involucra = $('#otra_actividad_involucra').val();
    	var otra_programa_empleado = $('#otra_programa_empleado').val();
		if(otro_involucra == 1){
			nombre = $('#otro_item_involucra').val();
			data['otro_involucra'] = [{
				'nombre':nombre,
				'empresa_id': empresa_id,
			}]
		}
		if(otra_actividad_involucra.trim()!= ""){
			descripcion = $('#desc_otra_actividad_involucra').val();
			recurso_id = $('#otra_fuente_recursos_ac option:selected').val();
			data['otro_actividades'] = [{
				'nombre':otra_actividad_involucra,
				'descripcion': descripcion,
				'recurso_id': recurso_id,
				'empresa_id': empresa_id,
			}]
		}
		if(otra_programa_empleado.trim()!= ""){
			descripcion = $('#desc_otra_programa_empleado').val();
			data['otro_programa'] = [{
				'nombre':otra_actividad_involucra,
				'descripcion': descripcion,
				'empresa_id': empresa_id,
			}]
		}

		console.log(data);
    });

    function obtenerValoresLegislacion(datos, clase, empresa_id){
    	var data = [];
    	$.each(datos, function(i, e){
    		ele = '#'+e.name;
    		opciones_id = $(ele).data('cod');
    		aplica_noaplica_id = $(ele+' option:checked').val();
    		cumple_nocumple_id = (aplica_noaplica_id==1)?$('#cumple_'+clase+opciones_id+' option:checked').val():'2';
    		vigencia = (aplica_noaplica_id==1)?$('#vigencia'+clase+opciones_id).val():'';
    		observacion = (aplica_noaplica_id==1)?$('#observacion'+clase+opciones_id).val():'';

    		aux = {
    			'empresa_id':empresa_id,
    			'opciones_id': opciones_id,
    			'aplica_noaplica_id': aplica_noaplica_id,
    			'cumple_nocumple_id': cumple_nocumple_id,
    			'vigencia':vigencia,
    			'observacion': observacion
    		}

    		data.push(aux);
    	});
    	return data;
    }

    function obtenerValoresPlan(datos, clase, empresa_id){
    	var data = [];
    	$.each(datos, function(i, e){
    		ele = "#"+clase;
    		opciones_id = e.value;
    		aplica_noaplica_id = (e.checked)? $(ele+'_aplica'+opciones_id+' option:selected').val(): "";
    		cumple_nocumple_id = (e.checked)?$(ele+'_cumple'+opciones_id+' option:selected').val():'';
    		vigencia = (e.checked)? $(ele+'_vigencia'+opciones_id).val():'';
    		observacion = (e.checked)? $(ele+'_observacion'+opciones_id).val():'';

    		aux = {
    			'empresa_id':empresa_id,
    			'opciones_id': opciones_id,
    			'aplica_noaplica_id': aplica_noaplica_id,
    			'cumple_nocumple_id': cumple_nocumple_id,
    			'vigencia':vigencia,
    			'observacion': observacion
    		}

    		data.push(aux);
    	});
    	return data;
    }

    function obtenerValoresInvolucra(datos, empresa_id, valor){
    	var data = [];
    	$.each(datos, function(i, e){
    		opciones_id = e.value;
    		confirmacion = (e.checked && valor==1) ? '1':0;
    		alert(e.value);
    		aux = {
    			'empresa_id':empresa_id,
    			'opciones_id': opciones_id,
    			'confirmacion': confirmacion,
    		}

    		data.push(aux);
    	});
    	return data;
    }

    function obtenerValoresPrograma(datos, clase, empresa_id, valor){
    	var data = [];
    	$.each(datos, function(i, e){
    		opciones_id = e.value;
    		confirmacion = (e.checked && valor==1) ? '1':0;
    		descripcion = (e.checked && valor==1) ? $('#descripcion_pe'+opciones_id).val() : '';
    		aux = {
    			'empresa_id':empresa_id,
    			'opciones_id': opciones_id,
    			'descripcion': descripcion,
    			'confirmacion': confirmacion,
    		}

    		data.push(aux);
    	});
    	return data;
    }

    function obtenerValoresApoyo(datos, empresa_id, valor){
    	var data = [];
    	$.each(datos, function(i, e){
    		alert('hola');
    		if(valor == 1){
    			apoyo = e.value.trim();
    			alert(apoyo);
	    		if(apoyo != ""){
	    			id = $('#'+e.id).data('cod');
	    			entidad = $("#apoyo_entidad"+id).val().trim();
	    			orientacion_id = parseInt($("#apoyo_tipo_entidad"+id+' option:selected').val());
	    			anio = $("#anio_apoyo"+id).val().trim();
	    			aux = {
		    			'empresa_id':empresa_id,
		    			'apoyo': apoyo,
		    			'entidad': entidad,
		    			'orientacion_id': orientacion_id,
		    			'anio': anio,
		    		}
	    			data.push(aux);
	    		}
    		}
    		
    		
    	});
    	return data;
    }

    function obtenerValoresActividad(datos, empresa_id, valor){
    	var data = [];
    	$.each(datos, function(i, e){
    		opciones_id = e.value;
    		confirmacion = (e.checked && valor==1) ? '1':0;
    		recurso_id = (e.checked && valor==1) ? $('#fuente_recursos_ac'+opciones_id+' option:selected').val() : '';
    		descripcion = (e.checked && valor==1) ? $('#descripcion_ac'+opciones_id).val() : '';
    		aux = {
    			'empresa_id':empresa_id,
    			'opciones_id': opciones_id,
    			'descripcion': descripcion,
    			'recurso_id': recurso_id,
    			'confirmacion': confirmacion,
    		}

    		data.push(aux);
    	});
    	return data;
    }

    function obtenerValoresCertificacion(datos, clase, empresa_id, valor){
    	var data = [];

    	$.each(datos, function(i, e){
    		ele = '#'+clase+e.value;
    		alert(ele);
    		opciones_id = e.value;
    		id = clase+opciones_id;
    		confirmacion = (e.checked && valor==1)? 1:0;
    		etapa_id = (e.checked && valor==1)? $('#etapa_'+id+' option:selected').val():"";
    		vigencia = (e.checked && valor==1)? $('#vigencia_'+id).val():"";
    		observacion = (e.checked && valor==1)? $('#observacion_'+id).val():"";
    		
    		aux = {
    			'empresa_id':empresa_id,
    			'opciones_id': opciones_id,
    			'etapa_id': etapa_id,
    			'vigencia': vigencia,
    			'observacion': observacion,
    			'confirmacion': confirmacion,
    		}

    		data.push(aux);
    	});
    	return data;
    }

    function obtenerValoresConservacion(datos, clase, empresa_id){
    	var data = [];

    	$.each(datos, function(i, e){
    		opciones_id = e.value;
    		id = clase+opciones_id;
    		confirmacion = (e.checked)? 1:0;
    		area = (e.checked)? $('#area_'+id).val():"";
    		descripcion = (e.checked && valor==1)? $('#descripcion_'+id).val():"";		
    		aux = {
    			'empresa_id':empresa_id,
    			'opciones_id': opciones_id,
    			'area': area,
    			'descripcion': descripcion,
    			'confirmacion': confirmacion,
    		}

    		data.push(aux);
    	});
    	return data;
    }

    function obtenerValoresEcosistema(datos, clase, empresa_id){
    	var data = [];

    	$.each(datos, function(i, e){
    		opciones_id = e.value;
    		id = clase+opciones_id;
    		confirmacion = (e.checked)? 1:0;
    		area = (e.checked)? $('#area_'+id).val():"";	
    		aux = {
    			'empresa_id':empresa_id,
    			'opciones_id': opciones_id,
    			'area': area,
    			'confirmacion': confirmacion,
    		}

    		data.push(aux);
    	});
    	return data;
    }


    $('.estado').change(function(e){
    	div = "#"+$(this).data('visibility');
    	id = $(this).find('option:selected').val();
    	//alert(id);
    	if(id==1){
    		$(div).show(1000);
    	}else{
    		$(div).hide(1000);
    	}
    	
    });
});