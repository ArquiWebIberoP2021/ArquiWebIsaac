$( document ).ready(function() {
	//si le da un click a solicitud
	$("#solicitud").one("click", function(){
		$(this).css("display", "none");
		$("#atras_materiales").css("display", "block");
		$("#agregar").css("display", "block");
		$("#guardar").css("display", "block");
		$("#subtitulo").html("Solicitar material");
		$("#inicio").load('solicitud.php', function(){
			$.getScript("js/solicitud.js"); 
		});
	});

	//si le da un click a atrás
	$("#atras_materiales").one("click",function(){
		$("#atras_materiales").css("display", "none");
		$("#agregar").css("display", "none");
		$("#guardar").css("display", "none");
		//materiales
		$("#inicio").load('materiales.php',function(){
			$.getScript("js/materiales.js"); 
			$("#titulo").html('Solicita tu lista de <span class="text-info">Materiales</span>');
			$("#subtitulo").html('Materiales solicitados');
			$("#solicitud").css("display", "block");
		});
	});
});//ready
	
