<?php
    include_once 'dbh.inc.php';

    if(isset($_POST['tweet-item'])){
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $tweet = $_POST['content'];
        $url = $_POST['image-url'];

        $query = "INSERT INTO tweets (user_id,tweet_content,tweet_image,tweet_comments,tweet_retweet, tweet_likes,tweet_analytics) VALUES(24,'$tweet','$url', 200 , 150, 5 , 69);";
        if(mysqli_query($conn, $query)){
            header("Location: ../index.php?tweet=success");
            exit();
        }
        else{
            header("Location: ../dummy.php?tweet=error");
            exit();
        }
    }

    else{
        echo "YOU GOT 404";
    }
    