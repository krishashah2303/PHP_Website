
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

    <!-- End Main Top -->
    <h2 align="center"><b>BOOKS AVAILABLE RIGHT NOW</b></h2>
    <br>
<?php
include "config.php";
$sql = "SELECT * FROM book where subcat_id=2 order by b_id asc";
$result = mysqli_query($conn, $sql);
?>
<html>
<head>
<style>
table, th, td {
  align: center;
  border: 1px solid black;
  border-collapse: collapse;
}
}
table {
  border-spacing: 30px;
}
tr:nth-child(even) {
  background-color: #D6EEEE;
}
</style>
</head>
<body>
<form action="#" method="POST" enctype="multipart/form-data">
<table width="100%">
<colgroup>
    <col span="2">
    <col >
  </colgroup>
<thead>
<th></th>
<tr>
<th class="serial">#</th>
<th>IMAGE</th>
<th>NAME</th>
<th>SUBCAT ID</th>
<th>AUTHOR</th>
<th>AMOUNT</th>
<th>QUNATITY</th>
<th>EDITION</th>
<th>ORDER</th>
</tr>
</thead>
<tbody>
<?php
$i=1;
while($row = mysqli_fetch_assoc($result)) {?>
<tr>
<td class="serial"><?php echo $i?></td>
<td><?php echo $row["image"]?></td>
<td><?php echo $row["name"]?></td>
<td><?php echo $row["subcat_id"]?></td>
<td><?php echo $row["author"]?></td>
<td><?php echo $row["amount"]?></td>
<td><?php echo $row["qty"]?></td>
<td><?php echo $row["edition"]?></td>
<!--<td> <a href=''>BUY NOW</a> | <a href=''>ADD TO CART</a> </td>-->
<td><button type="submit" name="submit" value="submit" class="btn-btn-default">Buy now </button>  <button type="submit" name="submit" value="submit" class="btn-btn-default">Add to cart </button></td>
</tr>
<?php } ?>
</tbody>
</table>
<br>
<br>
<!-- Start Footer  -->
<?php
    include "footer.php";
    ?>
    <!--<footer id="footer" class="footer">
    </footer>-->
    <!-- End Footer  -->

    <!-- Start copyright  -->

    <!-- End copyright  -->

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
    $("#menu").load("/maintop.php")
    $("header").load("/navbar.php")
    $("footer").load("/footer.php")
    </script>
</body>

</html>
</body>
<br>
<br>
