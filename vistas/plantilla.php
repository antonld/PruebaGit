<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<?php

	/*=============================================
	MANTENER LA RUTA FIJA DEL PROYECTO
	=============================================*/
		
		$url = Ruta::ctrRuta();

	?>

    <meta name="title" content="Bitcoco">

    <meta name="description" content="Descripción del proyecto">

    <meta name="keyword" content="Bitcoco">

    <title>Bitcoco</title>

	<!-- Imagen en TITLE -->
	<link rel="icon" href="<?php echo $url; ?>"> 

	<!--=====================================
	PLUGINS DE CSS
	======================================-->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!--=====================================
	PLUGINS DE JAVASCRIPT
	======================================-->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="<?php echo $url; ?>vistas/js/plugins/sweetalert2.all.js"></script>

</head>

<body>

<?php
/*=============================================
CABEZOTE
=============================================*/
	
	include "modulos/cabezote.php";
	
/*=============================================
INICIO
=============================================*/

	include "modulos/inicio.php";

?>

<!--=====================================
JAVASCRIPT PERSONALIZADO
======================================-->

<script src="<?php echo $url; ?>vistas/js/producto.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>