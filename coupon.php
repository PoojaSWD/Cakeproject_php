<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css\coupon.css" rel="stylesheet" type="text/css">  
    <link href="js\coupon.js" rel="stylesheet">
    <title>Coupon</title>
</head>
<body>
    <div class="container">
        <modal class="modal fade" id="coupon" tabindex="-1" role="dialog" data-bs-backdrop="static" >
        <button type="button" class="btn-close" data-bs-dismiss="container" aria-label="Close"  class="coupon" onClick="hidediv()"></button>
        <div class="row">
            <div class="col-md-4">
                <img src="images\cakecoupon.png" alt="coupon1"  class="img-responsive" id="img1">
            </div>
            <div class="col-md-4">
                <img src="images\cupcake1coupon.png" alt="coupon2"  class="img-responsive" id="img2">
            </div>    
        </div>
        <div><button type="submit" id="order" onClick="hidediv()" class="coupon">ORDER NOW</button></div>
    </div>

    

</body>
</html>
