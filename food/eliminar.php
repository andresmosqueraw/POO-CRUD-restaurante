<?php
    require_once("food-objeto.php");

    $id=$_GET['id'];

    $foods = Food::deleteFood($id);
    Header("Location: food.php");
?>