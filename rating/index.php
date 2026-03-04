<?php
    include_once "../sources/model.php";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $rating_raw = file_get_contents('php://input');
        $rating = json_decode($rating_raw, true);
        $new_rating_value = $rating["value"];
        $recipe = get_recipe($rating["id"]);

        if (!str_contains($recipe[3], "<>")){
            $recipe[3] = $new_rating_value . "<>1";
            $recipe = implode("</>", $recipe) . "\n";
            $recipes = file("../data/recipes_table.csv");
            $recipes[$rating["id"]] = $recipe;
            file_put_contents("../data/recipes_table.csv", implode("", $recipes));
        }
        else {
            $old_rating = explode("<>", $recipe[3]);
            $old_rating[0] = (($old_rating[0] * $old_rating[1]) + $new_rating_value) / ($old_rating[1] + 1);
            $old_rating[1]++;
            $recipe[3] = implode("<>", $old_rating);
            $recipe = implode("</>", $recipe) . "\n";
            $recipes = file("../data/recipes_table.csv");
            $recipes[$rating["id"]] = $recipe;
            file_put_contents("../data/recipes_table.csv", implode("", $recipes));
        }
    }
?>