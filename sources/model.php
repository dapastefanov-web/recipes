<?php
    function prepare_recipe($new_recipe){
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
        if ($new_recipe){
            $recipe .= "</>Not rated";
        }
        return $recipe . "\n";
    }
    function get_recipe(){
        $f_recipes = fopen("../data/recipes_table.csv", "r");
        $recipe = [];
        $recipe_id = $_GET['id'];
        for($recipe_id; $recipe_id >= 0; $recipe_id--){
            $recipe = fgets($f_recipes);
        }
        $recipe = explode("</>", $recipe);
        fclose($f_recipes);
        return $recipe;
    }
    function save_recipe(){
        $recipe = prepare_recipe(false);
        $recipe = rtrim($recipe, "\n") . explode("</>", $recipes[$_GET['id']])[3] . "\n";
        $recipes = file("../data/recipes_table.csv");
        $recipes[$_GET['id']] = $recipe;
        file_put_contents("../data/recipes_table.csv", implode("", $recipes));
    }
?>