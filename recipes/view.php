<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>recipes</title>
    </head>
    <body>
        <h1>Recipes</h1>
        <ul>
            <?php foreach ($recipe_titles as $index => $recipe) { ?>
            <li><a href = "/recipe/?id=<?php echo $index; ?>">
            	<?php echo $recipe; ?>
                </a></li>
            <?php } ?>
        </ul>
        <a href = "/favorites/">favorites</a>
		<a href = "/add_recipe/"><h2>add</h2></a>
	</body>
</html>