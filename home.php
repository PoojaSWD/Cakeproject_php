<?php
require_once('config.php');

if (isset($_GET['login_success']) && $_GET['login_success'] == 1) {
    echo "<script>alert('Logged in!')</script>";
    echo "<script>window.location.assign('home.php')</script>";
}
if (isset($_GET['logout_success']) && $_GET['logout_success'] == 1) {
    echo "<script>alert('Logged out!')</script>";
    echo "<script>window.location.assign('home.php')</script>";
}

if (isset($_GET['login_error']) && $_GET['login_error'] == 1) {
    echo "<script>alert('Username or Password does not exist!')</script>";
    echo "<script>window.location.assign('home.php')</script>";
}
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
    $printUsername = "Visitor"; 
}

?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy And Send Cake to India | SWEET EDITION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>  
    <script src="https://kit.fontawesome.com/40c07e2781.js" crossorigin="anonymous"></script>
    <link href="images\title_icon.jpg" rel="icon">
    <link href="css/home.css" rel="stylesheet" type="text/css" media="all">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>


             <div class="container-fluid">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="#" id="brandname">Sweet Edition</a> &nbsp;&nbsp;
                    <i class="fas fa-map-marker-alt" style="font-size:23px;"></i>&nbsp;&nbsp;
                    <a data-bs-toggle="modal" data-bs-target="#locationmodel" id="location">
                        Location </a>
                    <!-- location Model-->
                    <div class="modal fade" id="locationmodel" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="staticBackdropLabel">Select City</h3>
                                    <p id="sublabel">And Get Your Cake delivered In 2 Hours</p>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    
                                </div>
                                <div class="divider">
                                    <hr class="left"><span class="text-danger">Popular City</span><hr class="right"> 
                                </div>
                                
                                    <div class="modal-body">
                                         <div class="card">
                                            <img src="images/delhi.png" class="image-responsive" alt="Delhi" title="Delhi" onClick="getlocation('Delhi')">
                                            <div class="subheading">Delhi</div>
                                         </div> 
                                         <div class="card">
                                            <img src="images/indore.png" class="image-responsive" alt="Indore" title="Indore" onClick="getlocation('Indore')">
                                            <div class="subheading">Indore</div>
                                         </div>  
                                         <div class="card">
                                            <img src="images/mumbai.png" class="image-responsive" alt="Mumbai" title="Mumbai" onClick="getlocation('Mumbai')">
                                            <div class="subheading">Mumbai</div>
                                         </div>  
                                         <div class="card">
                                            <img src="images/pune.png" class="image-responsive" alt="Pune" title="Pune" onClick="getlocation('Pune')" >
                                            <div class="subheading">Pune</div>
                                         </div>   
                                         <div class="card">
                                            <img src="images/nagpur.png" class="image-responsive" alt="Nagpur" title="Nagpur" onClick="getlocation('Nagpur')">
                                            <div class="subheading">Nagpur</div>
                                         </div>  
                                    </div>
                                        <div class="modal-footer">
                                            <div class="divider2">
                                                <hr class="left"><span class="text-danger">Other Cities</span><hr class="right"> 
                                            </div>
                                            <div class="other_city_names">
                                                <div class="row">
                                                    <div class="col-md-2" onClick="getlocation('Satara')">Satara</div>
                                                    <div class="col-md-2" onClick="getlocation('Kolhapur')">Kolhapur</div>
                                                    <div class="col-md-2" onClick="getlocation('Sangli')" > Sangli</div>
                                                    <div class="col-md-2" onClick="getlocation('Jalgaon')">Jalgaon</div>
                                                    <div class="col-md-2" onClick="getlocation('Burhanpur')">Burhanpur</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2" onClick="getlocation('Aurangabad')">Aurangabad</div>
                                                    <div class="col-md-2" onClick="getlocation('Nashik')">Nashik</div>
                                                    <div class="col-md-2" onClick="getlocation('Amaravati')">Amaravati</div>
                                                    <div class="col-md-2" onClick="getlocation('Khandwa')">Khandwa</div>
                                                    <div class="col-md-2" onClick="getlocation('Gwaliar')">Gwaliar</div>
                                                    </div>
                                                <div class="row">
                                                    <div class="col-md-2" onClick="getlocation('Agra')">Agra</div>
                                                    <div class="col-md-2" onClick="getlocation('Karad')">Karad</div>
                                                    <div class="col-md-2" onClick="getlocation('Thane')">Thane</div>
                                                    <div class="col-md-2" onClick="getlocation('Solapur')">Solapur</div>
                                                    <div class="col-md-2" onClick="getlocation('Mysure')">Mysure</div>
                                                </div> 
                                            </div>
                                        </div>
                                
                            </div>
                        </div>
                    </div>

                     <!-- End of location Model-->

                     <!--second navbar-->
                <ul class="navbar-nav ms-auto" id="upnav">
                <li class="nav item">
                        <a class="nav-link" href="#tileComponent1"><i class="fas fa-address-card"></i>  About us</a>
                    </li>
                    <li class="nav item">
                        <a class="nav-link" href="contact.php"><i class="fas fa-address-book"></i>  Contact</a>
                    </li>
                    <li class="nav item">
                        <a class="nav-link" href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>  Log in/Sign Up</a>
                    </li>
                    <li class="nav item">
                        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> My Cart   <span class="badge bg-danger"><?php echo $printCount;?></span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-user-circle"></i>  User</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <div class="nav-user-info">
                                <h6 class="text-danger nav-user-name">Welcome <?php echo $printUsername;?></h6>
                                <span class="status"></span><span class="ml-2"> Available</span>
                            </div>
                                    <a class="dropdown-item" href="account_users.php"><i class="fas fa-user mr-2"></i>&nbsp; &nbsp;Account</a>
                                    
                                    <a class="dropdown-item" href="logout.php" id="logout" name="logout"><i class="fas fa-power-off mr-2"></i>&nbsp; &nbsp;Logout</a>
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

                    
                     <!--End of second navbar-->

                     <!--Carousel-->
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators" id="cakecarousel">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="slide1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" ></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" ></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>

                        </div>
                        
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images\scrumptious_cakes_bakingo_homepage_banner_desktop.jpg" class="img-responsive" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images\photo_cakes_bakingo_homepage_banner_desktop.webp" class="img-responsive" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images\birthday_cake_bakingo_homepage_banner_desktop.webp" class="img-responsive" alt="Third slide">
                                </div>
                                <div class="carousel-item ">
                                    <img class="d-block w-100" src="images\cake banner4.jpg" class="img-responsive" alt="fourth slide">
                                </div>  
                            </div>
                           
                                <button class="carousel-control-prev" type="button" data-slide="prev" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                    </div>             
                    <div class="desktop-banner">
                        <img src="images\desktopbanner.png" alt="coronabanner"  id="banner"class="img-responsive">

                    </div>

                    
                     <!--End of second navbar-->

                     <!-- log in/sign up modal
                     <div class="modal fade" id="modalform" tabindex="-1" role="dialog" data-bs-backdrop="static" >
                        <div class="modal-dialog">
                          <div class="modal-content" id="lsmodal">
                            <div class="modal-header">
                                <ul class="nav nav-pills" id="mytabs" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link active" data-bs-toggle="pill" href="#login" id="logpill" ><i class="fas fa-user mr-1" ></i>Login</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" data-bs-toggle="pill" href="#register" id="signpill"><i class="fas fa-user-plus mr-1" ></i>Sign Up</a>
                                    </li>
                                  </ul>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                                  <div class="modal-body">
                                    <div class="tab-content">

                                    

                                      <div id="login" class="tab-pane container active">
                                        <form method="POST">
                                          <div class="form-group">
                                            <label for="email" class="form-label">Username</label> 
                                            <input type="text" class="form-control" id="lemail" placeholder="Enter Email here" name="username"/>
                                          </div>
                                          <div class="form-group">
                                            <label for="password" class="form-label">Password:</label> 
                                            <input type="password" class="form-control" id="lpwd" placeholder="Enter password here" name="signpassword"/>
                                          </div>
                                  <div class="modal-footer">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="remember" id="remember"> 
                                      <label class="form-check-label" for="remember">Remember Me</label>
                                    </div>
                                    <button type="submit" class="btn btn-warning" name="loginbtn">Login</button>
                                  </div>
                                         
                                          </form>
                                  </div>

                                 
                                  <div id="register" class="tab-pane container fade">
                                    <form method="POST">
                                      <div class="form-group">
                                        <label for="firstnm" class="form-label">Firstname:</label> 
                                        <input type="text" class="form-control" id="fname" placeholder="Enter first name here" name="fname"/>
                                      </div>
                                      <div class="form-group">
                                      <label for="firstnm" class="form-label">Lastname:</label> 
                                        <input type="text" class="form-control" id="lname" placeholder="Enter first name here" name="lname"/>
                                      </div>
                                      <div class="form-group">
                                      <label for="firstnm" class="form-label"> Create Username:</label> 
                                        <input type="text" class="form-control" id="username" placeholder="Enter first name here" name="username"/>
                                      </div>
                                      <div class="form-group">
                                        <label for="lastnm" class="form-label">MobileNo:</label> 
                                        <input type="text" class="form-control" id="mobno" placeholder="Enter last name here" name="mobno" pattern="[0-9]{10}"/>
                                      </div>
                                      <div class="form-group">
                                        <label for="signemail" class="form-label">Email:</label> 
                                        <input type="email" class="form-control" id="signemail" placeholder="Enter Email here" name="signemail"/>
                                      </div>
                                      <div class="form-group">
                                        <label for="signpassword" class="form-label">Password:</label> 
                                        <input type="password" class="form-control" id="email" placeholder="Enter password here" name="signpassword"/>
                                      </div>
                                      <div class="form-group">
                                        <label for="signrepwd" class="form-label">Re-Password:</label> 
                                        <input type="password" class="form-control" id="signrepwd" placeholder="Enter Repassword here" name="signrepwd"/>
                                      </div>
                                    <div class="modal-footer">
                                      <div id="loginHelp" class="form-text">Already have a account?  <a href="#login"  data-bs-toggle="pill" id="lgbtn">Log IN</a></div>
                                        <button type="submit" class="btn btn-danger" name="signupbtn">Sign Up</button>
                                      </div>
                                             
                                              </form>
                                      </div>
                                  </div> 
                              </div>
                                  </div>                    
                            </div>
                        </div>
                    </div> -->
                   
                <p class="topicname">Experience Flavours<p>
                <div class="container">
                <div class="row" id="flavourrow">
                    
                    
                        <?php
                        require_once('config.php');
                        $select = "SELECT * FROM cake_shop_flavours";
                        $query = mysqli_query($conn, $select);
                        while ($res = mysqli_fetch_assoc($query)) {
                        ?>

                            <div class="col-md-3">
                            
                                    <div class="card" style="width:18rem; height:300px; box-shadow: 3px 1px 3px 1px #888888;" id="flavourcard">
                                    <a href="shop.php?category=<?php echo $res['category_id'];?>"><img class="card-img-top" id="flavourimg" src="images/<?php echo $res['flavours_image'];?>" style="width:278px; height:210px;"></a>
                                        <div class="card-body">
                                        <h4 class="card-title" id="imgtitle"><?php echo $res['flavours'];?></h4>
                                        <p class="subtitle"><?php echo $res['subtitle'];?></p>
                                            
                                        </div>
                                    </div>
                                
                                </div>
                            <?php
                            }
                            ?>       
                             
                    
                </div>
            </div>

                <p class="topicname">Cakes by Type</p>

                <div class="container">
                <div class="row" id="flavourrow">
                    
                    
                        <?php
                        require_once('config.php');
                        $select = "SELECT * FROM cake_shop_type";
                        $query = mysqli_query($conn, $select);
                        while ($res = mysqli_fetch_assoc($query)) {
                        ?>

                            <div class="col-md-3">
                       
                                    <div class="card" style="width:18rem; height:300px; box-shadow: 3px 1px 3px 1px #888888;" id="flavourcard">
                                    <a href="shop.php?category=<?php echo $res['subtype_id'];?>"><img class="card-img-top" id="flavourimg" src="images/<?php echo $res['type_image'];?>" style="width:280px; height:210px;"></a>
                                        <div class="card-body">
                                        <h4 class="card-title" id="imgtitle"><?php echo $res['cake_type'];?></h4>
                                        
                                            
                                        </div>
                                    </div>
                              
                                </div>
                            <?php
                            }
                            ?>       
                             
                    
                </div>
            </div>

                <p class="topicname">Dessert</p>

                <div class="container">
                <div class="row" id="flavourrow">
                    
                    
                        <?php
                        require_once('config.php');
                        $select = "SELECT * FROM cake_shop_desserts";
                        $query = mysqli_query($conn, $select);
                        while ($res = mysqli_fetch_assoc($query)) {
                        ?>

                            <div class="col-md-3">
                            
                                    <div class="card" style="width:18rem; height:300px; box-shadow: 3px 1px 3px 1px #888888;" id="flavourcard">
                                    <a href="shop.php?category=<?php echo $res['subtype_id'];?>"><img class="card-img-top" id="flavourimg" src="images/<?php echo $res['dessert_image'];?>" style="width:280px; height:210px;"></a>
                                        <div class="card-body">
                                        <h4 class="card-title" id="imgtitle"><?php echo $res['dessert_name'];?></h4>
                                        
                                            
                                        </div>
                                    </div>
                                   
                                </div>
                            <?php
                            }
                            ?>       
                             
                    
                </div>
            </div>
                <p class="topicname">Designer Cakes</p>

                <div class="container">
                <div class="row" id="flavourrow">
                    
                    
                        <?php
                        require_once('config.php');
                        $select = "SELECT * FROM  cake_shop_designer";
                        $query = mysqli_query($conn, $select);
                        while ($res = mysqli_fetch_assoc($query)) {
                        ?>

                            <div class="col-md-3">
                            
                                    <div class="card" style="width:18rem; height:300px; box-shadow: 3px 1px 3px 1px #888888;" id="flavourcard">
                                    <a href="shop.php?category=<?php echo $res['subtype_id'];?>"><img class="card-img-top" id="flavourimg" src="images/<?php echo $res['designer_image'];?>" style="width:280px; height:210px;"></a>
                                        <div class="card-body">
                                        <h4 class="card-title" id="imgtitle"><?php echo $res['designer_cake'];?></h4>
                                        
                                            
                                        </div>
                                    </div>
                                   
                                </div>
                            <?php
                            }
                            ?>       
                             
           <!--feature card-->         
                </div>
            </div>
            <div class="container">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                                <h1 id="tag">Our Features</h1>
                    </div>
                    <div class="row m-5" id="featurerow">
                            
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" id="featurecard">
                                <div class="card text-center p-3">
                                    <div class="card-body">
                                        <h1 class="card-title"><i class="fas fa-thumbs-up"></i></h1>
                                        <h3 class="card-title">Quality</h3>
                                        <p class="card-text" >Our very first priority is the quality we never compromised in the quality of our bakery products.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" id="featurecard">
                                <div class="card text-center p-3">
                                    <div class="card-body">
                                        <h1 class="card-title"><i class="fas fa-birthday-cake"></i></h1>
                                        <h3 class="card-title">Fresh & Natural</h3>
                                        <p class="card-text" >Our every product is fresh and made with natural ingredients we do not use the artificial food ingredient in our products.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" id="featurecard">
                                <div class="card text-center p-3">
                                    <div class="card-body">
                                        <h1 class="card-title"><i class="fas fa-shipping-fast"></i></h1>
                                        <h3 class="card-title">Free delivery</h3>
                                        <p class="card-text" >We provide free delivery to our customers. We deliver in 2 hr from the time customer order the product.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

            </div>

        <!--End of feature card-->      
        
        <div class="blogcontainer">
            <div class="blogcomponent1">
                <div class="blog">
                    
                    <div id="blogcarousel" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#blogcarousel" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#blogcarousel" data-bs-slide-to="1"></li>
                        <li data-bs-target="#blogcarousel" data-bs-slide-to="2"></li>
                        <li data-bs-target="#blogcarousel" data-bs-slide-to="3"></li>
                        <li data-bs-target="#blogcarousel" data-bs-slide-to="4"></li>
                    </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="images\blobs.png"  alt="blogimg" class="img-responsive" id="blogimg"/>
                                <div class="carousel-caption">
                                    <h3 Class="carouselheading">I loved the cake</h3>
                                    <p Class="carouselsubheading">Suraj Malankar</p>
                                </div>
                                </div>
                                <div class="carousel-item">
                                <img src="images\blobs.png"  alt="blogimg" class="img-responsive" id="blogimg"/>
                                <div class="carousel-caption">
                                    <h3 Class="carouselheading">Great Cake</h3>
                                    <p Class="carouselsubheading">Mishti Mishra</p>
                                </div>
                                </div>
                                <div class="carousel-item">
                                <img src="images\blobs.png"  alt="blogimg" class="img-responsive" id="blogimg"/>
                                <div class="carousel-caption">
                                    <h3 Class="carouselheading">The cake was so teasty,I would like to order it again</h3>
                                    <p Class="carouselsubheading">Meera Patil</p>
                                </div>
                                </div>
                                <div class="carousel-item">
                                <img src="images\blobs.png"  alt="blogimg" class="img-responsive" id="blogimg"/>
                                <div class="carousel-caption">
                                    <h3 Class="carouselheading">Yummy Cake.I love your service.</h3>
                                    <p Class="carouselsubheading">Vikas Jadhav</p>
                                </div>
                                </div>
                                <div class="carousel-item">
                                <img src="images\blobs.png"  alt="blogimg" class="img-responsive" id="blogimg"/>
                                <div class="carousel-caption">
                                    <h3 Class="carouselheading">Great cake and Great Service</h3>
                                    <p Class="carouselsubheading">Pooja Dusane</p>
                                </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" data-bs-target="#blogcarousel" type="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" data-bs-target="#blogcarousel" type="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                            </div>
                                
                
                </div>
            </div>
        
      
        <div class="blogcomponent2">
                    <div class="blogtitle">
                        What our customer says about us!
                        <div class="rating">
                                <div class="ratingtitle">
                            <button class="btn btn-success"><span class="fa fa-star" aria-hidden="true">  4.9</span></button>  <span id="ratinginfo1">  Based On 4323+ Reviews And Rating</span>
                            </div>
                                <div class="ratingtitle">
                            <button class="btn btn-success"><span class="fa fa-star" aria-hidden="true">  4.9</span></button><span>  <img src="images\google.png" alt="google" class="img-responsive"id="ratinginfo2"></span>
                            </div>

                            <div class="ratingtitle">
                                <button class="btn btn-success"><span class="fa fa-star" aria-hidden="true">  4.9</span></button><span>  <img src="images\facebook.png" alt="facebook" class="img-responsive" id="ratinginfo3"></span>
                            </div>
                            
                        </div>
                    </div>
            </div>
            
        </div>
        
  
            
         
        <!--about Us-->
                
             <div class="container">
                    <div class="tileComponent1" id="tileComponent1">
                    <img src="images\contact_form.png" alt="cakeimage" class="img-responsive" id=";">
                    </div>
                    <div class="tileComponent2">
                        <div class="componentHeading">
                            <h3 class="headinginfo">About Us</h3>
                        </div>
                            <div class="componentSubHeading">
                            <p class="subinfo">Sweet Edition was founded by a team of passionate and dedicated bakers who are committed in baking the most delicious cakes and pastries around. Using only the freshest ingredients we can find, you can be sure that you are served the best quality cake you can ever have.
                            
                            <p class="subinfo">We have evolved to become one of a premium distributor and wholesaler for cakes and pastries to some well known resturants, cafes, supermart, hotels and bakery.</p>

                            <p class="subinfo">Our online store is a leading online shop in Singapore providing cakes and gifts deliveries within Singapore. We provide competitive prices, good after sales services and on-time delivery.</p>

                            <p class="subinfo">The Cake Shop provides same day delivery service seven days a week, including Sunday, within Singapore to provide a high level of customer service.</p>

                            <p class="subinfo">Bon Appetite!!</p>
                
                            
                         </div>
                    </div>
            </div> 


