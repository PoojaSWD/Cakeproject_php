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
                    <li class="nav item">
                        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i>  My Cart   <span class="badge bg-danger"><?php echo $printCount;?></span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-user-circle"></i>  User</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <div class="nav-user-info">
                            <h6 class="text-danger nav-user-name">Welcome <?php echo $printUsername;?></h6>
                                <span class="status"></span><span class="ml-2"> Available</span>
                            </div>
                                    <a class="dropdown-item" href="account_users.php"><i class="fas fa-user mr-2"></i>&nbsp; &nbsp;Account</a>
                                    <a class="dropdown-item" href="login.php"><i class="fas fa-sign-in-alt mr-2"></i>&nbsp; &nbsp;Login</a>
                                    <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>&nbsp; &nbsp;Logout</a>
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
                    <li class="breadcrumb-item"><a href="home.php" id="singleprodlink">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product details</li>
                </ol>
        </nav>
    </div>
    <hr>
</div>

<!--End of breadcrumb-->
<div class="container">
    <div class="row">
        <?php
        require_once('config.php');
        $product_id = $_GET['product_id'];
        $select = "SELECT * FROM cake_shop_product where product_id = $product_id";
        $query = mysqli_query($conn, $select);
        $res = mysqli_fetch_assoc($query);
        ?>
        
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" >
            <div class="productimage">
                <img src="images/<?php echo $res['product_image'];?>" class="img-responsive" id="prodimg">
            </div>
            

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">   
            <div class="productdetails">
                <h3 class="proddetailnm"><?php echo $res['product_name'];?></h3>
                <div class="shefword">
                   <div class="chefheading">In Our Chef's Word</div> 
                   <img src="images\cheficon.png" class="img-responsive" alt="cheflogo" style="height:90px;width:100px;margin-top:-3%">
                   <p class="subchefheading"><?php echo $res['product_brief_description'];?></p>
                </div> 
                <h4 class="desripcost" ><span>&#8377</span><?php echo $res['product_prize'];?>  <span id="priseguideline">    (Price is inclusive of GST)</span></h4>
                <div class="prodweight">
                    <P class="weightdesrip">Select Weight</P>
                    <div class="weightbutton">
                    <button type="button" class="btn btn-outline-dark">0.5 Kg</button>
                    <button type="button" class="btn btn-outline-dark">1 Kg</button>
                    <button type="button" class="btn btn-outline-dark">200 ml</button>
                
                  
                    </div>
                </div>
                
                <button onclick="add_cart(<?php echo $res['product_id'];?>)" class="btn btn-danger btn-block btn-lg">Add to Cart</button>
            </div>
            <div class="productdesrip">
                <h4 class="proddes">Product Description</h4>
                <p class="subproddescrip"><?php echo $res['product_description'];?></p>
            </div>
        </div>
       
    </div>

    <div class="mainreviewheading">All reviews & rating</div>
    <div class="productreview">
        <div class="row">
            <?php 
            require_once('config.php');
            $product_id = $_GET['product_id'];
            $select = "SELECT * FROM cake_shop_product where product_id = $product_id";
            $query = mysqli_query($conn, $select);
            $res = mysqli_fetch_assoc($query);
?>
            <div class="col-md-4">
                        <div class="card" id="cakerviewcard">
                            <h5 class="card-title" id="card-title">Great taste</h5>
                            <p class="subcomment">Recommended</p>
                            <div class="ratings"> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star"></i> </div>
                            <hr/>
                        <div class="card-body">
                            <p class="card-text">Awesome ...good and fresh cake .all I can recommend to all please try without doubts and delivery on time always.</p>
                                <div class="cakenm">
                                Product:<?php echo $res['product_name'];?>
                                </div>  
                            <div class="cakedate">Date:     20-11-2021</div>   
                            <div class="customer">Ritesh</div>      
                            <span style="color:grey;">(Pune)</span> 
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                        <div class="card" id="cakerviewcard">
                            <h5 class="card-title" id="card-title"> Fresh cake delivered ontime</h5>
                            <p class="subcomment">Recommended</p>
                            <div class="ratings"> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star rating-color"></i> <i class="fa fa-star"></i> </div>
                            <hr/>
                        <div class="card-body">
                            <p class="card-text">Fresh cake delivered ontime.it's little expensive expensive compared to other cake makers, but it was very delicious. Will definitely recommend for others.Overall happy experience.</p>
                                <div class="cakenm">
                                Product:<?php echo $res['product_name'];?>
                                </div>  
                            <div class="cakedate">Date:     8-12-2021</div>   
                            <div class="customer">Ruchita</div>      
                            <span style="color:grey;">(Mumbai)</span> 
                        </div>
                    </div>
            </div>
        </div>
       
       
    </div>



</div>
</div>
    <!--start of footer-->

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
<!--end of footer-->


<script>
        function add_cart(product_id) {
                $.ajax({
                    url:'fetch_cart.php',
                    data:'id='product_id,
                    method:'get',
                    dataType:'json',
                    success:function(cart){
                        console.log(cart);
                        $('.badge').html(cart.length);
                    }
                });
            }
    </script>



        </body>
        </html>



