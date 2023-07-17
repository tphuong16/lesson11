<?php
     require_once 'pdo.php';
     $categoryConnection = new CategoryConnection();
     $data = ['name' => $_POST['name']];
     $categoryConnection->createNewData($data);
    header("Location: http://localhost/learn_php/category/index.php");
?>