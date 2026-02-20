<?php include_once "../head.html"; ?>
        <input type = "checkbox" id = "favorite"
        onclick = "favorite.change(this, <?php echo $_GET['id'] .',\''. $recipe[0] .'\''?>)">
        <h1><?php echo $recipe[0]; ?></h1>
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
        <script src = "../sources/recipe.js"></script>
        <script>
            favorite.init();
            favorite.is_set(<?php echo $_GET['id'] ?>);
            view_history.init();
            view_history.add(<?php echo $_GET['id'] .',\''. $recipe[0] .'\''?>);
        </script>
	</body>
</html>