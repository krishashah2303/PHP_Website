<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
    <div class="container">
        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
            <a class="navbar-brand" href="index.php"><img src="images/bshn.jpg" style="height:108px;width:200px" class="logo" alt=""></a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="nav-item"><a class="nav-link" href="index.php"> Home </a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                <li class="nav-item"><a class="nav-link" href="usedbooks.php"> Used Books </a></li>
                <li class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">New Books</a>
                    <ul class="dropdown-menu">
                        <li><a href="bba.php">BBA</a></li>
                        <li><a href="bca.php">BCA</a></li>
                        <li><a href="bcom.php">BCOM</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="sell.php">POST BOOK</a></li>
                <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                
                <li class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown"> ACCOUNT </a>
                    <ul class="dropdown-menu">
                        <li><a href="Register.php">REGISTRATION</a></li>
                        <li><a href="login.php">LOGIN</a></li>
                        <li>
                        <?php
                        @session_start();
                        @$uid=$_SESSION['user_id'];
                        if($uid!=null)
                        {?>
                             <li><a href="yourposts.php">MY POSTS</a></li>
                        
                       <?php }?></li>
                       <li>
                        <?php
                        @session_start();
                        @$uid=$_SESSION['user_id'];
                        if($uid!=null)
                        {?>
                             <li><a href="orders.php">MY ORDERS</a></li>
                        
                       <?php }?></li>
                        <li>
                        <?php
                        @session_start();
                        @$uid=$_SESSION['user_id'];
                        if($uid!=null)
                        {?>
                             <li><a href="profile.php">EDIT PROFILE</a></li>
                        
                       <?php }?></li>
                       <li>
                        <?php
                        @session_start();
                        @$uid=$_SESSION['user_id'];
                        if($uid!=null)
                        {?>
                             <li><a href="logout.php">LOGOUT</a></li>
                        
                       <?php }?></li>
                    </ul>
                </li>
                <!--<li class="nav-item"><a class="nav-link" href="gallery.php">
                        <i class="fa fa-images"></i>
                         Gallery
                </a></li>-->
                
                <!--<li class="nav-item"><a class="nav-link" href="">
                        <i class="fa fa-angle-right"></i>
                    Blog</a></li>-->
                    
            </ul>
        </div>
        <!-- /.navbar-collapse -->

        <!-- Start Atribute Navigation -->
        <div class="attr-nav">
            <ul>
            
            <!--<form class="example" action="search.php">
                <input type="text" placeholder="Search.." name="searchtxt"><button type="submit" name="search"><i class="fa fa-search"></i></button>
            </form>-->
               <!-- <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>-->
                <!--<li class="side-menu">
                    <a href="#">
                        <i class="fa fa-shopping-bag"></i>
                        <span class="badge"></span>
                        <p>My Cart</p>
                    </a>
                </li>-->
            </ul>
        </div>
        <!-- End Atribute Navigation -->
    </div>
    <!-- Start Side Menu -->
    <!--<div class="side">
        <a href="#" class="close-side"><i class="fa fa-times"></i></a>
        <li class="cart-box">
            <ul class="cart-list">
                <li>
                    <a href="#" class="photo"><img src="images/python1.jpg" class="cart-thumb" alt="" /></a>
                    <h6><a href="#">Delica omtantur </a></h6>
                    <p>1x - <span class="price">$80.00</span></p>
                </li>
                <li>
                    <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                    <h6><a href="#">Omnes ocurreret</a></h6>
                    <p>1x - <span class="price">$60.00</span></p>
                </li>
                <li>
                    <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                    <h6><a href="#">Agam facilisis</a></h6>
                    <p>1x - <span class="price">$40.00</span></p>
                </li>
                <li class="total">
                    <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                    <span class="float-right"><strong>Total</strong>: $180.00</span>
                </li>
            </ul>
        </li>
    </div>-->
    <!-- End Side Menu -->
</nav>