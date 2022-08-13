<?php
require("class/paciente.php");
include "header.php";

$objpaciente = new Paciente();
$pacientes = $objpaciente->pacientes();
if(sizeof($pacientes) > 0){
	?>
	<table id="clinica" class="display table table-bordered table-stripe" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>DNI</th>
				<th>NOMBRE</th>
				<th>GENERO</th>
				<th>DIRECCION</th>
				<th>HISTORIAL</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($pacientes as $row){
				?>
				<tr>
					<td><?php echo $row['sucursal']; ?></td>
					<td><?php echo $row['nombre'].' '.$row['departamento'].' '.$row['email']; ?></td>
					<td><?php echo $row['tlf']; ?></td>
					<td><?php echo $row['mmarca']; ?></td>
					<td>
						<a href="historial.php?id=<?php echo $row['sucursal'] ?>"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Detalle Sucursal</a>
					</td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
	<?php
}else{
	echo "No hay resultados...";
}

include "footer.php";