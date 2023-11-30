<?php

/**
 * Base controller for the application.
 * Add general things in this controller.
 */
class ApplicationController extends Controller 
{
    public function indexAction(){
        $tareasModelo = new TareasModelo();
        
    }

    public function crearTareaAction(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $tarea_nombre = $_POST['tarea_nombre'];
            $tarea_descripcion = $_POST['tarea_descripcion'];
            $fechaInicio = $_POST['fechaInicio'];
            $fechaFin = $_POST['fechafin'];
            $estado = $_POST['estado'];
            $creadoPor = $_POST['creadoPor'];
        }
    }
	
}
