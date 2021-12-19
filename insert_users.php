<?php
require_once('config.php');

if(isset($_POST['signupbtn'])){

    $user_username =$_POST['username'];
    $user_firstname = $_POST['fname'];
    $user_lastname = $_POST['lname'];
    $user_email = $_POST['useremail'];
    $user_password = $_POST['password'];
    $user_repassword = $_POST['repassword'];

}
$insert= "INSERT INTO cake_shop_users_registrations (user_username,user_firstname,user_lastname,user_email,user_password,user_repassword) VALUES ('$user_username','$user_firstname','$user_lastname','$user_email','$user_password','$user_repassword')";
$sql = mysqli_query($conn, $insert);
// if (mysqli_query($conn, $insert)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }
$select = "SELECT * FROM cake_shop_users_registrations where user_username = '$user_username'";
$query = mysqli_query($conn, $select);
$res = mysqli_fetch_assoc($query);
if (mysqli_num_rows($query) > 0) {
    header("Location: register.php?register_msg=1");
}
else {
	header("Location: login.php");
}


?>











<!-- // if(mysqli_query($conn, $insert)){

//     echo "<script>alert('Congratulation Your account has been successfully created !!! Please login and check');</script>";

// }else{
//     echo "Error: " . $insert . "<br>" . mysqli_error($conn);
// } -->



