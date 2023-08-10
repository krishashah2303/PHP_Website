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
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

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
   
    <!-- End Main Top -->

    <!-- Start Main Top -->
   <?php
    include "maintop.php" ;
   ?>
        <!-- Start Navigation -->
        <?php
    include "navbar.php" ;
   ?>
        <!-- End Navigation -->
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

    <!-- Start Slider -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active" class="text-center"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/books4.jpg" class="d-block w-100" height="600" width="1024" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <p style="font-size:50px">Book Supply Hub</p>
        <p style="font-size:30px">At Book supply hub we help you to buy second hand books, or new books online at best prices.<br> Reselling books made easy with Book supply hub!</p>
        <!--<p><a class="btn hvr-hover" href="#">Shop Now</a></p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/books.jpeg" class="d-block w-100"  height="600" width="1024" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <p style="font-size:50px">Book Supply Hub</p>
        <p style="font-size:30px">Have used, old books?<br>Why not sell them and convert them into money? <br>Sell your used books directly to buyer.</p>
        <p><a class="btn hvr-hover" href="sell.php">Sell Now</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/blurbook.jpg" class="d-block w-100"  height="600" width="1024" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <p style="font-size:50px">Book Supply Hub</p>
        <p style="font-size:30px">How to buy second hand books online on Book Supply Hub?<br> Well, you can select used books and order it or you can contact to the seller on Book Supply Hub</p>
        <p><a class="btn hvr-hover" href="usedbooks.php">Shop Used Books</a></p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!--<div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/book3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Book supply hub</strong></h1>
                            <p class="m-b-40">At Book supply hub we help you to buy second hand books, or new books online at best prices.<br> Reselling books  made easy with Book supply hub!</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
            <img src="images/book2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Book supply hub</strong></h1>
                            <p class="m-b-40">At Book supply hub we help you to buy second hand books, or new books online at best prices.<br> Reselling books  made easy with Book supply hub!</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/book1jpeg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Book supply hub</strong></h1>
                            <p class="m-b-40">At Book supply hub we help you to buy second hand books, or new books online at best prices.<br> Reselling books  made easy with Book supply hub!</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>-->

    <!-- End Slider -->

    <!-- Start Categories  -->
    <!-- <div class="categories-shop"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_01.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Lorem ipsum dolor</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_02.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Lorem ipsum dolor</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/categories_img_03.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Lorem ipsum dolor</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Categories -->
	
	<!-- <div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="images/add-img-01.jpg" alt="" />
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="images/add-img-02.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div> -->

    <!-- Start Products  -->
    <!--<div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Books</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Top featured</button>
                            <button data-filter=".best-seller">Best seller</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/python1.jpg" class="img-fluid" alt="Image" style="height:400px;width:400">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="cart.html">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Python for beginners </h4>
                            <h5> ₹ 289</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">New</p>
                            </div>
                            <img src="images/java1.jpg" class="img-fluid" alt="Image" style="height:400px;width:400">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="cart.html">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Programmming with Java </h4>
                            <h5> ₹ 400</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/c1.jpg" class="img-fluid" alt="Image" style="height:400px;width:400">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="cart.html">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>ANSI C</h4>
                            <h5> ₹ 250</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="images/ds1.jpg" class="img-fluid" alt="Image" style="height:400px;width:400">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Data Structures and Algorithem</h4>
                            <h5>₹ 365</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Read from our blog</h1>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog1.jpg" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3><a href="blog.php"><u>Where and how to sell books online</u></a></h3>
                                <p>If you are reading this blog post Where and how to sell old books online in India, I suspect you too do not want to throw away your old books and of course, you don't either want to sell you....</p>
                            </div>
                            <!--<ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog2.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                            <h3><a href="blog2.php"><u>What to do with old books</u></a></h3>
                                <p>Books, books are the most beautiful thing created by a man. Though their size is small, but the amount of knowledge they kept in them is just invaluable. Books not only provide us with knowledge, they educate us, entertain us, and they also serve us as a good companion when we....</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog3.jpg" alt=""/>
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                            <h3><a href="blog3.php"><u>Problems faced by students</u></a></h3>
                                <p>A college is an exciting place for self-discovery and growth, while time spent at college is full of memory and joyful experience for every student. And for the same reason, the average person thinks that a student's life is easy to spend. But that's the one side of the coin, the other side is not much thriving as this. College-going  students have to deal with some common  problems. Since..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->

    <!-- Start Footer  -->
    <?php
    include "footer.php";
    ?>
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
        $("#header").load("/navbar.html")
        $("#menu").load("/maintop.html")
        $("#footer").load("/footer.html")
    </script>
</body>
</html>