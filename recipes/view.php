<?php include_once "../head.html"; ?>
            <main>
                <div class="content">
                <?php foreach ($recipe_titles as $index => $recipe) { ?>
                <div class="recipe-card">
                    <div class="horizontal">
                        <div class="text-side">
                            <div class="tag-box">
                                <a href="/recipe/?id=<?php echo $index; ?>" class="recipe-link">
                                    <div class="tag"><?php echo $recipe; ?></div>
                                </a>
                            </div>
                                <p class="description">
                                    This is a short description of the recipe.
                                    You can later replace this with real data from your database.
                                </p>
                            </div>
                        <spline-viewer class="robot-3d"
                            url="https://prod.spline.design/GMeXEYiP5RaVcQ-Q/scene.splinecode">
                        </spline-viewer>
                        
                    </div>
                </div>
                <?php } ?>
                <a href = "/add_recipe/"><h2>add</h2></a>
                </div>
            </main>
        </div>
        <script type="module" src="https://unpkg.com/@splinetool/viewer@1.12.58/build/spline-viewer.js"></script>
	</body>
</html>