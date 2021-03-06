<?php

    session_start();
    unset($_SESSION['admin_name']);
    unset($_SESSION['admin_password']);
    
    session_destroy();
    
    header("Location:/jobalert.in/index.php");

?>