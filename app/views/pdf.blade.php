<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo</title>
		{{ HTML::style('css/normalize.css') }}
		{{ HTML::script('js/vendors/jquery-1.11.1.js') }}
		<script>
			$(document).on('ready', main);

			function main()
			{
				$('body').css('background', 'red');
			}

		</script>
		<style type="text/css">
			body { 
				font-size: 12px;
			}
			#table-main{
				position: relative;
				width: 60%;
			}
			#table-main td {
				border: 1px solid black;
				border-collapse: collapse;
				text-align: center;
				margin: 0;
			}
			#table-main table {
				border: none;
				margin: 0;
				padding: 0;
				position: relative;
			}
			#table-main table tr td:first-child{
				border-left: none;
			}
			#table-main table tr td:last-child{
				border-right: none;
			}
			#table-main table tr:first-child td{ 
				border-top: none;
			}
			#table-main table tr:last-child td{
				border-bottom: none;
			}


		</style>
</head>
<body>

	<table id="table-main" >
		<tr> 
			<td colspan="15">Nombre del documento al imprimir !!! -- Cambiar --</td>
		</tr>
		<tr>
			<td># de Registro</td>
			<td>Estado</td>
			<td>Clave del Municipio</td>
			<td>Municipio</td>
			<td>Región / Subregión</td>
			<td>Clave de la localidad</td>
			<td>Localidad</td>
			<td>Carencia</td>
			<td>
				<table>
					<tr>
						<td colspan="3">META</td>
					</tr>
					<tr>
						<td colspan="3">Población/Viviendas/Familias/ Otros con carencia</td>
					</tr>
					<tr>
						<td>Población coneval</td>
						<td>CUIS</td>
						<td>unidad de Medida</td>
					</tr>
				</table>
			</td>
			<td>Dependecia</td>
			<td>Programa</td>
			<td>Subprograma</td>
			<td>
				<table>
					<tr>
						<td colspan="4">Programación</td>
					</tr>
					<tr>
						<td>
							<table hei>
								<tr>
									<td colspan="4">Accion Programada</td>
								</tr>
								<tr>
									<td>Clave de la Acción</td>
									<td>Acción</td>
									<td>Cantidad</td>
									<td>unidad de medida</td>
								</tr>
							</table>
						</td>
						<td>Perido de Ejecución</td>
						<td>
							<table>
								<tr>
									<td colspan="2">Personas a ser beneficiario(a)s</td>
								</tr>
								<tr>
									<td>Hombres</td>
									<td>Mujeres</td>
								</tr>
							</table>
						</td>
						<td>
							<table>
								<tr>
									<td colspan="6">Personas a ser beneficiario(a)s</td>
								</tr>
								<tr>
									<td>Total</td>
									<td>Federal</td>
									<td>Inversion Programada</td>
									<td>Estatal</td>
									<td>Municipal</td>
									<td>Otros</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
			<td>
				<table>
					<tr>
						<td colspan="3">Ejecucion</td>
					</tr>
					<tr>
						<td>
							<table>
								<tr>
									<td colspan="4">Avance Fisico de la Accion</td>
								</tr>
								<tr>
									<td>Clave de la accion</td>
									<td>Accion</td>
									<td>Cantidad</td>
									<td>Unidad de Medida</td>
								</tr>
							</table>
						</td>
						<td>
							<table>
								<tr>
									<td colspan="2">Beneficiarios</td>
								</tr>
								<tr>
									<td>Hombres</td>
									<td>Mujeres</td>
								</tr>
							</table>
						</td>
						<td>
							<table>
								<tr>
									<td colspan="5">Inversion ejercida (avance)</td>
								</tr>
								<tr>
									<td>Total</td>
									<td>Federal</td>
									<td>Estatal</td>
									<td>Municipal</td>
									<td>Otros</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
			<td>
				<table>
					<tr>
						<td colspan="2">Observaciones</td>
					</tr>
					<tr>
						<td>Nombre del Beneficiario</td>
						<td>Estatus</td>
					</tr>
				</table>
			</td>
		</tr>
		@foreach($proyectos as $proyecto)
		<tr>
			<td colspan="1"> {{ $proyecto->id }} </td>
			<td> Oaxaca </td>
			<td> $proyecto->clavemunicipio </td>
			<td> $proyecto->municipio</td>
			<td> $proyecto->reg/subreg</td>
			<td> $proyecto->claveLocalidad</td>
			<td> $proyecto->localidad</td>
			<td> $proyecto->carencia</td>
			<td>
				<table>
					<tr>
						<td>
							<table>
								<tr>
									<td>.....</td>
									<td>.....</td>
								</tr>
							</table>
						</td>
						<td>No de que es</td>
						<td>Persona</td>
					</tr>
				</table>
			</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>

		</tr>
		@endforeach
	</table>


</body>
</html>


