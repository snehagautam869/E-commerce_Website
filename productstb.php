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
   
<body style="padding-top: 50px;">
            <!-- Header file -->
    <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        include 'includes/modal.php';
        ?>
        <div class="container-fluid" class="embed-responsive embed-responsive-16by9">
                        <div class="row">
                        <video autoplay muted loop class="embed-responsive-item" id="autovid" width="100%" >
                            <source src="./img/tablet/vidad.mp4" type="video/mp4">
                        </video>

            <img src="img/tablet/ad1.jpg" class="img-responsive" alt="Responsive image">
    <div class="container">
        <!-- Jumbotron Header -->
            <hr>    
        <div class="row">
            <div class="col-sm-3" >
               <div class="panel-group">
               
               <div class="panel panel-default">
                    <div class="panel-heading color">
                        <h3 style="color:orange">Brands</h3>
                    </div>
                    <div class="panel-body">
                       <div class="rmvb">
                           <p><a href="#APPLE"><span style="color:black">APPLE</span></a></p>
                           <p><a href="#samsung"><span style="color:black">SAMSUNG</span></a></p>
                           <p><a href="#HONOR"><span style="color:black">HONOR</span></a></p>
                            <p><a href="#XIAOMI"><span style="color:black">XIAOMI</span></a></p>
                            <p><a href="#REALME"><span style="color:black">REALME</span></a></p>
                            
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
                            <p><a href="#APPLE"><span style="color:black">IOS</span></a></p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            
            
            <div class="col-sm-9 text-center">
                <div class="panel-group">
                  <!----------------------------------------------------featured phone----------------------------------->
                   <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:orange">Featured Mobile</h3>
                        </div>
                                        
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                             <img src="./img/1+tb.jpg" alt="1+">
                                    <div class="caption">
                                        <h3>Oneplus Pad 3 - Deep Green</h3>
                                            <p>Price: ₹ 37,999 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
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
                                <img src="./img/pixeltb.jpg" alt="google">
                                    <div class="caption">
                                        <h3>Google Pixel Tablet - White</h3>
                                            <p>Price: ₹ 79,000 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(39)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=39" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/tablet/moto1.jpg" alt="moto1.jpg">
                                <div class="caption">
                                    <h3>Motorola Tab - Modernist Teal</h3>
                                        <p>Price: ₹ 19,799 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(40)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=40" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/tablet/realme2.jpg" alt="realme2.jpg">
                                <div class="caption">
                                    <h3>realme Pad X WiFi Tablet</h3>
                                        <p>Price: ₹ 20,299</p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(41)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=41" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
      <div class="item active">
          <img class="zero-slide" src="img/tablet/ban2.webp" alt="zero slide">
        </div>
        <div class="item">
          <img class="first-slide" src="img/tablet/ban.webp" alt="First slide">
        </div>
        <div class="item">
          <img class="first-slide" src="img/tablet/ban3.webp" alt="First slide">
        </div>
        <div class="item">
          <img class="first-slide" src="img/tablet/ban4.webp" alt="First slide">
        </div>
                                            
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
                </div>
                   
                   <!----------------------------------------------------iphone----------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="APPLE" style="color:orange">APPLE</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                             <img src="./img/tablet/apple1.jpg" alt="Apple1" >
                                    <div class="caption">
                                        <h3>Apple 2022 11-inch iPad Pro</h3>
                                        <p>Price: ₹78,690</p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(42)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=42" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/tablet/apple2.jpg" alt="Apple2">
                                    <div class="caption">
                                        <h3>Apple 2021 iPad Mini with A15</h3>
                                            <p>Price: ₹ 75,900 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(43)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=43" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/tablet/apple3.jpg" alt="Apple3">
                                <div class="caption">
                                    <h3>Apple 2021 10.2-inch (25.91 cm) iPad </h3>
                                        <p>Price: ₹ 30,900 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(44)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=44" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/tablet/apple4.jpg" alt="Apple3">
                                <div class="caption">
                                    <h3>Apple 2022 iPad Air M1 Chip </h3>
                                        <p>Price: ₹ 69,900 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(45)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=45" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/tablet/apple5.jpg" alt="apple4">
                                <div class="caption">
                                    <h3>Apple 2022 10.9-inch iPad </h3>
                                        <p>Price: ₹ 41,900 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(46)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=46" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/tablet/apple6.jpg" alt="apple4">
                                <div class="caption">
                                    <h3>Apple 2021 iPad Pro M1 chip</h3>
                                        <p>Price: ₹ 1,19,999 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(47)) { //This is same as if(check_if_added_to_cart != 0)
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
                    </div>
                    
                </div>
                   
                   <!----------------------------------------------------samsung----------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="samsung" style="color:orange">SAMSUNG</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="./img/tablet/sam1.jpg" alt="sam2" >
                                    <div class="caption">
                                        <h3>Samsung Galaxy Tab A8 26.69cm</h3>
                                        <p>Price: ₹ 16,999 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(48)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=48" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div> 
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                             <img src="./img/tablet/sam2.jpg" alt="sam2">
                                    <div class="caption">
                                        <h3>Samsung Galaxy Tab S6 Lite</h3>
                                            <p>Price: ₹ 31,999 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(49)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=49" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/tablet/sam3.jpg" alt="sam3">
                                <div class="caption">
                                    <h3>Samsung Galaxy Tab S8 </h3>
                                        <p>Price: ₹ 58,999 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(50)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=50" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                    <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/tablet/sam4.jpg" alt="sam4">
                                <div class="caption">
                                    <h3>Samsung Galaxy Tab S7 FE </h3>
                                        <p>Price: ₹ 41,999 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(51)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=51" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-4 home-feature">
                        <div class="thumbnail">
                            <img src="./img/tablet/sam5.jpg" alt="sam5">
                                <div class="caption">
                                    <h3>Samsung Galaxy Tab S6 Lite</h3>
                                        <p>Price: ₹ 12,739 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(52)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=52" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!----------------------------------------------------XIAOMI----------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="XIAOMI" style="color:orange">XIAOMI</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                            <img src="./img/tablet/mi1.jpg" alt="mi">
                                <div class="caption">
                                    <h3>Xiaomi Pad 5</h3>
                                        <p>Price: ₹ 28,999 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(53)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=53" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                             <img src="./img/tablet/mi2.jpg" alt="mi">
                                <div class="caption">
                                    <h3>Redmi Pad </h3>
                                            <p>Price: ₹ 16,999  </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(54)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=54" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
                   <!---------------------------------------------------REALME----------------------------------->
                   <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="REALME" style="color:orange">REALME</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                            <img src="./img/tablet/realme1.jpg" alt="realme1">
                                <div class="caption">
                                    <h3>Realme Pad WiFi+4G Tablet</h3>
                                        <p>Price: ₹ 17,998 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(55)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=55" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                             <img src="./img/tablet/realme2.jpg" alt="realme">
                                <div class="caption">
                                    <h3>realme Pad X WiFi Tablet</h3>
                                            <p>Price: ₹ 20,299  </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(41)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=41" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-------------------------------------------------------------HONOR-------------------------------->
                <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 id="HONOR" style="color:orange">HONOR</h3>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                            <img src="./img/tablet/honor1.jpg" alt="honor1">
                                <div class="caption">
                                    <h3>Honor PAD X8</h3>
                                        <p>Price: ₹ 12,999 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(57)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=57" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                             <img src="./img/tablet/honor2.jpg" alt="honor2">
                                <div class="caption">
                                    <h3>Honor PAD 8 30.40 cm</h3>
                                            <p>Price: ₹ 19,999  </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "#" data-toggle="modal" data-target="#loginmodal"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            //We have created a function to check whether this particular product is added to cart or not.
                                            if (check_if_added_to_cart(58)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=58" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
    
   