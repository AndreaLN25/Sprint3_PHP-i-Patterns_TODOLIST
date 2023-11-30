<?php

class TareasModelo {
    protected $jsonFile;
    protected $tareas=[];
    

    public function __construct() {
        $this->jsonFile=__DIR__. '\Developers\app\models\baseDeDatosVacia.json';
    }
   /* public function getTareaPorId($tarea_id) {
       
        $jsonData = file_get_contents($this->jsonFile);
        $tareas = json_decode($jsonData, true);
        
        foreach ($tareas as $tarea) {
            //var_dump($task);
            if ($tarea['tarea_id'] == $tarea_id) {
                return $tarea;
            }
        }
        return "No existe la tarea";
    }*/
   
    
    public function crearTarea($nuevaTarea){
            $jsonData = file_get_contents($this->jsonFile);
            $tarea= json_decode($jsonData, true);

            if (empty($tarea)) {
                $maxId = 0;
                } else {
                    $maxId = max(array_column($tarea, 'tarea_id'));
                }
                $nuevaTarea['tarea_id'] = $maxId +1;
                $tarea[] = $nuevaTarea;
                $newJsonData = json_encode($tarea, JSON_PRETTY_PRINT);
                file_put_contents($this->jsonFile, $newJsonData);
    }

    
    /*public function getAllTask(){
        $jsonData = file_get_contents($this->jsonFile);
        $taskDetails= json_decode($jsonData, true);
    return $taskDetails;
    }
    public function deleteTask($task_id) {
        $jsonData = file_get_contents($this->jsonFile);
        $tasks = json_decode($jsonData, true);
            
        unset($tasks[$task_id-1]);
                               
        $jsonData = json_encode($tasks, JSON_PRETTY_PRINT);
        file_put_contents($this->jsonFile, $jsonData);   
    }
    public function saveTask($task_id, $newTaskData){
        $jsonData = file_get_contents($this->jsonFile);

        $tasks = json_decode($jsonData, true);

        foreach ($tasks as &$task) {
            if ($task['task_id'] == $task_id) {
                
                $task = array_merge($task, $newTaskData);
                break;
            }
        }
        $newJsonData = json_encode($tasks, JSON_PRETTY_PRINT);
        file_put_contents($this->jsonFile, $newJsonData);
    }
*/
}