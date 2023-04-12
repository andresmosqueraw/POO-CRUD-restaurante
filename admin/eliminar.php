<?php
    require_once("admin-objeto.php");

    $id=$_GET['id'];

    $admin = Admin::deleteAdmin($id);
    Header("Location: admin.php");
?>