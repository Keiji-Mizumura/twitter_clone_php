<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php
        include_once 'styles/styles.php'
    ?>
</head>
<body>
    <?php
        include_once 'layouts/header.php';
    ?>

    <form action="serverside/tweet.inc.php" method="POST">
        <br><br><br><br><br><br><br><br><br><br>
        <p>Full name</p>
        <input type="text" name="fullname" />
        <p>Username</p>
        <input type="text" name="username" />
        <p>Tweet</p>
        <input type="text" name="content" required/>
        <p>Image Url</p>
        <input type="text" name="image-url" required/>
        <input type="submit" name="tweet-item" value="TWEET">
    </form>

    <?php
        include_once 'scripts/javascript.php';
    ?>
</body>
</html>