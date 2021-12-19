<?php
session_start();
if (!empty($_SESSION['cart'])) {
    $printCount = count($_SESSION['cart']);
}
else {
    $printCount = 0;
}
if (!empty($_SESSION['user_users_id']) && !empty($_SESSION['user_users_username'])) {
    $printUsername = $_SESSION['user_users_username'];
}
else {
    $printUsername = "None"; 
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop | SWEET EDITION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>  
    <script src="https://kit.fontawesome.com/40c07e2781.js" crossorigin="anonymous"></script>
    <link href="images\title_icon.jpg" rel="icon">
    <link href="css\shop.css" rel="stylesheet" type="text/css" media="all">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    
<div class="container-fluid">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="#" id="brandname">Sweet Edition</a>
                   


                             <!--second navbar-->
                             <ul class="navbar-nav ms-auto" id="upnav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-user-circle"></i>  User</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <div class="nav-user-info">
                                <h5 class="text-white nav-user-name"></h5>
                                <span class="status"></span><span class="ml-2"> Available</span>
                            </div>
                                    <a class="dropdown-item" href="account_users.php"><i class="fas fa-user mr-2"></i>&nbsp; &nbsp;Account</a>
                                    <a class="dropdown-item" href="login_users.php"><i class="fas fa-sign-in-alt mr-2"></i>&nbsp; &nbsp;Login</a>
                                    <a class="dropdown-item" href="logout_users.php"><i class="fas fa-power-off mr-2"></i>&nbsp; &nbsp;Logout</a>
                        </div>
                    </li>
                </ul>
                </nav>
    
                    <nav class="navbar navbar-expand-md navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbrsupport">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                            <div class="collapse navbar-collapse" id="navbrsupport">
                                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="home.php">Cakes</a>
                                    </li>
                                        <div class="vr"></div>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="flavour" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            By Flavour
                                        </a>
                                        <ul class="dropdown-menu">
                                        <?php
                                                    require_once('config.php');
                                                    $select = "SELECT * FROM cake_shop_flavours";
                                                    $query = mysqli_query($conn, $select);
                                                    while ($res = mysqli_fetch_assoc($query)) {
                                                    ?>
                                                        <a class="dropdown-item" href="shop.php?category=<?php echo $res['subtype_id'];?>">
                                                            <?php echo $res['flavours'];?>
                                                        </a>
                                                    <?php
                                                    }
                                                    ?>
                                        </ul>     
                                    </li>
                                        <div class="vr"></div>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="flavour" role="button" data-bs-toggle="dropdown">
                                            By Type
                                        </a>
                                        <ul class="dropdown-menu">
                                        <?php
                                                    require_once('config.php');
                                                    $select = "SELECT * FROM cake_shop_type";
                                                    $query = mysqli_query($conn, $select);
                                                    while ($res = mysqli_fetch_assoc($query)) {
                                                    ?>
                                                        <a class="dropdown-item" href="shop.php?category=<?php echo $res['subtype_id'];?>">
                                                            <?php echo $res['cake_type'];?>
                                                        </a>
                                                    <?php
                                                    }
                                                    ?>
                                            
                                        
                                        </ul>
                                    </li>
                                        <div class="vr"></div>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="flavour" role="button" data-bs-toggle="dropdown">
                                            Desserts
                                        </a>
                                        <ul class="dropdown-menu">
                                        <?php
                                                    require_once('config.php');
                                                    $select = "SELECT * FROM cake_shop_desserts";
                                                    $query = mysqli_query($conn, $select);
                                                    while ($res = mysqli_fetch_assoc($query)) {
                                                    ?>
                                                        <a class="dropdown-item" href="shop.php?category=<?php echo $res['subtype_id'];?>">
                                                            <?php echo $res['dessert_name'];?>
                                                        </a>
                                                    <?php
                                                    }
                                                    ?>
                                        </ul>    

                                    </li>
                                    <div class="vr"></div>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="flavour" role="button" data-bs-toggle="dropdown">
                                            Designer Cakes
                                        </a>
                                        <ul class="dropdown-menu">
                                        <?php
                                                    require_once('config.php');
                                                    $select = "SELECT * FROM cake_shop_designer";
                                                    $query = mysqli_query($conn, $select);
                                                    while ($res = mysqli_fetch_assoc($query)) {
                                                    ?>
                                                        <a class="dropdown-item" href="shop.php?category=<?php echo $res['subtype_id'];?>">
                                                            <?php echo $res['designer_cake'];?>
                                                        </a>
                                                    <?php
                                                    }
                                                    ?>
                                           
                                        </ul>
                                    </li>
                                        <div class="vr"></div>
                                   
                                </ul>
                            </div>
                        </div>
                    </nav>
<!--End of senconf bar-->

<!--start of breadcrumb-->
<div class="row">
    <div class="col-md-12" id="probreadcrumb">
        <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php" class="breadcrumb-link">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
        </nav>
    </div>
    <hr>
</div>

<!--start of container-->
<div class="container" id="contatcontainer">
<div class="containerheading">Contact Us</div>
<iframe id="gaddr" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2230.6009950654275!2d75.56436577780168!3d21.015870193857168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd90fa381c01953%3A0xb50ba2e4d056c703!2sNavi%20Peth%2C%20Jaikisan%20Wadi%2C%20Jalgaon%2C%20Maharashtra%20425001!5e0!3m2!1sen!2sin!4v1638948650563!5m2!1sen!2sin" width="700" height="500" style="border:0;" allowfullscreen="" loading="lazy">
</iframe>
    <div class="addmainheaing">Address:
        <p class="addrsubheadings">Gat no 708, Sweet Edition cake shop,Navi Peth,Jalgaon, Maharashtra-425001</p>
        <P class="addrsubheadings">Contact No:  <span>  9665508666</span></P>
        <p class="addrsubheadings">Email:    <span>   contactsweetedition@gmail.com</span>
</p>
    </div>
</div>