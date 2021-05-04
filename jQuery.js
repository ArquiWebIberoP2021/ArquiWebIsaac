$( document ).ready(function() {

	//JQuery
	$('#click').click( function(){
		const backgroundcolor = ["blue", "gray", "orange", "green", "brown"];
		//Math.floor devuelve un numero entero, Math random devuelve un numero aleatorio
		const rand = backgroundcolor[Math.floor(Math.random() * backgroundcolor.length)];
		//cambiamos el color de fondo con el numero aleatorio
		$('#cambia').css('background', rand);
	});

	$("#recuadro").mouseleave(function(){
		alert("Saludos cordiales");
	});

	$("#ch").on("change", function(){
		if($(this).is(":checked")){
			$(".esconder").css("display", "none");
		}else{
			$(".esconder").css("display", "block");
		}
	});

	//JQuery UI
	$( ".drag" ).draggable({
			cursor: "move",
			revert: false,
			helper: 'clone',
			zIndex: 100,
		drag: function(event, ui){
			$(".drag").css("background", "#bbc8c8");
			$("#dropOrigen").find("p").html("¡SOLTAR AQUÍ!").attr("style","border: 2px dashed  #bbc8c8; color: #ef331f;");
			$("#dropDestino").find("p").html("¡SOLTAR AQUÍ!").attr("style","border: 2px dashed  #bbc8c8; color: #ef331f;");
			
		}
	});

	//hace el droppable en ls tres secciones
	$( "#dropOrigen" ).droppable({
		accept: ".drag",
		drop: function(event, ui) {
			$(this).append(ui.draggable.css({
					 position: 'relative'
					 }));
			$(".drag").css("background", "#e2e9e9");
    		$("#dropOrigen").find("p").html("").removeAttr('style');
    		$("#dropDestino").find("p").html("").removeAttr('style');
	
    	}
	});

	$( "#dropDestino" ).droppable({
		accept: ".drag",
		drop: function(event, ui) {
			$(this).append(ui.draggable.css({
					 position: 'relative'
					 }));
			$(".drag").css("background", "#e2e9e9");
    		$("#dropOrigen").find("p").html("").removeAttr('style');
    		$("#dropDestino").find("p").html("").removeAttr('style');
    	}
	});

});//ready
	
