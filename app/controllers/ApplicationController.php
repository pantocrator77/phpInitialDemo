<?php

/**
 * Base controller for the application.
 * Add general things in this controller.
 */

require ("/models/conexion.php");
$conect = new Connect();
$tareas = $con->getTasks();

class ApplicationController extends Controller 
{
	
}
?>