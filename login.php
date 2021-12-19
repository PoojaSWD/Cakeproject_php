<?php
if (isset($_GET['login_error']) && $_GET['login_error'] == 1) {
    echo "<script>alert('Username or Password does not exist!')</script>";
    echo "<script>window.location.assign('login.php')</script>";
}
?>
 <html>
   <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>  
    <script src="https://kit.fontawesome.com/40c07e2781.js" crossorigin="anonymous"></script>
    <link href="css\shop.css" rel="stylesheet" type="text/css">
    <link href="css\login.css" rel="stylesheet" type="text/css">
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
                   <div class="logo"><img src="https://i.ibb.co/C5rxSvy/sweetedition.png" alt="sweetedition"/ class="img-responsive" id="logo">
                  </div>
                  <div class="text-center mt-4 name"> Sweet Edtion Cake online </div>
                  
                  <form class="p-3 mt-3" action="login_check_users.php" method="POST">
                  <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text" name="userName" id="userName" placeholder="Username"> </div>
                  <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password" name="password" id="pwd" placeholder="Password"> </div> 
                      <button class="btn btn-primary" type="submit" onClick="login()">Login</button>
                  </form>
                  <div class="text-center fs-6">Don't have account?<a href="register.php">  Sign up</a> here..</div>
</div>
                         
  
         
<!--scripts-->
<script type="text/javascript" src="js\login.js"></script>
                            
          </body>        
           </html>                   

