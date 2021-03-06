<?php

    session_start();
    unset($_SESSION['comp_id']);
    unset($_SESSION['comp_name']);
    unset($_SESSION['comp_email']);
    unset($_SESSION['comp_password']);
    unset($_SESSION['comp_address']);
    unset($_SESSION['comp_about']);
    unset($_SESSION['comp_logo']);
    session_destroy();
    header("Location:/jobalert.in/index.php");

?>