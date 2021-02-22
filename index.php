<!---Using AJAX and PHP to generate coupon code-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Coupon Code</title>
</head>
<body>

    <!---Using AJAX onclick--->
    <div class="col-md-6">
        <input type="text" name="c_code" id="c_code" class="form-control" placeholder ="PromoCode" value="">

    </div>
    <div class="col-sm-3">
        <button type="button" onclick="getCouponCode()" class="btn btn-success"> Generete Code</button>
    </div>








    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>

</body>
</html>