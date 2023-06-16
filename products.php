<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
   
<head>
        <title>Mobile | Lifestyle Store </title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
    <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
</head>
   
<body >
            <!-- Header file -->
    <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        include 'includes/modal.php';
        ?>  
        
                <div class="jumbotron home-spacer" id="products-jumbotron" >
                <center><h1 style="color:orange">Welcome to our Lifestyle Store</h1>
                <p>We have the best Mobile phone from Biggest Brands for you. No need to hunt around, we have all in one place.</p>
              </center>
            </div>    
    <div class="container">
        <!-- Jumbotron Header -->            
        <div class="row">
            <div class="col-sm-3" >
               <div class="panel-group">
               
               <div class="panel panel-default">
                    <div class="panel-heading color">
                        <h3 style="color:orange">Brands</h3>
                    </div>
                    <div class="panel-body">
                       <div class="rmvb">
                           <p><a href="#ios"><span style="color:black">APPLE</span></a></p>
                           <p><a href="#samsung"><span style="color:black">SAMSUNG</span></a></p>
                           <p><a href="#oneplus"><span style="color:black">ONEPLUS</span></a></p>
                            <p><a href="#xiaomi"><span style="color:black">XIAOMI</span></a></p>
                        </div>
                    </div>
                </div>
               <br>
                <div class="panel panel-default">
                    <div class="panel-heading  color">
                        <h3 style="color:orange">Operating System</h3>
                    </div>
                    
                    <div class="panel-body">
                       <div class="rmvb">
                            <p><a href="#samsung"><span style="color:black">ANDROID</span></a></p>
                            <p><a href="#ios"><span style="color:black">IOS</span></a></p>
                        </div>
                    </div>
                </div>
                </div>
            </div> 
            <div class="col-sm-9 text-center">
                <div class="panel-group">
                  <!----------------------------------------------------featured phone----------------------------------->
                   <div class="panel panel-default">
                   <img src="img/banner.gif" class="img-responsive" alt="Responsive image">
                        <div class="panel-heading  color">
                            <h3 style="color:orange">Featured Mobile</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                             <img src="./img/iphone14pro.jpg" alt="iPhone 14 Pro Max">
                                    <div class="caption">
                                        <h3>Apple iPhone 14 Pro Max (128 GB) - Deep Purple</h3>
                                            <p>Price: ₹ 1,37,999 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/samsungs23.jpg" alt="samsung s8 plus">
                                    <div class="caption">
                                        <h3>Samsung Galaxy S23 (256 GB) - Lavender</h3>
                                            <p>Price: ₹ 79,000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/op11r.jpg" alt="OnePlus 11R">
                                <div class="caption">
                                    <h3>OnePlus 11R (256 GB) - Galactic Silver</h3>
                                        <p>Price: ₹ 45,999 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/mi13pro.jpg" alt="Xiaomi 13 Pro">
                                <div class="caption">
                                    <h3>Xiaomi 13 Pro (256 GB) Ceramic White</h3>
                                        <p>Price: ₹ 75,999</p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------iphone----------------------------------->
                   <div class="container-fluid" class="embed-responsive embed-responsive-16by9">
                        <div class="row">
                        <video autoplay muted loop class="embed-responsive-item" id="autovid" width="100%" >
                            <source src="./img/iban.mp4" type="video/mp4">
                        </video>
                        </div>
                    </div>
                   <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="ios" style="color:orange">apple</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                             <img src="./img/iphone14.jpg" alt="iphone x" >
                                    <div class="caption">
                                        <h3>Apple iPhone 14  (128 GB) - Sky Blue</h3>
                                        <p>Price: ₹80,000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/iphone14pro.jpg" alt="ipnone 7 plus">
                                    <div class="caption">
                                        <h3>Apple iPhone 14 Pro Max (128 GB) - Deep Purple</h3>
                                            <p>Price: ₹ 1,37,999 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/iphone13mini.jpg" alt="iphone 7">
                                <div class="caption">
                                    <h3>Apple iPhone 13 Mini (256 GB) - Starlight</h3>
                                        <p>Price: ₹ 69,000 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/iphonetb.jpg" alt="iphone 6s plus">
                                <div class="caption">
                                    <h3>Apple iPad Air M1 (64 GB) - Purple</h3>
                                        <p>Price: ₹ 54,900 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------samsung----------------------------------->
                   <div class="container-fluid" class="embed-responsive embed-responsive-16by9">
                        <div class="row">
                        <video autoplay muted loop class="embed-responsive-item" id="autovid" width="100%" >
                            <source src="./img/sban.mp4" type="video/mp4">
                        </video>
                        </div>
                    </div> 
                   <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="samsung" style="color:orange">samsung</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/samsungfold.jpg" alt="galaxy s8 plus" >
                                    <div class="caption">
                                        <h3>Samsung Galaxy Fold 4 (256 GB) - Beige</h3>
                                        <p>Price: ₹ 1,54,998 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div> 
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                             <img src="./img/samsungs23.jpg" alt="samsung s8 plus">
                                    <div class="caption">
                                        <h3>Samsung Galaxy S23 (256 GB) - Lavender</h3>
                                            <p>Price: ₹ 79,000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/samsungflip.jpg" alt="galaxy s7 edge">
                                <div class="caption">
                                    <h3>Samsung Galaxy Flip 3 (128 GB) - Cream</h3>
                                        <p>Price: ₹ 56,999 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/samsungs23u.jpg" alt="galaxy a8">
                                <div class="caption">
                                    <h3>Samsung Galaxy S23 Ultra (512 GB) - Cream</h3>
                                        <p>Price: ₹ 1,34,999 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------oneplus----------------------------------->
                 
                   <div class="container-fluid" class="embed-responsive embed-responsive-16by9">
                        <div class="row">
                        <video autoplay muted loop class="embed-responsive-item" id="autovid" width="100%" >
                            <source src="./img/1ban.mp4" type="video/mp4">
                        </video>
                        </div>
                    </div> 
                   <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="oneplus" style="color:orange">oneplus</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                            <img src="./img/op11r.jpg" alt="oneplus 5t">
                                <div class="caption">
                                    <h3>OnePlus 11R (256 GB) - Galactic Silver</h3>
                                        <p>Price: ₹ 45,999 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                             <img src="./img/1+tb.jpg" alt="mi mix 2">
                                <div class="caption">
                                    <h3>OnePlus Pad 29.49cm (256 GB) - Sea Green</h3>
                                            <p>Price: ₹ 37,999  </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/1+nord.jpg" alt="oneplus 3t">
                                <div class="caption">
                                    <h3>OnePlus Nord CE 3 Lite (128 GB) - Pastel Lime</h3>
                                        <p>Price: ₹ 19,999 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/1+10r.jpg" alt="oneplus 3">
                                <div class="caption">
                                    <h3>OnePlus 10R (128GB) - Forest Green</h3>
                                        <p>Price: ₹ 34,999 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(13)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------xiaomi----------------------------------->
                   <div class="container-fluid" class="embed-responsive embed-responsive-16by9">
                        <div class="row">
                        <video autoplay muted loop class="embed-responsive-item" id="autovid" width="100%" >
                            <source src="./img/xban.mp4" type="video/mp4">
                        </video>
                        </div>
                    </div> 
                   <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="xiaomi" style="color:orange">xiaomi</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/mi12.jpg" alt="mi mix2" >
                                    <div class="caption">
                                        <h3>Xiaomi 12 Pro (256 GB) - Opera Muave </h3>
                                        <p>Price: ₹ 66,999 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/mi11x.jpg" alt="mi max 2">
                                    <div class="caption">
                                        <h3>Mi 11X (6GB RAM  128 GB) - Cosmic Black</h3>
                                            <p>Price: ₹ 23,499 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(15)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/mitb.jpg" alt="mi a1">
                                <div class="caption">
                                    <h3>Xiaomi Pad 5 (256GB) - Space Gray</h3>
                                        <p>Price: ₹ 28,499 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                         <img src="./img/mi13pro.jpg" alt="mi mix 2">
                                <div class="caption">
                                    <h3>Xiaomi 13 Pro (256 GB) Ceramic White</h3>
                                        <p>Price: ₹ 75,999</p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
    
   