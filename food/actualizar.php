<?php
    require_once 'food-objeto.php';

    $id=($_POST["id"]);
    $title=($_POST["title"]);
    $description=($_POST["description"]);
    $price=($_POST["price"]);
    $category_id=($_POST["category_id"]);
    $admin_id=($_POST["admin_id"]);

    $food = new Food($id, $title, $description, $price, $category_id,$admin_id );
    $food->updateFood();

    Header("Location: food.php");
?>