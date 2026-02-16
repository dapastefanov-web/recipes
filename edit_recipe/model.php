<?php
    function save_recipe(){
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
        $recipes = file("../data/recipes_table.csv");
        $recipes[$_GET['id']] = $recipe . "\n";
        file_put_contents("../data/recipes_table.csv", implode("", $recipes));
    }

    function get_recipe(){
    $f_recipes = fopen("../data/recipes_table.csv", "r");
    $recipe = [];
    $recipe_id = $_GET['id'];
    for($recipe_id; $recipe_id >= 0; $recipe_id--){
        $recipe = fgets($f_recipes);
    }
    return $recipe = explode("</>", $recipe);
    }
?>