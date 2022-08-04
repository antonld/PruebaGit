<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/lista.controlador.php";

require_once "modelos/lista.modelo.php";

require_once "modelos/rutas.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();