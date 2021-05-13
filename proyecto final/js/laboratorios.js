$( document ).ready(function() {

	//cuando le de click al boton hamburguesa
	$(".menu").click(function(){
        if (!$(this).hasClass("open")){ //si se quiere abrir
       		$(this).toggleClass('open'); // lo habre 
       		$("#secmenu").css("display", "block");
       		$("#down").css("display","block");
       		$("#ham").css("display","none");
       	} else{//si se quiere cerrar
        	$(this).removeClass('open'); //lo cierra
        	$("#secmenu").css("display", "none");
        	$("#ham").css("display","block");
        	$("#down").css("display","none");
        }
	});

	//cuando le den click a la clase item
	$(".item").click(function(){
		let sel = $(this).data("num");
		modulo(sel);
		//si selecciona opción, esconde menú
		$(".menu").trigger("click");
	});

	//cuando le den click a la clase apartado
	$(".apartado").click(function(){
		let sel = $(this).data("num");
		modulo(sel);
	});

	function modulo(sel){

		if(sel == 0){
			//inicio
			location.href = "";
		}
		if(sel == 1){
			//materiales
			$("#inicio").load('materiales.php',function(){
				$.getScript("js/materiales.js"); 
				$("#titulo").html('Solicita tu lista de <span class="text-info">Materiales</span>');
				$("#subtitulo").html('Materiales solicitados');
				$("#solicitud").css("display", "block");
				$("#atras_menu").css("display","block");
			});
		}
		if(sel == 2){
			//casillero
			$("#inicio").load('casillero.php',function(){
				$.getScript("js/casillero.js"); 
				$("#titulo").html('Reserva un <span class="text-info">Casillero</span>');
			});
		}
		if(sel == 3){
			//solicita equipo
			$("#inicio").load('solicita.php',function(){
				$.getScript("js/solicita.js"); 
				$("#titulo").html('Solicita equipo de <span class="text-info">Electrónica</span>');
			});
		}
		if(sel == 4){
			//renueva equipo
			$("#inicio").load('renueva.php',function(){
				$.getScript("js/renueva.js"); 
				$("#titulo").html('Renueva equipo de <span class="text-info">Electrónica</span>');
			});
		}
		if(sel == 5){
			location.href = "index.html";
		}

	}
});//ready
	
