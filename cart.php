<?php
session_start();
include "config.php";

if(!empty($_GET['action'])){
  switch($_GET['action']){
    //add product in cart
    case 'add':
    if(!empty($_POST['quantity'])){
      $bid = $_GET['bid'];
      $query = "SELECT * FROM book WHERE b_id=".$bid;
      $result = mysqli_query($conn,$query);
      while($book = mysqli_fetch_array($result)){
          $itemArray = [
              $book['b_id']   => [
                  'name'      => $book['name'],
                  'quantity'  => $_POST['quantity'],
                  'amount'    => $book['amount'],
                  'image'     => $book['image']
                   ]
              ];
              //var_dump($itemArray);
              if(!empty($_SESSION['cart_item'])){
                  if(in_array($book['b_id']. array_keys($_SESSION['cart_item']))){
                      foreach($_SESSION['cart_item'] as $key => $value){
                          if($book['b_id'] == $key){
                              if(empty($_SESSION['cart_item'][$key]["quantity"])){
                                  $_SESSION['cart_item'][$key]['quantity'] = 0;
                                }
                              $_SESSION['cart_item'][$key]['quantity'] += $_POST['quantity'];
                            }
                        }
                    }else{
                        $_SESSION['cart_item'] += $itemArray;
                    }
            }else{
                $_SESSION['cart_item'] = $itemArray;
            }
        }
    }
    break;
    
    case 'remove':
        if(!empty($_SESSION['cart_item'])){
            foreach($_SESSION['cart_item'] as $key => $value){
                if($_GET['b_id'] == $key){
                    unset($_SESSION['cart_item'][$key]);
                }
                if(empty($_SESSION['cart_item'])){
                    unset($_SESSION['cart_item']);
                }
            }
        }
    break;
    case 'empty':
        unset($_SESSION['cart_item']);
        break;
  }
}
?>

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
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">-->

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
    include "maintop.php"
    ?>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <?php
    include "navbar.php";
    ?>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
            <?php
            $total_quantity = 0;
            $total_price = 0;
            ?>
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">Image</th>
                                    <th class="text-left">Name</th>
                                    <th class="text-left">Amount</th>
                                    <th class="text-left">Quantity</th>
                                    <th class="text-left">Total</th>
                                    <th class="text-center">Remove</th>
                                </tr>
                            </thead>
                            <?php
                                if(isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
                                    foreach($_SESSION['cart_item'] as $item){
                                    $item_price= $item['quantity'] * $item['amount'];
                                }
                             ?>
                                <tr>
                                    <td class="thumbnail-img"><a href="#"><img class="img-fluid" src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>" /></a>
                                    </td>
                                    <td class="name-pr"><a href="#"><?= $item['name'] ?></a>
                                    </td>
                                    <td class="price-pr"><p>&#8377;<?= $item['amount'] ?></p>
                                    </td>
                                    <td class="quantity-box"><?= $item['quantity'] ?></p>
                                    </td>
                                    <td class="price-pr"><p>&#8377;<?=  $item_price ?></p>
                                    </td>
                                   
                                    <td class="remove-pr"><a href="index.php?action=remove&b_id=<?php $item['b_id'];?>" ><i class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                                 <?php  

                                 $total_quantity += $item["quantity"];
                                 $total_price += ($item["amount"] * $item["quantity"]);
                            }
                            ?>
                            <tr>
                            <td></td>
                            <td colspan="2" align="right">Total:</td>
                            <td align="center"><strong>items:  <?= $total_quantity ?></strong></td>
                            <td align="center"><strong>amount:  &#8377;<?= $total_price ?></strong></td>
                            <td></td>
                            </tr>
                           <!--<tbody>
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
									<img class="img-fluid" src="images/img-pro-01.jpg" alt="" />
								</a>
                                    </td>
                                    <td class="name-pr">
                                        
                                    </td>
                                    <td class="price-pr">
                                       
                                    </td>
                                    <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td>
                                    <td class="total-pr">
                                        
                                    </td>
                                    <td class="remove-pr">
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
									<img class="img-fluid" src="images/img-pro-02.jpg" alt="" />
								</a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
									Lorem ipsum dolor sit amet
								</a>
                                    </td>
                                    <td class="price-pr">
                                        <p>$ 60.0</p>
                                    </td>
                                    <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td>
                                    <td class="total-pr">
                                        <p>$ 80.0</p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="#">
									<i class="fas fa-times"></i>
								</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
									<img class="img-fluid" src="images/img-pro-03.jpg" alt="" />
								</a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
									Lorem ipsum dolor sit amet
								</a>
                                    </td>
                                    <td class="price-pr">
                                        <p>$ 30.0</p>
                                    </td>
                                    <td class="quantity-box"><input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text"></td>
                                    <td class="total-pr">
                                        <p>$ 80.0</p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="#">
									<i class="fas fa-times"></i>
								</a>
                                    </td>
                                </tr>
                            </tbody>-->
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
               
                <div class="col-lg-10 col-sm-6">
                    <div class="remove-box">
                       <!--<a class="btn btn-danger" href="index.php?action=empty">Remove all</a>-->
                    </div>
                </div>
            </div>

            </div>
    </div>
    <!-- End Cart -->

    <!-- Start Footer  -->
    <?php
    include "footer.php";
    ?>
    
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
</body>

</html>