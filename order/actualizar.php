<?php
    require_once 'order-objeto.php';

    $id=($_POST["id"]);
    $food_id = ($_POST["food_id"]);
    $quantity = ($_POST["quantity"]);
    $customer_name = ($_POST["customer_name"]);
    $customer_email = ($_POST["customer_email"]);
    $customer_address = ($_POST["customer_address"]);
    $subtotal = null;
    $iva = null;
    $total = null;

    $order = new Order($id,$food_id,$quantity,$customer_name,$customer_email,$customer_address,$subtotal,$iva,$total);
    
    $subtotal = $order->calculateSubtotal();
    $order->setSubtotal($subtotal);
    $iva = $order->calculateIva($subtotal);
    $order->setIva($iva);
    $total = $order->calculateTotal($subtotal, $iva);
    $order->setTotal($total);
    
    $order->updateOrder();

    Header("Location: order.php");
?>