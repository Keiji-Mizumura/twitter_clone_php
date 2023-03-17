<?php
    include_once 'serverside/dbh.inc.php';
?>

<div class="tweets">

<?php
    $tweetQuery = "SELECT * FROM tweets ORDER BY tweet_id DESC;";
    if($result = mysqli_query($conn, $tweetQuery)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $tweetContent = $row['tweet_content'];
                $tweetImage = $row['tweet_image'];
            ?>
<!-- HTML CODE -->

<div class="tweet-item">
        <div class="avatar-grid">
            <img src="https://media.discordapp.net/attachments/1081029798597496856/1085976628317913198/Mizuke_The_Rock_but_Chinese_e5f5749f-2b73-4c91-bda7-e6971f1217c0.png?width=1194&height=1194" alt="Avatar the last airbender" />
        </div>
        <div class="tweet-grid">
            <div class="tweet-information">
                <div class="tweet-user">
                    <h3 class="tweet-username">John Doe</h3>
                    <p>@johndoecena</p>
                    <p>| 40 Years Ago</p>
                </div>
                <div class="tweet-content">
                    <p>
                        <?php echo $tweetContent; ?>
                    </p>
                    <img src=<?php echo $tweetImage; ?> alt="tweet photo" />
                </div>
                <div class="tweet-controls">
                    <div class="tweet-controls-item">
                        <i class="fa-regular fa-comment"></i>
                        <p>340</p>
                    </div>
                    <div class="tweet-controls-item">
                        <i class="fa-solid fa-retweet"></i>
                        <p>5.3M</p>
                    </div>
                    <div class="tweet-controls-item">
                        <i class="fa-regular fa-heart"></i>
                        <p>7592</p>
                    </div>
                    <div class="tweet-controls-item">
                        <i class="fa-solid fa-chart-simple"></i>
                        <p>8.0B</p>
                    </div>
                    <div class="tweet-controls-item-last">
                        <i class="fa-solid fa-arrow-up-from-bracket"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- END OF HTML CODE -->
            <?php
            }
        }
    }
?>





    <div class="tweet-item">
        <div class="avatar-grid">
            <img src="https://media.discordapp.net/attachments/1081029798597496856/1085976628317913198/Mizuke_The_Rock_but_Chinese_e5f5749f-2b73-4c91-bda7-e6971f1217c0.png?width=1194&height=1194" alt="Avatar the last airbender" />
        </div>
        <div class="tweet-grid">
            <div class="tweet-information">
                <div class="tweet-user">
                    <h3 class="tweet-username">John Doe</h3>
                    <p>@johndoecena</p>
                    <p>| 40 Years Ago</p>
                </div>
                <div class="tweet-content">
                    <p>
                        Delicious! BING CHILLING! Would visit China again after 40 years. (This was me before puberty)
                    </p>
                    <img src="https://media.discordapp.net/attachments/1081029798597496856/1085981105758421042/MZMRKJ_Fetus_on_a_chinese_soup_inside_a_chinese_restaurant._Chi_cbeadd98-b295-41b8-b2ad-c04a0e626781.png?width=1194&height=1194" alt="tweet photo" />
                </div>
                <div class="tweet-controls">
                    <div class="tweet-controls-item">
                        <i class="fa-regular fa-comment"></i>
                        <p>340</p>
                    </div>
                    <div class="tweet-controls-item">
                        <i class="fa-solid fa-retweet"></i>
                        <p>5.3M</p>
                    </div>
                    <div class="tweet-controls-item">
                        <i class="fa-regular fa-heart"></i>
                        <p>7592</p>
                    </div>
                    <div class="tweet-controls-item">
                        <i class="fa-solid fa-chart-simple"></i>
                        <p>8.0B</p>
                    </div>
                    <div class="tweet-controls-item-last">
                        <i class="fa-solid fa-arrow-up-from-bracket"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>