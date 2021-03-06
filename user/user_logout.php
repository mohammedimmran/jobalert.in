<?php

    session_start();
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_password']);
    unset($_SESSION['user_address']);
    unset($_SESSION['user_about']);
    unset($_SESSION['user_number']);
    unset($_SESSION['user_skills']);
    session_destroy();
    
    header("Location:/jobalert.in/index.php");

?>