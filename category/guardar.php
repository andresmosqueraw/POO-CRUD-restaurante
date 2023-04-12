<?php
    require_once("category-objeto.php");

    $id=null;
    $title=($_POST["title"]);

    $category = new Category($id,$title);

    $category->createCategory();
    Header("Location: category.php");
?>
