$(document).ready(function(){

	var base_url= $('#base_url').val() + 'emprendimiento/NegocioVerde/';
	//Desactivar la acción de los a.tab que esten disabled
	$('a[data-toggle="tab"]').on('click', function(e){
        if($(this).parent('li').hasClass('disabled')){
        	alert('No puede acceder a esta pestaña');
         return false;
        }
    });

	//Remover clase disabled a los a.tab, cuando quede almacenada la información general del formato de información AS
    $('#btn-informacion').on('click', function(e){
    	
      var id = $(this).data('form');
      var base = base_url + id;
      var datos = $('#'+id).serializeArray();
      var empresa = {}, persona = {}, asociacion = {};
      //console.log(datos);  
      $.each(datos, function(index, campo){
      	//console.log(campo);
      	if(campo.name == 'fecha_registro'){
      		empresa[campo.name] = Date(Date.now());
      	}else if(!$('#'+campo.name).is('.no')){
      		if($('#'+campo.name+'.persona').is('.persona')){
	      		if($('#'+campo.name).is('select')){
		      		persona[campo.name] =  $('#'+campo.name+' option:selected').val();
		      	}else{
		      		persona[campo.name] = campo.value;
		      	}
	      	}else if($('#'+campo.name+'.asociacion').is('.asociacion')){
	      		
	      		if($('#'+campo.name).is('select')){
		      		asociacion[campo.name] =  $('#'+campo.name+' option:selected').val();
		      	}else{
		      		asociacion[campo.name] = campo.value;
		      	}
	      	}else{
	      		if($('#'+campo.name).is('select')){
		      		empresa[campo.name] =  $('#'+campo.name+' option:selected').val();
		      	}else{
		      		empresa[campo.name] = campo.value;
		      	}
	      	}
      	}	
      });
     
      //console.log(persona, empresa, asociacion);
      //alert(base);
      var formData = new FormData($('#'+id)[0]);
      var fdata = new FormData();
      // console.log(persona);
      fdata.append('persona', JSON.stringify(persona));
      fdata.append('asociacion',JSON.stringify(asociacion));
      fdata.append('empresa', JSON.stringify(empresa));
      fdata.append('archivo', formData.get('archivo_id'));
      //console.log(fdata.get('persona'));    
      $.ajax({
      	type: "POST",
        contentType: false,
        processData:false,
      	url : base,
      	data: fdata,
      	success:function(response){
      		//console.log(response);
      		var respuesta = JSON.parse(response);
      		if(respuesta.error == 1){
      			alert('Se ha guardado la información general correctamente');
      			//Asignando valor de la empresa actual
      			$('[name=empresa_id]').val(respuesta.empresa_id);
      			$('.nav-tabs-custom .nav-tabs li.disabled').attr('class','');
  		      	$('.nav-tabs-custom .nav-tabs').find('li').eq(0).removeClass('active');
  		      	$('.nav-tabs-custom .nav-tabs').find('li').eq(1).addClass('active'); 
      		}else if(respuesta.error == -1){
      			alert(respuesta.error+". "+respuesta.fase);
      		}else{
            alert(respuesta.error+". "+respuesta.fase);
          }
      	}
      });
      // $('.nav-tabs-custom .nav-tabs li.disabled').attr('class','');
      // $('.nav-tabs-custom .nav-tabs').find('li').eq(0).removeClass('active');
      // $('.nav-tabs-custom .nav-tabs').find('li').eq(1).addClass('active'); 

    });

    function obtenerOptions(tabla, condicion, elemento){
    	$.ajax({
      	type: "POST",
      	url : base_url + 'cargarCombo',
      	data: {tabla: tabla, where:condicion},
      	success:function(response){
      		$(elemento).empty();
      		$(elemento).append(response);
      	}
      });
    }

    $("#region").change(function(e){

    	id = $(this).children('option:selected').val();
  		condicion = {'region_id':  parseInt(id)};
  		tabla = 'autoridad_ambiental';
  		elemento = '#autoridad_ambiental_id';
  		obtenerOptions(tabla,condicion,elemento);
  		tabla = 'departamento';
  		elemento = '#departamento';
  		obtenerOptions(tabla,condicion,elemento);
    	
    });

    $("#departamento").change(function(e){
    	id = $(this).children('option:selected').val();
    	condicion = {'departamento_id': parseInt(id)};
    	tabla = 'municipio';
    	elemento = '#municipio_id';
    	obtenerOptions(tabla,condicion,elemento);
    });

    $("#categoria_id").change(function(e){
    	id = $(this).children('option:selected').val();
    	condicion = {'categoria_id': parseInt(id)};
    	tabla = 'sector';
    	elemento = '#sector_id';
    	obtenerOptions(tabla,condicion,elemento);
    });

    $("#sector_id").change(function(e){
    	id = $(this).children('option:selected').val();
    	condicion = {'sector_id': parseInt(id)};
    	tabla = 'subsector';
    	elemento = '#subsector_id';
    	obtenerOptions(tabla,condicion,elemento);
    });

    $("#socio_masculino, #socio_femenino").keyup(function(){
    	masculino = parseInt($("#socio_masculino").val());
    	femenino = parseInt($("#socio_femenino").val());
    	var total = masculino + femenino;
    	$("#socio_total").attr("value", total);
    });

    $("#vinculado_masculino, #vinculado_femenino").keyup(function(){
    	masculino = parseInt($("#vinculado_masculino").val());
    	femenino = parseInt($("#vinculado_femenino").val());
    	var total = masculino + femenino;
    	$("#vinculado_total").attr("value", total);
    });

    $("#empleado_masculino, #empleado_femenino").keyup(function(){
    	masculino = parseInt($("#empleado_masculino").val());
    	femenino = parseInt($("#empleado_femenino").val());
    	var total = masculino + femenino;
    	$("#empleado_total").attr("value", total);
    });

    $("#educacion_primaria, #educacion_bachiller, #educacion_tecnica, #educacion_universitaria, #educacion_otro").keyup(function(){
    	p = parseInt($("#educacion_primaria").val());
    	b = parseInt($("#educacion_bachiller").val());
    	t = parseInt($("#educacion_tecnica").val());
    	u = parseInt($("#educacion_universitaria").val());
    	o = parseInt($("#educacion_otro").val());
    	var total = p + b + t + u + o;
    	$("#nivel_educativo_total").attr("value", total);
    });

    $('select.situacion').change(function(){
    	id = $(this).val();
    	input = $(this).data('asociado');
    	if(id == 1){
    		$('#'+input).removeAttr("disabled");
    	}else{
    		$('#'+input).attr("disabled", "disabled");
    	}
    });
    
    
    $('#btn-descripcion').click(function(e){
       var id = $(this).data('form');
       base = base_url + id;
       var datos = $('#'+id).serializeArray();
       var data = {};
       $.each(datos, function(index, ele){
        data[ele.name] = ele.value;
       });
       data['fecha_registro'] = Date(Date.now());
       $.ajax({
        type: 'POST',
        url: base,
        data:{'descripcion': data},
        success:function(response){
          var respuesta = JSON.parse(response);
          if(respuesta.error==1){
            alert("Los datos fueron guardado con exitos");
          }else{
            alert(respuesta.error);
          }
        }
       });
    });

    $('#btn-categoria').click(function(){
        var id = $(this).data('form');
        base = base_url + id;
        var datos = $('#'+id).serializeArray();
        var data = {};
        $.each(datos, function(index, ele){
          if(!$("#"+ele.name).is('.no')){
            data[ele.name]=$('#'+ele.name+' option:selected').val();
          }
        });
        $.ajax({
          type:'POST',
          url: base,
          data:{'categoria' : data},
          success:function(response){
            var respuesta = JSON.parse(response);
            if(respuesta.error==1){
              alert('Se pudo agregar correctamente la categoría del negocio verde');
            }else{  
              alert(respuesta.error);
            }
          }
        })
        //console.log(data);
    });

    $('#btn-informacionEmpresa').click(function(){
    	var id = $(this).data('form');
      base = base_url + id;
      var i = 0;
      empresa_id = $('#empresa_id').val();
    	var datos = $('#'+id).serializeArray();
      //console.log(datos);
      constitucion_legal_estado = $('select#constitucion_legal_estado option:selected').val();
      operando_actualmente_estado = $('select#operando_actualmente_estado option:selected').val();
      anio_funcionamiento_registro = $('#anio_funcionamiento_registro').val();
      anio_funcionamiento_empresa = $('#anio_funcionamiento_empresa').val();
      var data = {
        'empresa_empleado_sexo':[], 
        'caracterizacion_vinculacion_empresa': [], 
        'empresa_empleado_edad': [],
        'caracterizacion_empleado_educativo': [],
        'caracterizacion_demografia_empresa': [],
        'empresa_actividad': [],
        'caracterizacion_empresa_bien_servicio': [],
        'caracterizacion_organizacion_empresa': [{
          'constitucion_legal_estado': constitucion_legal_estado,
          'operando_actualmente_estado': operando_actualmente_estado,
          'anio_funcionamiento_empresa': anio_funcionamiento_empresa,
          'anio_funcionamiento_registro':anio_funcionamiento_registro,
        }],
        };
        
    	$.each(datos, function(index, ele){
        codigo = '#'+ele.name;
        elemento = $(codigo);
        var aux = {};
        if(!$(codigo).is('.no'))
        {
          if($(codigo+'.empleado_sexo').is('.empleado_sexo')){ //empresa_empleado_sexo
            aux = {
              'empresa_id':empresa_id,
              'socio_empleado_id':parseInt(elemento.data('cod')),
              'sexo_id':parseInt(elemento.data('sex')),
              'cantidad': ele.value
            };
            data['empresa_empleado_sexo'].push(aux);
          }else if($(codigo+'.vinculacion').is('.vinculacion')){ //caracterizacion_vinculacion_empresa
            aux = {
              'empresa_id':empresa_id,
              'vinculacion_id':parseInt(elemento.data('cod')),
              'cantidad': ele.value
            };
            data['caracterizacion_vinculacion_empresa'].push(aux);
          }else if($(codigo+'.rango_edad').is('.rango_edad')){ //empresa_empleado_edad
            aux = {
              'empresa_id':empresa_id,
              'rango_edad_id':parseInt(elemento.data('cod')),
              'cantidad': ele.value
            };
            data['empresa_empleado_edad'].push(aux);
          }else if($(codigo+'.educacion').is('.educacion')){ //caracterizacion_empleado_educativo
            aux = {
              'empresa_id':empresa_id,
              'nivel_id':parseInt(elemento.data('cod')),
              'cantidad': ele.value
            };
            data['caracterizacion_empleado_educativo'].push(aux);
          }else if($('input'+codigo+'.situacion').is('.situacion')){ //caracterizacion_demografia_empresa
            aux = {
              'empresa_id':empresa_id,
              'estado': 2,
              'demografia_id':parseInt(elemento.data('cod')),
              'cantidad': ele.value
            };
            data['caracterizacion_demografia_empresa'].push(aux);
          }else if($('input'+codigo+'.actividad').is('.actividad')){ //empresa_actividad
            aux = {
              'empresa_id':empresa_id,
              'actividad_id': ele.value
            };
            data['empresa_actividad'].push(aux);
          }else if($('input'+codigo+'.bien').is('.bien')){ //caracterizacion_empresa_bien_servicio
            estado = (ele.name=='bien_lider') ? 1:0;
            aux = {
              'empresa_id':empresa_id,
              'nombre': ele.value,
              'lider_estado': estado
            };
            data['caracterizacion_empresa_bien_servicio'].push(aux);
          }
          //console.log(aux);
        }
        
    	});

      console.log(data);
      $.ajax({
        type:'POST',
        url: base,
        data: data,
        success:function(response){
          console.log(response);
        }
      });
    	//console.log(data);

    });
    $('#constitucion_legal_estado').change(function(e){
      if($(this).children('option:selected').val()=='1'){
        $("#anio_funcionamiento_registro, #anio_funcionamiento_empresa").removeAttr('disabled');
      }else{
        $("#anio_funcionamiento_registro, #anio_funcionamiento_empresa").attr('disabled','disabled');
      }
    });
    
    //eventos de los botones que almacenan información a la BD
    $('#btn-verificadorEmpresario').click(function(){
      var id = $(this).data('form');
      base = base_url + id;
      var datos = $('#'+id).serializeArray();
      var data = {};
      $.each(datos, function(index, ele){
        codigo = '#'+ele.name;
        if($(codigo+'.empresario').is('.empresario')){
          data[ele.name] = ele.value;
        }
      });
      $.ajax({
        type: 'POST',
        url: base,
        data: {'empresario':data},
        success:function(response){
          var respuesta = JSON.parse(response);
          if(respuesta.error==1){
            alert('Se pudo almacenar correctamente la información en la base de datos');
          }else{
            alert(respuesta.error);
          }
        }
      });

      //console.log(data);
    });

    $('#btn-observacion').click(function(){
      var id = $(this).data('form');
      base = base_url + id;
      var datos = $('#'+id).serializeArray();
      var data = {};
      $.each(datos, function(index, ele){
        data[ele.name] = ele.value;
      });
      $.ajax({
        type: 'POST',
        url: base,
        data: {'observacion':data},
        success:function(response){
          var respuesta = JSON.parse(response);
          if(respuesta.error==1){
            alert('Se pudo almacenar correctamente la información en la base de datos');
            window.location = base_url;
          }else{
            alert(respuesta.error);
          }
        }
      });
      //console.log(data)
    });





});