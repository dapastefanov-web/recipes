<?php
    include_once "../sources/model.php";
    $recipe = get_recipe($_GET["id"]);
    include_once 'view.php';
?>