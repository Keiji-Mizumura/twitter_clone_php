<?php
    include_once 'dbh.inc.php';

    // TODO: Make this tweet get the users information and give it the user's id

    if(isset($_POST['tweet-item'])){
        // $user_id = $_SESSION['user-id'];
        $tweet = $_POST['content'];
        $url = $_POST['image-url'];
        // $tweet_comments = GET THE VALUE THROUGH THE TWEET ID and count how many coments
        // $tweet_retweet = DUNNO HOW TO DO THIS YET
        // $tweet_likes = Initially Zero
        // $tweet_analytics = DUNNO HOW THIS WORKS TOO
        

        $query = "INSERT INTO tweets (user_id,tweet_content,tweet_image,tweet_comments,tweet_retweet, tweet_likes,tweet_analytics)
        VALUES(24,'$tweet','$url', 200 , 150, 5 , 69);";
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
    