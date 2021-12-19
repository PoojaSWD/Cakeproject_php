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
                        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i>  My Cart  <span class="badge bg-danger"><?php echo $printCount;?></span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-user-circle"></i>  User</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <div class="nav-user-info">
                            <h6 class="text-danger nav-user-name">Welcome <?php echo $printUsername;?></h6>
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
                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                </ol>
        </nav>
    </div>
    <hr>
</div>

<!--End of breadcrumb-->

<!--START OF card-->
<section>
<div class="container">
    <div class="row">



<?php
require_once('config.php');

$select = "SELECT * FROM cake_shop_product where product_category = ".$_GET['category'];
$query = mysqli_query($conn,$select);
while ($res = mysqli_fetch_assoc($query)){
    ?>


            <div class="col-md-4 col-sm-6">
                <div class="card" style="width:25rem;">
                    <div class="product_img_head">
                        <div class="product-image">
                        <?php
                        $file_array = explode(', ', $res['product_image']);
                        ?>

                       
<a href="singleproduct.php?product_id=<?php echo $res['product_id'];?>"> <img src="images/<?php echo $file_array[0];?>" class="img-responsive" id="allprodimage"></a>
                        </div>
                    </div>
                        <div class="card-body">
                            <h4 class="product-title"><?php echo $res['product_name'];?></h4>
                            <p class="card-text"><?php echo $res['product_brief_description'];?></p>
                            <div class="product-price">Rs.<?php echo $res['product_prize'];?></div>
                            
                        </div>
                </div>
            
            </div>

<?php }?>
       </div>
</div>
<!--end of cards
-->

</section>
<div class="partitionheading">All review & Rating about Sweet Edition</div>
<div class="review">
    <div class="revewheading">
        <div class="mainheading">Delivered well in time Cake'</div>
        <p class="subheading">Delivered well in tile. Cake was delicious and freshly baked.Thanks</p>
        <div class="headingfooter">
            Kiran Rao
        </div>
        <span><button class="btn btn-success" id="starbtn"><span class="fa fa-star"></span>  5</button></span><span class="postdate">Posted date:21-11-21</span>
    </div>
</div>

</div>
<div class="review">
    <div class="revewheading">
        <div class="mainheading">It was so Yummy.Sweet Edition is O'</div>
        <p class="subheading">It was too yumm,Sweet Edition is on my Priority list nowadays.</p>
        <div class="headingfooter">
                Abhishek lokande
        </div>
        <span><button class="btn btn-success" id="starbtn"><span class="fa fa-star"></span>  5</button></span><span class="postdate">Posted date:21-11-21</span>
    </div>
</div>

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
        function add_cart(product_id) {
                $.ajax({
                    url:'fetch_cart.php',
                    data:'id='+product_id,
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