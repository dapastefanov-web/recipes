<?php include_once "../head.html"; ?>
        <label for = "favorite">favorite<label>
        <input type = "checkbox" id = "favorite"
        onclick = "favorite.change(this, <?php echo $_GET['id'] .',\''. $recipe[0] .'\''?>)">
        <h1><?php echo $recipe[0]; ?></h1>
        <h3>rating: <?php echo explode("<>", $recipe[3])[0]; ?> </h3>
        <div class = "recipe-card">
            <h2>ingredients:</h2>
            <ul>
                <?php foreach (explode("<>", $recipe[1]) as $ingredient) {?>
                <li>
                    <?php echo $ingredient ?>
                </li>
                <?php } ?>
            </ul>
            <h2>preparation:</h2>
            <ul>
                <?php foreach (explode("<>", $recipe[2]) as $step) {?>
                <li>
                    <?php echo $step ?>
                </li>
                <?php } ?>
            </ul>
        </div>
        <a href = "/edit_recipe/?id=<?php echo $_GET['id'] ?>">edit recipe</a><br>
        <form id = "rating" method = "post">
            <label>rate recipe</label>
            <input type = "checkbox" id = "1_star" name = "star[]" value = "1" onclick = "rating.rate(1)">
            <input type = "checkbox" id = "2_star" name = "star[]" value = "2" onclick = "rating.rate(2)">
            <input type = "checkbox" id = "3_star" name = "star[]" value = "3" onclick = "rating.rate(3)">
            <input type = "checkbox" id = "4_star" name = "star[]" value = "4" onclick = "rating.rate(4)">
            <input type = "checkbox" id = "5_star" name = "star[]" value = "5" onclick = "rating.rate(5)">
            <input type = "submit" value = "submit" onclick = "rating.add(<?php echo $_GET['id'] ?>)">
        </form>
        <script src = "../sources/recipe.js"></script>
        <script>
            favorite.init();
            favorite.is_set(<?php echo $_GET['id'] ?>);
            view_history.init();
            view_history.add(<?php echo $_GET['id'] .',\''. $recipe[0] .'\''?>);
            rating.init();
            rating.is_set(<?php echo $_GET['id'] ?>);
        </script>
	</body>
</html>