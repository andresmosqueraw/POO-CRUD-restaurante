<?php

    require_once '../conexion/conexion.php';

    class Food
    {

        public $id;
        public $title;
        public $description;
        public $price;
        public $category_id;
        public $admin_id;

        const TABLA = 'foods';

        public function __construct($id="",$title,$description,$price,$category_id,$admin_id)
        {
            $this->id = $id;
            $this->title = $title;
            $this->description = $description;
            $this->price = $price;
            $this->category_id = $category_id;
            $this->admin_id = $admin_id;
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
        
        public function getDescription() {
            return $this->description;
        }
        
        public function setDescription($description) {
            $this->description = $description;
        }
        
        public function getPrice() {
            return $this->price;
        }
        
        public function setPrice($price) {
            $this->price = $price;
        }

        public function getCategory_id() {
            return $this->category_id;
        }
        
        public function setCategory_id($category_id) {
            $this->category_id = $category_id;
        }


        public function getAdmin_id() {
            return $this->admin_id;
        }
        
        public function setAdmin_id($admin_id) {
            $this->admin_id = $admin_id;
        }


        public function createFood()
        {
            $conexion = new Conexion();
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (title, description, price, category_id,admin_id) VALUES(:title, :description, :price, :category_id, :admin_id)');
            $consulta->bindParam(':title', $this->title);
            $consulta->bindParam(':description', $this->description);
            $consulta->bindParam(':price', $this->price);
            $consulta->bindParam(':category_id', $this->category_id);
            $consulta->bindParam(':admin_id', $this->admin_id);
            $consulta->execute();
            $this->id = $conexion->lastInsertId();
            $conexion = null;
        }

        public static function readFood()
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
            return new Food($resultado['id'], $resultado['title'], $resultado['description'], $resultado['price'], $resultado['category_id'], $resultado['admin_id']);
        }

        public function updateFood()
        {
            $conexion = new Conexion();
            $stmt = $conexion->prepare("UPDATE " . self::TABLA . " SET title = :title, title = :title, description = :description, price=:price, category_id= :category_id, admin_id=:admin_id WHERE id = :id");
            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':description', $this->description);
            $stmt->bindParam(':price', $this->price);
            $stmt->bindParam(':category_id', $this->category_id);
            $stmt->bindParam(':admin_id', $this->admin_id);
            $stmt->execute();
            $conexion = null;
        }

        public static function deleteFood($id)
        {
            $conexion= new Conexion();
            $consulta = $conexion->prepare('DELETE FROM '  .self ::TABLA .' WHERE id= :id');
            $consulta->bindParam(':id',$id);
            $consulta->execute();
            $registro = $consulta->fetch();
        }

        public function login()
        {
            
        }

    }

?>
