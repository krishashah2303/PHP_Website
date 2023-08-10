<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    
    <title>Book Supply Hub</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/bshn.jpg" type="image/x-icon" style="height:70px;width:70px">
    <link rel="apple-touch-icon" href="images/bshn.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start Main Top -->
    <?php
    include "maintop.php";
    ?>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <?php
    include "navbar.php";
    ?>

<?php
include "config.php";
?>
<form >
<br>
<h1 align="center"><b>BOOK DETAILS</b></h1>
<br>
<?php

//$sql="SELECT * FROM book where b_id='$_GET[id]'";
//joining category, sub-category and book table using inner join
$sql="SELECT book.name,category.cname,sub_category.subcat_name,book.author,book.amount,book.qty,book.image,book.edition,book.created_at,user.uname,user.email,user.mobile FROM category inner join book on book.cat_id = category.cat_id inner join sub_category on book.subcat_id = sub_category.subcat_id inner join user on book.u_id = user.u_id where b_id='$_GET[id]'";
$re=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($re);
?>
<div class="col-lg-4 m-auto d-block">
<img src="<?php echo $row["image"]?> " height="400px" width="400px" >
<br>
</div>
<div class="col-lg-4 m-auto d-block">
<br>
<h2>BOOK TITLE : <?php echo $row["name"]?></h2>
<h2>COURSE : <?php echo $row["cname"]?></h2>
<h2>SEMESTER : <?php echo $row["subcat_name"]?></h2>
<h2>AUTHOR : <?php echo $row["author"]?></h2>
<h2>AMOUNT : <?php echo $row["amount"]?></h2>
<h2>QUANTITY AVAILABLE: <?php echo $row["qty"]?></h2>
<h2>EDITION : <?php echo $row["edition"]?> </h2>
<hr>
<h1>USER DETAILS</h1>
<h2>USER : <?php echo $row["uname"]?> </h2>
<h2>EMAIL : <?php echo $row["email"]?> </h2>
<h2>PHONE NO : <?php echo $row["mobile"]?> </h2>
<h2>AD POSTED AT : <?php echo $row["created_at"]?> </h2>
<hr>
<h2>Remember</h2>
<b>When you call, don't forget to mention that you found this ad on Book Supply Hub.</b>
<br>
<button class="btn btn-outline-dark" type="submit" name="submit" value="submit" class="btn-btn-default"> ORDER NOW </button>
</div>
<br>
<br>
</form>
<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $("#header").load("/navbar.html")
        $("#menu").load("/maintop.html")
        $("#footer").load("/footer.html")
    </script>
</body>
</html>
</body>
</html>
<br>
<?php
include "footer.php";
?>