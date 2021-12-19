<?php
if (isset($_GET['register_msg']) && $_GET['register_msg'] == 1) {
    echo "<script>alert('Username already assigned!!!')</script>";
    echo "<script>window.location.assign('register.php')</script>";
}
?>


<html>
   <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>  
    <script src="https://kit.fontawesome.com/40c07e2781.js" crossorigin="anonymous"></script>
    <link href="css\shop.css" rel="stylesheet" type="text/css">
    <link href="css\register.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  </head>

 <body>

 <div class="container-fluid">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="#" id="brandname">Sweet Edition</a>
                   


                             <!--second navbar-->
                             <ul class="navbar-nav ms-auto" id="upnav">
                    <li class="nav item">
                        <a class="nav-link" href="home.php"><i class="fas fa-home"></i><span style="color:#212529;font-size:20px;font-weight:bold">  Home</span></a>
                    </li>
                </ul>
                </nav>
</div>
         <div class="container">
                <form class="p-3 mt-3" method="POST" action="insert_users.php">
                   <div class="logo"><img src="https://i.ibb.co/C5rxSvy/sweetedition.png" alt="sweetedition"/ class="img-responsive" id="logo">
                  </div>
                  <div class="text-center mt-4 name"> Sweet Edtion cake online </div>
                  <p class="registersuninfo">Please enter user information here. </p>
                 
                  <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text" name="fname" id="fname" placeholder="Enter First Name.." onblur="changefname()"> </div>
                  <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text" name="lname" id="lname" placeholder="Enter lastname Name.." onblur="changelname()"> </div>
                  <div class="form-field d-flex align-items-center"> <span class="fas fa-user"></span> <input type="text" name="username" id="username" placeholder="Enter username Name.."> </div>
                  <div class="form-field d-flex align-items-center"> <span class="fa fa-envelope""></span> <input type="email" name="useremail" id="useremail" placeholder="Enter Email Name.."> </div>
                  <div class="form-field d-flex align-items-center"> <span class="fa fa-key"></span> <input type="password" name="password" id="pwd" placeholder=" Enter Password here"> </div>
                  <div class="form-field d-flex align-items-center"> <span class="fa fa-key"></span> <input type="password" name="repassword" id="repwd" placeholder="Enter Repassword here"><span class="fa fa-eye" onClick = "showpassword()"> </span>   </div> 
                      <button class="btn btn-success" type="submit" name="signupbtn"  onClick="return formvalidation()">Sign Up</button>
                  
                  <div class="text-center fs-6">Already have a account?<a href="login.php"> Log in </a> here..</div>
                  </form>
</div>




<!--script-->
<script src="js\register.js" type="text/javascript"></script>

<!--end of script-->

</body>
</html>