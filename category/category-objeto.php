<?php

    require_once '../conexion/conexion.php';

    class Category
    {

        public $id;
        public $title;
        const TABLA = 'category';

        public function __construct($id="",$title)
        {
            $this->id = $id;
            $this->title = $title;
        }

        public function getId() {
            return $this->id;
        }
        
        public function getTitle() {
            return $this->title;
        }
        
        public function setTitle($title) {
            $this->title = $title;
        }

        public function createCategory()
        {
            $conexion = new Conexion();
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (title) VALUES(:title)');
            $consulta->bindParam(':title', $this->title);
            $consulta->execute();
            $this->id = $conexion->lastInsertId();
            $conexion = null;
        }

        public static function readCategory()
        {
            $conexion = new Conexion();
            $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' ORDER BY id');
            $consulta->execute();
            $registros = $consulta->fetchAll();
            return $registros;
        }

        public static function searchId($id){
            $conexion = new Conexion();
            $stmt = $conexion->prepare("SELECT * FROM " . self::TABLA . " WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $resultado = $stmt->fetch();
            return new Category($resultado['id'], $resultado['title']);
        }

        public function updateCategory()
        {
            $conexion = new Conexion();
            $stmt = $conexion->prepare("UPDATE " . self::TABLA . " SET title = :title WHERE id = :id");
            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':title', $this->title);
            $stmt->execute();
            $conexion = null;
        }

        public static function deleteCategory($id)
        {
            $conexion= new Conexion();
            $consulta = $conexion->prepare('DELETE FROM '  .self ::TABLA .' WHERE id= :id');
            $consulta->bindParam(':id',$id);
            $consulta->execute();
            $registro = $consulta->fetch();
        }

    }

?>