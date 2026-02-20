<?php include_once "../head.html"; ?>
        <div id = "registration_page" class="registerbody">
            <div class="container">
                <div class="heading">Login to your account</div>
                <form class="form" action="" method="post">
                    <div class="input-field">
                        <input type="email" required id="email" name="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" required id="password" name="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="btn-container">
                        <input class="btn" type="submit" value="Submit"/>
                        <div class="acc-text">Don't have an account?
                        <a style = "color: blue; cursor: pointer;" href="/register/">Register</a>
                    </div>
                </form>
            </div>
        </div>
        <script></script>
    </body>
</html>