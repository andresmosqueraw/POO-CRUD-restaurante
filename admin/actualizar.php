<?php
    require_once 'admin-objeto.php';

    $id=($_POST["id"]);
    $fullname=($_POST["fullname"]);
    $username=($_POST["username"]);
    $password=($_POST["password"]);

    $admin = new Admin($id, $fullname, $username, $password);
    $admin->updateAdmin();

    Header("Location: admin.php");
?>