<?php    
    include_once "../model.php";
	session_start();
    if(array_key_exists('status', $_SESSION) && $_SESSION['status'] == "loged in"){
        include "view.html";
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $recipe = prepare_recipe();
            file_put_contents("../data/recipes_table.csv", $recipe, FILE_APPEND);
        }
    }
	else{
        header("location: /login/?l=add_recipe");
    }
?>