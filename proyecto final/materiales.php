<?php
session_set_cookie_params(60*60*24*15); // 15 dias
session_start();
?>
	<!-- Cargamos tabla de HTML -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<table class="table table-sm table-striped">
						<thead class="table-danger">
							<tr>
								<th> Grupo.</th>
								<th> Material.</th>
								<th> Cantidad.</th>
								<th> Fecha solicitud.</th>	
								<th> Fecha entrega.</th>
								<th> Status.</th>
								<th> Editar.</th>
								<th> Eliminar.</th>
							</tr>
						</thead>
						<tbody id="tablaRes">
							<!--Aqui se agregan resultados del ajax-->
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
