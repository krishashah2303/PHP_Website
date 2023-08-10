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
</head>

<body>
<h2></h2>
    <h2 align="center"><b>YOUR POSTS ON BOOK SUPPLY HUB</b></h2>
    <br>
    <div class="row">
<?php
@session_start();
@$userid=$_SESSION['user_id'];
include "config.php";
@$userid=$_SESSION['user_id'];
$sql =
"SELECT book.b_id,book.u_id,book.name,category.cname,sub_category.subcat_name,book.author,book.amount,
book.qty,book.image,book.edition,book.created_at FROM 
category inner join book on book.cat_id = category.cat_id inner join sub_category on book.subcat_id = 
sub_category.subcat_id where u_id=$userid order by b_id asc";
#$sql = "SELECT `b_id`, `u_id`, `name`, `author`, `amount`, `image`, `edition`, `bstatus` FROM book where u_id=$userid order by b_id asc";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
if($num > 0){
  while($row = mysqli_fetch_array($result)){
      ?>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="card">
              <h4 class="card-title bg-dark text-white p-2 text-uppercase"><?php echo $row['name']; ?></h4>

              <div class="card-body">
              <img src="<?php echo $row['image']; ?>" alt="book image"class="img-fluid mb-2">
              
              <h2>BOOK TITLE : <?php echo $row["name"]?></h2>
              <h2>COURSE : <?php echo $row["cname"]?></h2>
              <h2>SEMESTER : <?php echo $row["subcat_name"]?></h2>
              <h2>AUTHOR : <?php echo $row["author"]?></h2>
              <h2>AMOUNT :  &#8377;<?php echo $row["amount"]?></h2>
              <h2>EDITION : <?php echo $row["edition"]?> </h2>
              
                <!--<div>
                  <input type="number" name="quantity" value="1" size="30"> 
                </div>-->
              </div>
              <div>
                <div class="btn-group d-flex">
                <button class="btn btn-light flex-fill"> <a href="deletepost.php?id=<?php echo $row['b_id']; ?>"><h3>Delete Post</h3></a></button>
                <button class="btn btn-secondary flex-fill"><a href="editpost.php?id=<?php echo $row['b_id']; ?> "><h3>Edit Post </h3> </a></button>
                </div>
              </div>
            </div>
          </form>
        </div>

  <?php
  }
}
else if($num < 1)
{?>
<html>
<head></head>
<body>
<h1></h1>
<h2 text-align: center;><b>You Have No Posts Till Now!</b></h2>

</body>
</html>
<?php
}
?>
 </div>
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
<br>
<br>