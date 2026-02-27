<?php
    include_once "../sources/model.php";
    $f_recipes = fopen("../data/recipes_table.csv", "r");
    $recipe = "";
    $recipe_id = $_GET['id'];
    for($recipe_id; $recipe_id >= 0; $recipe_id--){
        $recipe = fgets($f_recipes);
    }
    $recipe = rtrim($recipe, "\n");
    $recipe = explode("</>", $recipe);
    include_once 'view.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(array_key_exists('star', $_POST)){
            $rating = $_POST['star'];
            sort($rating);
            $rating = $rating[count($rating) - 1];
            if(!str_contains($recipe[3], "<>")){
                $recipe[3] = $rating . "<>1";
                $recipe = implode("</>", $recipe) . "\n";
                $recipes = file("../data/recipes_table.csv");
                $recipes[$_GET['id']] = $recipe;
                file_put_contents("../data/recipes_table.csv", implode("", $recipes));
            }
            else {
                $rated = explode("<>", $recipe[3]);
                $rated[0] = (($rated[0] * $rated[1]) + $rating) / ($rated[1] + 1);
                $rated[1]++;
                $recipe[3] = implode("<>", $rated);
                $recipe = implode("</>", $recipe) . "\n";
                $recipes = file("../data/recipes_table.csv");
                $recipes[$_GET['id']] = $recipe;
                file_put_contents("../data/recipes_table.csv", implode("", $recipes));
            }
        }
    }
    fclose($f_recipes);
?>