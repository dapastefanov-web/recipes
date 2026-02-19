<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>recipe</title>
    </head>
    <body>
        <input type = "checkbox" id = "favorite" value = "<?php echo $_GET['id'].",". $recipe[0] ?>" onclick = "change_favorite()">
        <h1><?php echo $recipe[0]; ?></h1>
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
        <a href = "/edit_recipe/?id=<?php echo $_GET['id'] ?>">edit recipe</a><br>
        <a href = "/recipes/">recipes</a>
        <script src = "../sources/recipe.js"></script>
        <script>
            if ("favorite_recipe|" + document.getElementById("favorite").value.split(",")[0] in localStorage){
                    document.getElementById("favorite").checked = true;
            }
        </script>
	</body>
</html>