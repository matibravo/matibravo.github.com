<?php

    require_once 'connection.php';

    abstract class Crud extends Connection{

        private $table;
        private $pdo;

        public function __construct($table)  /*llamo la conexión a la bd*/
        {
            $this->table = $table;
            $this->pdo = parent::conexion();
        }

        public function getAll()
        {
            try {
                $stm = $this->pdo->prepare("SELECT * FROM $this->table ORDER BY id DESC");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);

            } catch(PDOException $e){
                echo $e->getMessage();
            }
        }


        public function delete($id)  /*metodo q elimina por id ingresado */
        {
            try {
                $stm = $this->pdo->prepare("DELETE FROM $this->table WHERE id=?");
                $stm->execute(array($id));

            } catch (PDOException $e) {
                echo $e->getMessage();

            }
        }

        abstract function create();
        
    }
?>