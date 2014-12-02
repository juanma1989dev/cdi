<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo</title>
		<style type="text/css">
			body{
				background-color: yellow;
			}
			h1 {
				color: red;
				text-align: center;
			}
			#cdi_img {
				display: inline-block;
				margin: 0 25%;
				width: 50%;
			}
		</style>
</head>
<body>
	<h1>Ejemplo de PDF</h1>
	<img src="../public/images/depIMG.jpg" alt="Logo del CDI" id="cdi_img">
	<?php  $i=0; ?>
	<?php  for ($i; $i < 10; $i++):    ?>
		<?php echo $i . '<br>';  ?>
	<?php  endfor    ?>
</body>
</html>


