$(document).ready(function () {
	var base_url = $("#base_url").val();
	//Permisos
	$("#rol_id.permisos").change(function(e){
		id = $(this).find("option:selected").val();
		cargarElemento('#modulos', id);
		if(id!=""){
			$("#modulos").show(1500);
		}else{
			$("#modulos").hide(1500);
		}
	});

	function cargarElemento(ele, id){
		var base = base_url+"cargarModulo";
		$.ajax({
			type: 'POST',
			url: base,
			data:{'rol_id':id},
			success:function(response){
				$(ele).empty();
				$(ele).append(response);
			}
		})
	}

	$("#btn-guardarModuloRol").click(function(e){
		rol_id = $("#rol_id.permisos option:selected").val();
		var datos = $('.form-check-input.modulo').serializeArray();
		var data = {'modulo_rol':[]};
		if(rol_id!=""){
			data['rol_id'] = rol_id;
			if(datos.length>0){
				$.each(datos, function(i, e){
					aux = {
						'rol_id': rol_id,
						'modulo_id': e.value,
						//'fecha_registro': Date(Date.now()),
					};
					data['modulo_rol'].push(aux);
				});
				console.log(data);
				$.ajax({
					type: 'POST',
					url: base_url+'permiso/almacenar',
					data:data,
					success:function(response){
						window.location = base_url+response;
					}
				});
			}else{
				alert("Por favor, seleccionar los modulos que quiere permitir al rol seleccionado");
			}
		}else{
			alert("Por favor, seleccione un rol");
		}
	});
});