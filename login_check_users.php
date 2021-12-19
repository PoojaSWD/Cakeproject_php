<?php
require_once('config.php');
$user_username = $_POST['userName'];
$user_password = $_POST['password'];
$select = "SELECT * FROM cake_shop_users_registrations WHERE user_username = '$user_username' AND user_password = '$user_password'";
$query = mysqli_query($conn, $select);
$res = mysqli_fetch_assoc($query);
if (mysqli_num_rows($query) > 0) {
    session_start();
	$_SESSION['user_users_id'] = $res['users_id'];
	$_SESSION['user_users_username'] = $res['user_username'];
	header("Location:home.php?login_success=1");
} 
else {
	header("Location:home.php?login_error=1");
}
?>