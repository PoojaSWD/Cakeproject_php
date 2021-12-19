<?php
if (isset($_GET['remove_success']) && $_GET['remove_success'] == 1) {
    echo "<script>alert('Product removed!')</script>";
    echo "<script>window.location.assign('cart.php')</script>";
}
if (isset($_GET['order_success']) && $_GET['order_success'] == 1) {
    echo "<script>alert('Order placed!')</script>";
    echo "<script>window.location.assign('cart.php')</script>";
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
    $printUsername = "None"; 
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
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i>  My Cart</a>
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
                    <li class="breadcrumb-item active" aria-current="page">cart</li>
                </ol>
        </nav>
    </div>
    <hr>
</div>

<!--End of breadcrumb-->

<div class="container-fluid" id="cartcontainer">    
                
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheartitle" id="pageheartitle">Cart</h2>
                            <p class="pagetext" id="pagetext">Check your shopping cart here.</p>
                        </div>
                    </div>
                </div>

                <div class="row mx-5">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    	<div class="card" >
                    		<div class="card-body">
                    			<div class="table-responsive">
                    				<table class="table table-bordered">
                    					<thead>
                    						<tr>
                    							<th>S. No.</th>
                    							<th>Product Name</th>
                    							<th>Price</th>
                    							<th>Quantity</th>
                    							<th>Total</th>
                    							<th>Action</th>
                    						</tr>
                    					</thead>
                    					<form method="post" action="insert_order.php">
                    					<tbody>
                    						<?php
                    						if ($printCount == 0) {
                    						?>
                    						<tr>
                    							<td colspan="6" align="center"></td>
                    						</tr>
                    						<?php } else { ?>
                    						<?php
                                            $total_amount = 0;
                    						require_once('config.php');
                    						for ($i=0; $i < count($_SESSION['cart']); $i++) { 
                    							$select = "SELECT * FROM cake_shop_product where product_id = {$_SESSION['cart'][$i]}";
                    							$query = mysqli_query($conn, $select);
                    							$j = $i;
                    							while ($res = mysqli_fetch_assoc($query)) { 
                                                $total_amount = $total_amount + $res['product_prize'];
                    						?>
                    						<tr>
                    							<td><?php echo ++$j;?></td>
                    							<td><?php echo $res['product_name'];?><input type="hidden" name="hidden_product_name[]" value="<?php echo $res['product_name'];?>"></td>
                    							<td>Rs. <?php echo $res['product_prize'];?><input type="hidden" name="hidden_product_price[]" value="<?php echo $res['product_prize'];?>"></td>
                    							<td><input class="form-control" type="number" min="1" max="9" step="1" value="1" name="product_quantity[]" onchange="prodTotal(this)"></td>
                    							<td><span>Rs. <?php echo $res['product_prize'] * 1;?></span><input type="hidden" name="hidden_product_total[]" value="<?php echo $res['product_prize'];?>"></td>
                    							<td><a href="remove_product.php?val_i=<?php echo $i;?>"><i class="fas fa-trash-alt"></i></a></td>
                    						</tr>
                    					    <?php } ?>
                    					    <?php } ?>
                    					    <?php } ?>
                    					    <tr>
                    					    	<td colspan="4" align="right">Total Amount:</td>
                    					    	<td colspan="2" id="total_amount"><span>Rs. <?php if ($printCount == 0){echo 0;} else {echo $total_amount;}?></span><input type="hidden" name="hidden_total_amount" value="<?php echo $total_amount;?>"></td>
                    					    </tr>
                                            <tr>
                                                <td colspan="3">
                                                    Delivery Date:<input class="form-control" type="date" name="delivery_date" required="">
                                                </td>
                                                <td colspan="3">
                                                    Payment Method:<select class="form-control" name="payment_method">
                                                        <option>Cash</option>
                                                        <option>Card</option>
                                                    </select>
                                                </td>
                                            </tr>
                    					    <tr>
                    					    	<td colspan="6" align="right">
                    					    		<button class="btn btn-warning" onclick="clear_cart()">Clear</button>
                    					    		<button class="btn btn-primary" type="submit">Checkout</button>
                    					    	</td>
                    					    </tr>
                    					</tbody>
                    					</form>
                    				</table>
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
        function prodTotal(quantity) { 
            var price = $(quantity).parent().prev().find('input').val();
        	var total = quantity.value * price;
            $(quantity).parent().next().find('input').val(total);
            $(quantity).parent().next().find('span').html("Rs. "+total);
            var total_amount = 0;
            $('input[name="hidden_product_total[]"]').each(function(){
                total_amount += parseInt($(this).val()); 
            });
            $('#total_amount').find('span').html("Rs. "+total_amount);
            $('#total_amount').find('input').val(total_amount);
        }  
        function clear_cart() {
            var flag = confirm("Do you want to clear cart?");
            if (flag) {
                window.location.href = "clearcart.php";
            }
        }
    </script>









                                                </body>
                                                </html>