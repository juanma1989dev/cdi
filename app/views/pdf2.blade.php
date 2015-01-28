<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		{{ HTML::style('css/normalize.css') }}

		<style type="text/css">
			
			#content{
				font-family: 'Arial';
				font-size: 9pt;
				position: absolute;
				width: 100%;
			}
			#content > #table-main {
				display: inline-table;
				border-collapse: collapse;
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

		<table width="100%">
			<tr>
				<td>
					<h3>Logo</h3>
				</td>
				<td align="center">
					COMISION NACIONAL PARA EL DESARROLLO DE LOS PUEBLOS INDIGENAS <br>
					DELEGACION OAXACA <br> 
					AREA DE PLANEACION <br>
					CUADRO RESUMEN DE PROGRAMAS Y PROYECTOS INVERSIONES EJERCIDAS 2013 E INVERSION AUTORIZADA 2014
				</td>
			</tr>
		</table>

		<table border="1" width="400px">
			<tr>
				<td><strong>PROGRAMAS 2013</strong></td>
				<td><strong>No DE PROYECTOS</strong></td>
				<td><strong>INVERSION EJERCIDA</strong></td>
			</tr>

			<tr>
				<td>POPMI</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td>POPMI</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td>POPMI</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td>POPMI</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td>POPMI</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td><strong>SUBTOTAL</strong></td>
				<td><strong>12,999</strong></td>
				<td><strong>234,007,602.83</strong></td>
			</tr>

			<tr>
				<td>CULTURAL</td>
				<td>72</td>
				<td>5,333,222.00</td>
			</tr>

			<tr>
				<td>CONVENIOS EN MATERIA DE JUSTICIA</td>
				<td>94</td>
				<td>5,333,222.00</td>
			</tr>

			<tr>
				<td>EXCARCELACION</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td>DESPLAZADOS</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td>INTERPRETES</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>


			<tr>
				<td>TERCER NIVEL</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td>PAIGPI MODALIDAD 1 CASA DE LA MUJER INDIGENA ( CAMI )</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td>PAIGPI MODALIDAD 2 APOYO A INSTITUCIONES DE DE GOBIERNO</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td>PAIGPI MODALIDAD 3 FORTALECIMIENTO DE LA EQUIDAD DE GENERO</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td>FORTALECIMIENTO DE ORGANIZACIONES Y AGENDAS INDIGENAS</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td><strong>SUBTOTAL</strong></td>
				<td><strong>12,999</strong></td>
				<td><strong>234,007,602.83</strong></td>
			</tr>

			<tr>
				<td>POPMI</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td>POPMI</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td>POPMI</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td>POPMI</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td><strong>SUBTOTAL</strong></td>
				<td><strong>12,999</strong></td>
				<td><strong>234,007,602.83</strong></td>
			</tr>

			<tr>
				<td>POPMI</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td>POPMI</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td>POPMI</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td>POPMI</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td>POPMI</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td>POPMI</td>
				<td>815</td>
				<td>98,333,222.00</td>
			</tr>

			<tr>
				<td><strong>SUBTOTAL</strong></td>
				<td><strong>12,999</strong></td>
				<td><strong>234,007,602.83</strong></td>
			</tr>

			<tr>
				<td><strong>TOTALES</strong></td>
				<td><strong>2,003</strong></td>
				<td><strong>444,931,578</strong></td>
			</tr>

		</table>
	</div>
</body>
</html>


