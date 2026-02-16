<?php    
	session_start();
    if(array_key_exists('status', $_SESSION) && $_SESSION['status'] == "loged in"){
        include "view.html";
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $recipe = "";
            $recipe .= htmlspecialchars($_POST['title']);
            foreach($_POST as $key => $element){
                if(str_contains($key, "ingredient_")){
                    if($key == "ingredient_0"){
                        $recipe .= "</>".htmlspecialchars($element);
                    }
                    else{
                        $recipe .= "<>".htmlspecialchars($element);
                    }
                }
                if(str_contains($key, "step_")){
                    if($key == "step_0"){
                        $recipe .= "</>".htmlspecialchars($element);
                    }
                    else{
                        $recipe .= "<>".htmlspecialchars($element);
                    }
                }
            }
            $f_recipes = fopen("../data/recipes_table.csv", "a+");
            fwrite($f_recipes, "{$recipe}\n");
            fclose($f_recipes);
        }
    }
	else{
        header("location: /login/?l=add_recipe");
    }
?>