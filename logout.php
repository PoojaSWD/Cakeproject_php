<?php
session_start();
    unset($_SESSION['user_users_id']);
    unset($_SESSION['user_users_username']);
    header("Location: home.php?logout_success=1");

?>