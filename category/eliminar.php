<?php
    require_once("category-objeto.php");

    $id=$_GET['id'];

    $category = Category::deleteCategory($id);
    Header("Location: category.php");
?>