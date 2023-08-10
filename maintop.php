<?php
include "config.php";
/*include "function.inc.php";
$cat_res=mysqli_query($conn,"select * from category");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
    $cat_arr[]=$row;
}*/
?>
<div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="custom-select-box">
                   <!-- <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                        <option>¥ JPY</option>
                        <option>$ USD</option>
                        <option>€ EUR</option>
                    </select>
                </div>
                <div class="right-phone-box">
                    <!--<p>Call US :- <a href="#"> +91 90166 38616</a></p>-->
                </div>
                <div class="our-link">
                    <ul>
                        <li><a href="cart.php"><i class="fa fa-shopping-cart s_color"> </i> My Cart</a></li>
                        <!--<li><a href="#"><i class="fas fa-location-arrow"></i> Our location</a></li>-->
                        
                             <li><a href="contact-us.php"><i class="fas fa-headset"></i> Contact Us</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="login-box">
                    <?php 
                    @session_start();
                    @$uname=$_SESSION['user_name']; ?>
                   <p style="color:white"><b><i><span style="text-transform:capitalize;"> <?php echo $uname; ?></span> </i></b></p>
                  
                </div>
                 <div class="text-slid-box">
                    <div id="offer-box" class="carouselTicker">
                        <ul class="offer-box">
                            <!--<li>
                                <i class=""></i>Use asha4@gmail.com and 12345 to sign in to account
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now 
                            </li>-->
                        </ul>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>