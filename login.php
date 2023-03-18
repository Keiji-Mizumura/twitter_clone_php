<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in to Tweeter</title>
    <?php
        include_once 'styles/styles.php'
    ?>
</head>
<body>
    <div class="form-container">
        <form class="form-box" action="serverside/login.inc.php" method="POST">
            <div class="login-header">
                <i class="fa-solid fa-kiwi-bird"></i>
                <h3>Log in to Tweeter</h3>
            </div>
            <div class="input-field">
                <label for="username">
                    Phone, email, or username
                </label>
                <input type="text" name="username">
            </div>
            <div class="input-field">
                <label for="password">
                    Password
                </label>
                <input type="password" name="password">
            </div>
            <div class="input-field-btn">
                <input type="submit" name="login" value="Log in" />
            </div>
            <div class="form-links">
                <a href="#">Forgot password?</a>
                <a href="#">Sign up for Tweeter</a>
            </div>
        </form>
    </div>

    <?php
        include_once 'scripts/javascript.php';
    ?>
</body>
</html>