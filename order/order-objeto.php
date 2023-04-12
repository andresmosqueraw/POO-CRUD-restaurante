<?php

    require_once '../conexion/conexion.php';

    class Order
    {

        public $id;
        public $food_id;
        public $quantity;
        public $customer_name;
        public $customer_email;
        public $customer_address;
        public $subtotal;
        public $iva;
        public $total;

        const TABLA = 'orders';

        public function __construct($id,$food_id,$quantity,$customer_name,$customer_email,$customer_address,$subtotal,$iva,$total)
        {
            $this->id = $id;
            $this->food_id = $food_id;
            $this->quantity = $quantity;
            $this->customer_name =  $customer_name;
            $this->customer_email = $customer_email;
            $this->customer_address = $customer_address;
            $this->subtotal =  $subtotal;
            $this->iva =  $iva;
            $this->total =  $total; 
        }

        public function getId() {
            return $this->id;
        }
    
        public function getFoodId() {
        return $this->food_id;
        }
    
        public function setFoodId($food_id) {
        $this->food_id = $food_id;
        }
    
        public function getQuantity() {
        return $this->quantity;
        }
    
        public function setQuantity($quantity) {
        $this->quantity = $quantity;
        }
    
        public function getCustomerName() {
        return $this->customer_name;
        }
    
        public function setCustomerName($customer_name) {
        $this->customer_name = $customer_name;
        }
    
        public function getCustomerEmail() {
        return $this->customer_email;
        }
    
        public function setCustomerEmail($customer_email) {
        $this->customer_email = $customer_email;
        }
    
        public function getCustomerAddress() {
        return $this->customer_address;
        }
    
        public function setCustomerAddress($customer_address) {
        $this->customer_address = $customer_address;
        }
    
        public function getSubtotal() {
        return $this->subtotal;
        }
    
        public function setSubtotal($subtotal) {
        $this->subtotal = $subtotal;
        }
    
        public function getIva() {
        return $this->iva;
        }
    
        public function setIva($iva) {
        $this->iva = $iva;
        }
    
        public function getTotal() {
        return $this->total;
        }
    
        public function setTotal($total) {
        $this->total = $total;
        }
        

        public function createOrder()
        {
            $conexion = new Conexion();
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (food_id, quantity, customer_name, customer_email, customer_address, subtotal, iva, total) VALUES(:food_id, :quantity, :customer_name, :customer_email, :customer_address, :subtotal, :iva, :total)');
            $consulta->bindParam(':food_id', $this->food_id);
            $consulta->bindParam(':quantity', $this->quantity);
            $consulta->bindParam(':customer_name', $this->customer_name);
            $consulta->bindParam(':customer_email', $this->customer_email);
            $consulta->bindParam(':customer_address', $this->customer_address);
            $consulta->bindParam(':subtotal', $this->subtotal);
            $consulta->bindParam(':iva', $this->iva);
            $consulta->bindParam(':total', $this->total);
            $consulta->execute();
            $this->id = $conexion->lastInsertId();
            $conexion = null;
        }

        public static function readOrder()
        {
            $conexion = new Conexion();
            $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' ORDER BY id');
            $consulta->execute();
            $registros = $consulta->fetchAll();
            return $registros;
        }

        public static function searchId($id)
        {
            $conexion = new Conexion();
            $stmt = $conexion->prepare("SELECT * FROM " . self::TABLA . " WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $resultado = $stmt->fetch();
            return new Order($resultado['id'], $resultado['food_id'], $resultado['quantity'], $resultado['customer_name'], $resultado['customer_email'], $resultado['customer_address'], $resultado['subtotal'], $resultado['iva'], $resultado['total']);
        }

        public function updateOrder()
        {
            $conexion = new Conexion();
            $stmt = $conexion->prepare("UPDATE " . self::TABLA . " SET food_id = :food_id, quantity = :quantity, customer_name = :customer_name, customer_email = :customer_email, customer_address = :customer_address, subtotal = :subtotal, iva = :iva, total = :total WHERE id = :id");
            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':food_id', $this->food_id);
            $stmt->bindParam(':quantity', $this->quantity);
            $stmt->bindParam(':customer_name', $this->customer_name);
            $stmt->bindParam(':customer_email', $this->customer_email);
            $stmt->bindParam(':customer_address', $this->customer_address);
            $stmt->bindParam(':subtotal', $this->subtotal);
            $stmt->bindParam(':iva', $this->iva);
            $stmt->bindParam(':total', $this->total);
            $stmt->execute();
            $conexion = null;
        }

        public static function deleteOrder($id)
        {
            $conexion= new Conexion();
            $consulta = $conexion->prepare('DELETE FROM '  .self ::TABLA .' WHERE id= :id');
            $consulta->bindParam(':id',$id);
            $consulta->execute();
            $registro = $consulta->fetch();
        }

        public function calculateSubtotal(){
            if($this->food_id == '1') return 20000 * $this->quantity;
            else if($this->food_id == '2') return 15000 * $this->quantity;
            else if($this->food_id == '3') return 10000 * $this->quantity;
        }
    
        public function calculateIva($subtotal){
            return $subtotal * 0.19;
        }
    
        public function calculateTotal($subtotal, $iva){
            return $subtotal + $iva;
        }

    }

?>