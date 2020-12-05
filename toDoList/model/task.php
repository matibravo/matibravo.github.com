<?php

    require_once './core/crud.php';

    class Task extends Crud{

        private $id;
        private $title;
        private $description;
        const TABLE = 'task';  /*nombre de la tabla de bd*/
        private $pdo;

        public function __construct()
        {
            parent::__construct(self::TABLE);
            $this->pdo = parent::conexion();
        }

        public function __set($name, $value)
        {
            $this->$name = $value;

        }

        public function __get($name)
        {
            return $this->$name;
        }

        public function create()
        {
            try {
                $stm =$this->pdo->prepare("INSERT INTO ".self::TABLE."(title, description) VALUES (?,?)");
                $stm->execute(array($this->title,$this->description));

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

    }
?>