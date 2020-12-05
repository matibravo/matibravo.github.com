<?php

    require_once './model/task.php';

    class TaskController{

        private $model;

        public function __construct()
        {
            $this->model = new Task();
        }

        public function indexTask()
        {
            require_once './view/task_form.php';
        }

        public function save()
        {
            $task = new Task();

            $task->id= $_REQUEST['id'];
            $task->title= $_REQUEST['title'];
            $task->description= $_REQUEST['description'];

            $task->create();
            header('Location: index.php');

                    
        }

        public function quit()  //llama a eliminar registro
        {
            $this->model->delete($_REQUEST['id']);
            header('Location: index.php');
        }
    }
?>