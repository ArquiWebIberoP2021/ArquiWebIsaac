$( document ).ready(function() {
	//al dar click al boton ingresar
	$("#ingresar").click(function(e){
		e.preventDefault();
		//tomamos el usuario y la contraseña
		let usu = $("#us").val();
		let ctr = $("#ctr").val();
		//Validamos que lo ingresado por el usuario sea correcto
		//Con las expresiones regulares de usuario y contraseña.
		var expReg_numeros = /^[0-9]+$/;
		var expReg_contra = /^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/;
		//hacemos llamado Ajax
		$.ajax({
			data: {
		    	"usu" : usu, 
		    	"ctr" : ctr
		    },
		    type: "POST",
		    url: "ingresar.php"
		}).done(function(data) {
			if(data == 0){
				alertify.notify("Usuario o Contraseña inválido", 'error', 5);
		   		return;
			}
			//si todo es correcto cargamos la página de laboratorios
			location.href = "laboratorios.php?token="+data;
		});
	});

});//ready
	
