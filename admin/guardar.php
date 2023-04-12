<?php
    require_once("admin-objeto.php");

    $id=null;
    $fullname=($_POST["fullname"]);
    $username=($_POST["username"]);
    $password=($_POST["password"]);

    $admin = new Admin($id,$fullname,$username,$password);

    $admin->createAdmin();
    Header("Location: admin.php");
?>
