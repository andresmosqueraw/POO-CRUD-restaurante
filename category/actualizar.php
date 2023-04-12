<?php
    require_once 'category-objeto.php';

    $id=($_POST["id"]);
    $title=($_POST["title"]);

    $category = new Category($id, $title);
    $category->updateCategory();

    Header("Location: category.php");
?>