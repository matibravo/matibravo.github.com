<?php

    /* AYUDA A VALIDAR POSIBLES ERRORES DE SINTAXIS    
    require_once './model/task.php';  
    
    $task = new Task();
    $task->id = 2;
    $task->title = 'Prueba 5';
    $task->description = 'description 5';
    //$task->create();
    //$task->update();
    $task->delete(2);
    print_r($task->getAll());*/

    if (!isset($_REQUEST['controller'])){    //si no viene un controlador lo manda a la pag principal
    require_once './controller/task_controller.php';
    $controller = new TaskController();
    $controller->indexTask();
    } else {
    $controller = $_REQUEST['controller'];
    $action = $_REQUEST['action'];
    require_once './controller/'.$controller.'_controller.php';
    $controller = ucwords($controller).'controller';
    $controller= new $controller;
    call_user_func(array($controller,$action));
}


?>