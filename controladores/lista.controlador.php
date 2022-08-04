<?php

class ControladorLista{

	/*=============================================
	REGISTRO DE PRODUCTO
	=============================================*/

	static public function ctrCrearLista(){

		if(isset($_POST["nuevoNombre"])){

			$tabla = "lista";

			$datos = $_POST["nuevoNombre"];

			$respuesta = ModeloLista::mdlIngresarLista($tabla, $datos);

		}

	}

	/*=============================================
	MOSTRAR INFORMACIÓN DE LISTA
	=============================================*/

	static public function ctrMostrarLista($item, $valor){

		$tabla = "lista";

		$respuesta = ModeloLista::mdlMostrarLista($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	BORRAR PRODUCTO
	=============================================*/

	static public function ctrBorrarLista(){

		if(isset($_GET["idproducto"])){

			$tabla ="lista";

			$datos = $_GET["idproducto"];

			$respuesta = ModeloLista::mdlBorrarLista($tabla, $datos);

			header("Location: index.php");

		}

	}

}