<!--End of about Us-->

<footer>
    <div class="container-fluid" id="footercontainer">
    <div class="row" id="footerclass" >
            <div class="col-md-3" id="footermainlogo">
                <ul class="list-unstyled quick-links">
                   <li class="ftmainlogo">SweetEdition</li>
                   <li></li>
                    <li></li>
                    <li id="copyright">&copy;PSDeveloper <li>
                    <li></li>
                </ul>
            </div>
    </div>
        <div class="row" id="footerclass">
            <div class="col-md-3" id="footidleft">
                <ul class="list-unstyled quick-links">
                    <li class="footerhead">Know us</li>
                    <li class="footerlist"><i class="fa fa-angle-double-right"></i>Our Story</li>
                    <li class="footerlist"><i class="fa fa-angle-double-right"></i>Contact Us</li>
                    <li class="footerlist"><i class="fa fa-angle-double-right"></i>Locate Us</li>
                    <li class="footerlist"><i class="fa fa-angle-double-right"></i>Blog</li> 
                </ul>
            </div>
        </div>
        <div class="row" id="footerclass">
            <div class="col-md-3" id="footidcenter">
                <ul class="list-unstyled quick-links">
                <li class="footerhead">Need Help</li>
                    <li class="footerlist"><i class="fa fa-angle-double-right"></i>FAQ</li>
                    <li class="footerlist"><i class="fa fa-angle-double-right"></i>Cancellation and Refund</li>
                    <li class="footerlist"><i class="fa fa-angle-double-right"></i>Privacy Policy</li>
                    <li class="footerlist"><i class="fa fa-angle-double-right"></i>Terms and condotion</li> 
                </ul>
            </div>
        </div>
        <div class="row" id="footerclass">
            <div class="col-md-3" id="footidright">
                <ul class="list-unstyled quick-links">
                <li class="footerhead">More Info</li>
                    <li class="footerlist"><i class="fa fa-angle-double-right"></i>Corporate Cakes</li>
                    <li class="footerlist"><i class="fa fa-angle-double-right"></i>Download App</li>
                    <li class="footerlist"><i class="fa fa-angle-double-right"></i>Coupons & offers</li>
                    <li class="footerlist"><i class="fa fa-angle-double-right"></i>Franchise</li> 
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" id="footerlogo">
                <ul class="list-unstyled quick-links">
                    <li class="list-inline-item"><i class="fa fa-facebook"></i></li>
                    <li class="list-inline-item"><i class="fa fa-twitter"></i></li>
                    <li class="list-inline-item"><i class="fa fa-instagram"></i></li>
                    <li class="list-inline-item"><i class="fa fa-google-plus"></i></li> 
                </ul>
            </div>
        </div>
    <hr>
    <div class="row">  
        <div class="col-md-12" id="paymentfooter">
            <span id="paymentstat">We accept:&nbsp;&nbsp;</span>
            <span class="paymenicon"><i class="fab fa-cc-visa"></i></span>
            <span class="paymenicon"><i class="fab fa-cc-mastercard"></i></span>
            <span class="paymenicon"><i class="fab fa-cc-paypal"></i></span>
            <span class="paymenicon"><i class="fab fa-google-pay"></i></span>
            <span class="paymenicon"><i class="fab fa-cc-discover"></i></span>
        </div>
    </div>
        
</footer>
                    


</div>
   
    




        
        <script>
        // $(document).ready(function(){
        //     $('#loginbtn').on('click', function(){
        //         var username= $('#username').val();
        //         var password= $('#signpassword').val();
        //         if(username != '' && password != '')
        //         {
        //             $.ajax({
        //                 url:"login_check_users.php",
        //                 method:"POST",
        //                 data:{username:username, password:password},
        //                 success:function(data){
        //                     if (data == 'NO')
        //                     {
        //                         alert("Worng Data");
        //                     }else
        //                     {
        //                     $('#modalform').hide();
        //                       location.reload();
        //                     }
        //                 }
        //             });
        //         }
        //         else{
        //             alert("Both Fields are required");
        //         }
        //     });

        //     $('#logout').click(function(){
        //         var action ="logout";
        //         $.ajax({
        //             url:"logout.php",
        //                 method:"POST",
        //                 data:{action:action},
        //                 success:function(data)
        //                 {
        //                     location.reload()
        //                 }

        //         })
        //     })
        // });
    </script>     
    
    <!-- Scripts-->

    <script src="js\home.js" rel="stylesheet" type="text/javascript"></script>
   


    <!--scripts end-->

    </body>
    </html>   