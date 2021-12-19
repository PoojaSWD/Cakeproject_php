<?php
require_once('config.php');
$user_username =$_POST['username'];
$user_email = $_POST['useremail'];
$user_password = $_POST['password'];
$user_repassword = $_POST['repassword'];
$users_id = $_POST['hidden_users_id'];
$update = "UPDATE cake_shop_users_registrations set user_username = '$user_username', user_email = '$user_email', user_password = '$user_password',user_repassword = '$user_repassword' where users_id = $users_id";
mysqli_query($conn, $update);
header("Location: account_users.php?edit_success=1")
?>