<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <?php
    include "logo.php";
    ?>

    <!--<title>Book supply hub</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">-->

    <!-- Site Icons -->
    <!--<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/bshn.jpg">-->

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
<?php
include "logo.php"
?>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<?php
include "maintop.php";
include "navbar.php";
?>

<html>
<body>
<div class="col-lg-8 m-auto d-block">
<form action="editpost2.php" method="POST" enctype="multipart/form-data">
<br>
<select style="width:250px;" name="cat_id">
<optgroup label="Select course">
<?php
$cat_query="SELECT * FROM category";
$results = mysqli_query($conn,$cat_query);
if(mysqli_num_rows($results) > 0)
{
    while($cat_row = mysqli_fetch_assoc($results))
    {
        ?>
        <option value="<?php echo $cat_row['cat_id']?>">
        <?php echo $cat_row['cname']?></option>

        <?php
    }
}
?>
</optgroup>
</select>
<br>
<br>
<select style="width:250px;" name="subcat_id">
<optgroup label="Select Semester">
<option value="1">semester-1</option>
<option value="2">semester-2</option>
<option value="3">semester-3</option>
<option value="4">semester-4</option>
<option value="5">semester-5</option>
<option value="6">semester-6</option>
</optgroup>
</select>
<br>
<br>
<input type="text" class="form-control" name="name" placeholder="Enter Book Name" required>
<br>
<input type="text" class="form-control" name="author" placeholder="Enter Book author" required >
<br>
<input type="number" class="form-control" name="amount" placeholder="Enter Book amount" required>
<br>
<select style="width:250px;" name="qty">
<optgroup label="Quantity">
<option value="1">1</option>
</optgroup>
</select>
<br>
<br>
<input type="text" class="form-control" name="edition" placeholder="Enter Book edition" required> 
<br>

<div class="mb-3">
  <label for="file" class="form-label">Upload Book image</label>
  <input type="file" name="image" id="file" class="form-control">
</div>
<br>
<button class="btn btn-outline-dark" type="submit" name="submit" value="submit" class="btn-btn-default"> EDIT  </button>
<br>
<br>
</form>
</div>
<?php

@session_start();
@$bid=$_SESSION['b_id'];
include "config.php";

@$bid=$_SESSION['b_id'];
?>
<!--if(isset($_POST['submit'])){
                            $cat_id=$_POST['cat_id']
                            $subcat_id=$_POST['subcat_id'];
                            $name=$_POST['name'];
                            $author=$_POST['author'];
                            $amount=$_POST['amount'];
                            $qty=$_POST['qty'];
                            $image=$_POST['image'];
                            $edition=$_POST['edition'];
                            
                            //$result=mysqli_query($conn,"INSERT INTO `user`(`u_name`, `email_id`, `password`, `contact_no`, `address`, `gender`) VALUES ('$name','$email','$password','$mobile','$address','$gender')");
                            $result=mysqli_query($conn,"INSERT INTO user( `cat_id`, `subcat_id`, `name`, `author`, `amount`, `qty`, `image`, `edition`) VALUES($cat_id','$subcat_id',$name','$author','$amount','$qty','$image','$edition')");
                            if($result)
                            {
                                echo "record inserted";
                            }
                            else
                            {
                                echo "record not inserted";
                            }
                        }
?>-->

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
