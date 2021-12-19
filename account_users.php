<?php
if (isset($_GET['edit_success']) && $_GET['edit_success'] == 1) {
    echo "<script>alert('Edited details!')</script>";
    echo "<script>window.location.assign('account_users.php')</script>";
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
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy And Send Cake to India | SWEET EDITION</title>
        <!--css plugins for table-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>  
    <script src="https://kit.fontawesome.com/40c07e2781.js" crossorigin="anonymous"></script>
    <link href="images\title_icon.jpg" rel="icon">
    
    <link href="css\account_user.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>

    

    
</head>
<body>


             <div class="container-fluid">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="#" id="brandname">Sweet Edition</a> &nbsp;&nbsp;
                    

                     <!--second navbar-->
                <ul class="navbar-nav ms-auto" id="upnav">
                <li class="nav item">
                        <a class="nav-link" href="home.php"><i class="fas fa-home"></i>  Home</a>
                    </li>
                    <li class="nav item">
                        <a class="nav-link" href="contact.php"><i class="fas fa-address-book"></i>  Contact</a>
                    </li>
                    <li class="nav item">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i>  My Cart  <span class="badge bg-danger"><?php echo $printCount;?></span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-user-circle"></i>  User</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                            <div class="nav-user-info">
                                <?php
                                if(isset($_SESSION['username']))
                                {
                                ?>  
                                <h5 class="text-white nav-user-name">Welcome - <?php echo $printUsername;?></h5>
                                <?php
                                }
                                ?>
                                <span class="status"></span><span class="ml-2"> Available</span>
                            </div>
                                    <a class="dropdown-item" href="account_users.php"><i class="fas fa-user mr-2"></i>&nbsp; &nbsp;Account</a>
                                    <a class="dropdown-item" href="login.php"><i class="fas fa-sign-in-alt mr-2"></i>&nbsp; &nbsp;Login</a>
                                    <a class="dropdown-item" href="logout.php" id="logout" name="logout"><i class="fas fa-power-off mr-2"></i>&nbsp; &nbsp;Logout</a>
                        </div>
                    </li>
                </ul>
                </nav>

                <!--start of breadcrumb-->
<div class="row">
    <div class="col-md-12" id="probreadcrumb">
        <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php" class="breadcrumb-link" id=>Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User account</li>
                </ol>
        </nav>
    </div>
    <hr>
</div>

<!--End of breadcrumb-->


        <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php
                        require_once("config.php");
                        $users_id = $_SESSION['user_users_id'];
                        $select = "SELECT * FROM cake_shop_users_registrations where users_id = $users_id";
                        $query = mysqli_query($conn, $select);
                        $res = mysqli_fetch_assoc($query);
                        ?>
                        <form id="form" method="POST" action="update_users.php">
                            <div class="card">
                            <h3 class="card-title">Update User Details</h3>   
                                    <div class="form-field d-flex align-items-center"> <span class="fas fa-user"></span> <input type="text" name="username"  required="" id="username" value="<?php echo $res['user_username'];?>">  </div>
                                    <div class="form-field d-flex align-items-center"> <span class="fa fa-envelope""></span> <input type="email" name="useremail"  required="" id="useremail" value="<?php echo $res['user_email'];?>"> </div>
                                    <div class="form-field d-flex align-items-center"> <span class="fa fa-key"></span> <input type="password" name="password"  required="" id="pwd" value="<?php echo $res['user_password'];?>"></div>
                                    <div class="form-field d-flex align-items-center"> <span class="fa fa-key"></span> <input type="password" name="repassword"  required="" id="repwd"  value="<?php echo $res['user_repassword'];?>">  </div>
                                     <input type="hidden" value="<?php echo $res['users_id'];?>" name="hidden_users_id">
                                    <div><button class="btn btn-danger" type="submit">Change</button></div>
                            </div>
                               
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Order History</h2>
                            <p class="pageheader-text">See your orders here.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Orders Table</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="ordertable" >
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Orders id</th>
                                                <th>Delivery date</th>
                                                <th>Payment method</th>
                                                <th>Total amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require_once('config.php');
                                            $select = "SELECT * FROM cake_shop_orders where users_id = $users_id";
                                            $query = mysqli_query($conn, $select);
                                            $i = 1;
                                            while ($res = mysqli_fetch_assoc($query)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i++;?></td>
                                                <td><?php echo $res['orders_id'];?></td>
                                                <td><?php echo $res['delivery_date'];?></td>
                                                <td><?php echo $res['payment_method'];?></td>
                                                <td>Rs. <?php echo $res['total_amount'];?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Order Details</h2>
                            <p class="pageheader-text">See your odeder details here.</p>
                        </div>
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Orders Details Table</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="example">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Orders id</th>
                                                <th>Product name</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require_once('config.php');
                                            // $select = "SELECT * FROM cake_shop_orders_detail";
                                            $select = "SELECT cake_shop_orders_detail.*, cake_shop_orders.orders_id FROM cake_shop_orders_detail JOIN cake_shop_orders ON cake_shop_orders_detail.orders_id = cake_shop_orders.orders_id WHERE users_id = $users_id";
                                            $query = mysqli_query($conn, $select);
                                            $i = 1;
                                            while ($res = mysqli_fetch_assoc($query)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i++;?></td>
                                                <td><?php echo $res['orders_id'];?></td>
                                                <td><?php echo $res['product_name'];?></td>
                                                <td><?php echo $res['quantity'];?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
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



<!--End of footer-->

















<!--Scripts-->



<!--js plugins for table-->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
            

<script>

    $(document).ready(function() {
    $('#example').DataTable();
    $('#ordertable').DataTable();

} );
</script>
                            </body>
                            </html>

<?php
}
else {
    header("Location: login.php");
}
?>