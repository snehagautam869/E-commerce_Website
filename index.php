<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | Lifestyle Store.com</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

          <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap Core CSS -->
          <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
          <link href="./css/style.css" rel="stylesheet">
        <!-- jQuery -->
          <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>
  
    </head>
    <body style="padding-top: 50px;">

        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->


         <!-- Main banner image-->
            <div id = "banner_image" >
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h1>Biggest Online Mobile Store</h1>
                            <h4><p>Flat &nbsp;&#8377;2,000&nbsp;&nbsp;OFF&nbsp;&nbsp;on all products.</p></h4>
                            <br>
                            <br>
                            <a  href="products.php" class="btn btn-warning btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
         
        <img src="img/banner.gif" class="img-responsive" alt="Responsive image">

            <!--Main banner image end-->'
        <div id="content">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        <li data-target="#myCarousel" data-slide-to="4" class=""></li>
        <li data-target="#myCarousel" data-slide-to="5" class="active"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
      <div class="item">
          <img class="zero-slide" src="img/bg7.webp" alt="zero slide">
        </div>
        <div class="item">
          <img class="first-slide" src="img/bg1.webp" alt="First slide">
        </div>
        <div class="item">
          <img class="second-slide" src="img/bg8.webp" alt="Second slide">
        </div>
        <div class="item active">
          <img class="third-slide" src="img/bg3.webp" alt="Third slide">
        </div>
        <div class="item">
          <img class="forth-slide" src="img/bg13.webp" alt="First slide">
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





            <!--Item categories listing-->
            <div class="container text-center">
                <div id="item_list">
                    <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:orange">Smartphones</h3>
                        </div>

                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="products.php#ios">
                               <div class="thumbnail">
                                    <img src="./img/iphone14pro.jpg" alt="iphone x" >
                                        <div class="caption">
                                            <h3>Apple</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="products.php#oneplus">
                               <div class="thumbnail">
                                    <img src="./img/pixel.jpg" alt="pixel" >
                                        <div class="caption">
                                            <h3>Google</h3>
                                        </div>
                                </div>
                            </a>
                        </div>



                         <div class="col-sm-3">
                            <a href="products.php#samsung">
                               <div class="thumbnail">
                                    <img src="./img/samsungfold.jpg" alt="galaxy note 8 plus" >
                                        <div class="caption">
                                            <h3>Samsung</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#oneplus">
                               <div class="thumbnail">
                                    <img src="./img/op11r.jpg" alt="oneplus" >
                                        <div class="caption">
                                            <h3>OnePlus</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="products.php#oneplus">
                               <div class="thumbnail">
                                    <img src="./img/realme.jpg" alt="Realme" >
                                        <div class="caption">
                                            <h3>Realme</h3>
                                        </div>
                                </div>
                            </a>
                        </div>



                         <div class="col-sm-3">
                            <a href="products.php#xiaomi">
                               <div class="thumbnail">
                                    <img src="./img/mi13pro.jpg" alt="mi mix 2" >
                                        <div class="caption">
                                            <h3>Xioami</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="products.php#xiaomi">
                               <div class="thumbnail">
                                    <img src="./img/oppof23.jpg" alt="mi mix 2" >
                                        <div class="caption">
                                            <h3>OPPO</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="products.php#xiaomi">
                               <div class="thumbnail">
                                    <img src="./img/iqooneo6.jpg" alt="mi mix 2" >
                                        <div class="caption">
                                            <h3>IQOO</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>



                </div>
            </div>

            <!--Item categories listing end-->
            <img src="img/bg16.jpg" class="img-responsive" alt="Banner Tab">
            <img src="img/bg15.jpg" class="img-responsive" alt="Banner Tab">
            <!--Item categories listing-->
            <div class="container text-center">
                <div id="item_list">
                    <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:orange">Tablets</h3>
                        </div>

                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="products.php#ios">
                               <div class="thumbnail">
                                    <img src="./img/iphonetb.jpg" alt="iphone x" >
                                        <div class="caption">
                                            <h3>Apple</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="products.php#oneplus">
                               <div class="thumbnail">
                                    <img src="./img/pixeltb.jpg" alt="pixel" >
                                        <div class="caption">
                                            <h3>Google</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="products.php#oneplus">
                               <div class="thumbnail">
                                    <img src="./img/1+tb.jpg" alt="Realme" >
                                        <div class="caption">
                                            <h3>OnePlus</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="products.php#samsung">
                               <div class="thumbnail">
                                    <img src="./img/mitb.jpg" alt="galaxy note 8 plus" >
                                        <div class="caption">
                                            <h3>Samsung </h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>



                </div>
            </div>
            <img src="img/BG20.gif" class="img-responsive" alt="Watche banner">
            <!--Item categories listing end-->
                        <!--Item categories listing-->
                        <div class="container text-center">
                <div id="item_list">
                    <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:orange">Watches</h3>
                        </div>

                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="products.php#ios">
                               <div class="thumbnail">
                                    <img src="./img/watches/apple2.jpg" alt="iphone x" >
                                        <div class="caption">
                                            <h3>Apple</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="products.php#oneplus">
                               <div class="thumbnail">
                                    <img src="./img/watches/apple.jpg" alt="pixel" >
                                        <div class="caption">
                                            <h3>Apple</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-3">
                            <a href="products.php#oneplus">
                               <div class="thumbnail">
                                    <img src="./img/watches/garmin.jpg" alt="Realme" >
                                        <div class="caption">
                                            <h3>Garmin</h3>
                                        </div>
                                </div>
                            </a>
                        </div>



                        <div class="col-sm-3">
                            <a href="products.php#samsung">
                               <div class="thumbnail">
                                    <img src="./img/watches/fitbit.jpg" alt="galaxy note 8 plus" >
                                        <div class="caption">
                                            <h3>Fitbit</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="products.php#samsung">
                               <div class="thumbnail">
                                    <img src="./img/watches/amze.jpg" alt="galaxy note 8 plus" >
                                        <div class="caption">
                                            <h3>AmazeFit</h3>
                                        </div>
                                </div>
                            </a>
                        </div>  
                    </div>      

                </div>
            </div>

            <!--Item categories listing end-->
        </div>
        <img src="img/Watches/ads6.webp" class="img-responsive" alt="Banner Tab">     

        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->

    </body>
</html>
