<?php
    
    if(isset($_POST['signup'])){
        // TODO: This is to create a new user
    }
    else{
        // how to direct user to index.php? 
        header("Location: ../index.php?signup=error");
        exit();
    }