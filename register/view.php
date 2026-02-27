<?php include_once "../head.html"; ?>
        <div id = "registration_page" class="registerbody">
            <div class="container">
                <div class="heading">Create your account</div>
                <form class="form" action="" method="post">
                    <div class="input-field">
                        <input type="text" required id="username" name="username">
                        <label for="username">Full name</label>
                    </div>
                    <div class="input-field">
                        <input type="email" required id="email" name="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" required id="password" name="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="input-field">
                        <input type="tel" id="phone_number" name="phone_number">
                        <label for="phone_number">Phone Number</label>
                    </div>
                    <div class="btn-container">
                        <input class="btn" type="submit" value="Submit"/>
                        <div class="acc-text">Already have an account?
                            <a style = "color: blue; cursor: pointer;" href="../login/"> Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>