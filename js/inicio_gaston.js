$(buscar_datos());


function buscar_datos(consulta) {
	$.ajax({
		url: 'Entrada_de_datos/buscar.php',
		type: 'POST',
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#inicio_gaston").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	})
}

$(document).on('keyup','#busqueda_inicio',function(){
	var valor = $(this).val();
	if (valor !="") {
		buscar_datos(valor);
	}else{
		buscar_datos();
	}

})
