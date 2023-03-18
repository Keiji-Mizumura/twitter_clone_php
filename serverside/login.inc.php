<?php
    include_once "dbh.inc.php";

    if(isset($_POST['login'])){
        $username = $_POST['username']; // TODO: Add mysql escape sequence to avoid sql injections
        $password = $_POST['password'];
        // TODO: Finish the login logic
    }
    else{
        // KICK THE USER OUT OF THIS PAGE
        header("Location: ../login.php?message=invalid");
        exit();
    }
        