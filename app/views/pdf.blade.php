<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		{{ HTML::style('css/normalize.css') }}
		<style type="text/css">
			@page{
				margin: 10px;
				size: 'A2';
			}
			#content{
				font-family: 'Arial';
				font-size: 12px;
				position: absolute;
				width: 100%;
			}
			#content > #table-main {
				display: inline-table;
				margin: 0 auto;
				position: relative;
				width: 100%;
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

	<div id="content">
		<table id="table-main" width="20">
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
				<td height="120px">
					<table>
						<tr>
							<td colspan="3" height="40px">META</td>
						</tr>
						<tr>
							<td colspan="3" height="35px">Población/Viviendas/Familias/ Otros con carencia</td>
						</tr>
						<tr>
							<td height="45px">Población coneval</td>
							<td height="45px">CUIS</td>
							<td height="45px">Unidad de Medida</td>
						</tr>
					</table>
				</td>
				<td>Dependecia</td>
				<td>Programa</td>
				<td>Subprograma</td>
				<td height="120px">
					<table>					
						<tr>
							<td colspan="4" height="40px"> Programación</td>
						</tr>
						<tr>
							<td height="80px">
								<table>
									<tr>
										<td colspan="4" height="35px">Accion Programada</td>
									</tr>
									<tr>
										<td height="45px">Clave de la Acción</td>
										<td height="45px">Acción</td>
										<td height="45px">Cantidad</td>
										<td height="45px">unidad de medida</td>
									</tr>
								</table>
							</td>
							<td height="80px">Perido de Ejecución</td>
							<td height="80px">
								<table>
									<tr>
										<td colspan="2" height="35px">Personas a ser beneficiario(a)s</td>
									</tr>
									<tr>
										<td height="45px">Hombres</td>
										<td height="45px">Mujeres</td>
									</tr>
								</table>
							</td>
							<td height="80px">
								<table>
									<tr>
										<td colspan="6" height="35px">Personas a ser beneficiario(a)s</td>
									</tr>
									<tr>
										<td height="45px">Total</td>
										<td height="45px">Federal</td>
										<td height="45px">Inversion Programada</td>
										<td height="45px">Estatal</td>
										<td height="45px">Municipal</td>
										<td height="45px">Otros</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
				<td height="120px">
					<table>
						<tr>
							<td colspan="3" height="40px">Ejecucion</td>
						</tr>
						<tr>
							<td height="80px">
								<table>
									<tr>
										<td colspan="4" height="35px">Avance Fisico de la Accion</td>
									</tr>
									<tr>
										<td height="45px">Clave de la accion</td>
										<td height="45px">Accion</td>
										<td height="45px">Cantidad</td>
										<td height="45px">Unidad de Medida</td>
									</tr>
								</table>
							</td>
							<td height="80px">
								<table>
									<tr>
										<td colspan="2" height="35px">Beneficiarios</td>
									</tr>
									<tr>
										<td height="45px">Hombres</td>
										<td height="45px">Mujeres</td>
									</tr>
								</table>
							</td>
							<td height="80px">
								<table>
									<tr>
										<td colspan="5" height="35px">Inversion ejercida (avance)</td>
									</tr>
									<tr>
										<td height="45px">Total</td>
										<td height="45px">Federal</td>
										<td height="45px">Estatal</td>
										<td height="45px">Municipal</td>
										<td height="45px">Otros</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
				<td height="120px">
					<table>
						<tr>
							<td colspan="2" height="40px">Observaciones</td>
						</tr>
						<tr>
							<td height="80px">Nombre del Beneficiario</td>
							<td height="80px">Estatus</td>
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
	</div>
</body>
</html>


