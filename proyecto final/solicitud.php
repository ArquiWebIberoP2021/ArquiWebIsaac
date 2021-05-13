<?php
session_set_cookie_params(60*60*24*15); // 15 dias
session_start();
?>
	<!-- Cargamos solicitud -->
		
<div class="container">
    <div class="justify-content-evenly">
        <form action="" id="form">
        	<div class="row">
        		<div class="col-md-6">
                    <h6>Detalles de fecha</h6><br>
                    <div class="row">
                        <div class="offset-1 col-md-10">
                            <label for="disabledTextInput" class="form-label">Solicitar</label>
                            <input type="date" placeholder="Fecha" class="form-control" required="">
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="offset-1 col-md-10">
                            <label for="disabledTextInput" class="form-label">Entregar</label>
                            <input type="date" placeholder="Fecha" class="form-control" required="">
                        </div>
                        <br>
                    </div>
                </div>
     
                <div class="col-md-6">
	                <h6>Datos de material</h6> <br>
	                <div class="row">
                        <div class="col-12">
                            <label for="disabledTextInput" class="form-label">Grupo</label>
                            <br>
                            <select id="grupo" class="form-label">
                                <option selected>Selecciona una opción</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
	                </div>
	                <br>
	                <div class="row">
	                    <div class="col-12">
	                        <label for="disabledTextInput" class="form-label">Material</label>
	                        <br>
	                        <select id="mat" class="form-label">
	                            <option selected>Selecciona una opción</option>
	                            <option value="1">One</option>
	                            <option value="2">Two</option>
	                            <option value="3">Three</option>
	                        </select>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </form>
    </div>     	
    <hr>
    <div class="col-md-12" id="table">
       	<h6>Tu lista de materiales</h6>
        <div id="formulario">
            <table class="table table-sm table-striped" id="mytable">
                <thead class="table-info">
                    <tr>
                        <th>Grupo</th>
                        <th>Material</th>
                        <th>Cantidad</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="fila_1">
                        <td id="">Resistencias</td>
                        <td id="">Resistencia 1k</td>
                        <td id="">3</td>
                        <td><button type="button" class="btn btn-outline-danger delete fas fa-trash-alt" id="bt_1"></button></td>
                    </tr>
                    <tr id="fila_2">
                        <td id="">Accesorios</td>
                        <td id="">Multimetro</td>
                        <td id="">1</td>
                        <td><button type="button" class="btn btn-outline-danger delete fas fa-trash-alt" id="bt_2"></button></td>
                    </tr>
                    <tr id="fila_3">
                        <td id="">Card</td>
                        <td id="">Arduino uno</td>
                        <td id="">1</td>
                        <td><button type="button" class="btn btn-outline-danger delete fas fa-trash-alt" id="bt_3"></button></td>
                    </tr>
                </tbody>
            </table>
        </div>          
    </div>
</div>

