<?php
    require_once("food-objeto.php");

    $id=null;
    $title=($_POST["title"]);
    $description=($_POST["description"]);
    $price=($_POST["price"]);
    $category_id=($_POST["category_id"]);
    $admin_id=($_POST["admin_id"]);

    $foods = new Food($id,$title,$description,$price,$category_id,$admin_id);

    $foods->createFood();
    Header("Location: food.php");
?>