<?php

    require_once '../conexion/conexion.php';

    class Admin
    {

        public $id;
        public $fullname;
        public $username;
        private $password;
        const TABLA = 'admins';

        public function __construct($id="",$fullname,$username,$password)
        {
            $this->id = $id;
            $this->fullname = $fullname;
            $this->username = $username;
            $this->password = $password;
        }

        public function getId() {
            return $this->id;
        }
        
        public function getFullname() {
            return $this->fullname;
        }
        
        public function setFullname($fullname) {
            $this->fullname = $fullname;
        }
        
        public function getUsername() {
            return $this->username;
        }
        
        public function setUsername($username) {
            $this->username = $username;
        }
        
        public function getPassword() {
            return $this->password;
        }
        
        public function setPassword($password) {
            $this->password = $password;
        }

        public function createAdmin()
        {
            $conexion = new Conexion();
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (fullname, username, passwords) VALUES(:fullname, :username, :passwords)');
            $consulta->bindParam(':fullname', $this->fullname);
            $consulta->bindParam(':username', $this->username);
            $consulta->bindParam(':passwords', $this->password);
            $consulta->execute();
            $this->id = $conexion->lastInsertId();
            $conexion = null;
        }

        public static function readAdmin()
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
            return new Admin($resultado['id'], $resultado['fullname'], $resultado['username'], $resultado['passwords']);
        }

        public function updateAdmin()
        {
            $conexion = new Conexion();
            $stmt = $conexion->prepare("UPDATE " . self::TABLA . " SET fullname = :fullname, username = :username, passwords = :password WHERE id = :id");
            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':fullname', $this->fullname);
            $stmt->bindParam(':username', $this->username);
            $stmt->bindParam(':password', $this->password);
            $stmt->execute();
            $conexion = null;
        }

        public static function deleteAdmin($id)
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