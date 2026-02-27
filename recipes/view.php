<?php include_once "../head.html"; ?>
        <main>
            <ul>
                <?php foreach ($recipe_titles as $index => $recipe) { ?>
                    <a href="/recipe/?id=<?php echo $index; ?>">
                        <li>
                                <?php echo $recipe; ?>
                        </li>
                    </a><br>
                <?php } ?>
            </ul>
            <a href = "/add_recipe/"><h2>add</h2></a>
        </main>
	</body>
</html>