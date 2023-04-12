<?php
    require_once("order-objeto.php");

    $id=$_GET['id'];

    $order = Order::deleteOrder($id);
    Header("Location: order.php");
?>