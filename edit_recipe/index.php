<?php
    include_once "../sources/model.php";
	session_start();
    if(array_key_exists('status', $_SESSION) && $_SESSION['status'] == "loged in"){
        $recipe = get_recipe($_GET['id']);
        include_once "view.php";
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            save_recipe();
            file_put_contents("../sources/cosmetics/" . $_GET['id'] . ".png", "");
            move_uploaded_file($_FILES['image']['tmp_name'], "../sources/cosmetics/" . $_GET['id'] . ".png");
            header("location: /../recipe/?id=" . $_GET['id']);
        }
    }
	else{
        header("location: /login/?l=edit_recipe&id=" . $_GET['id']);
    }
?>