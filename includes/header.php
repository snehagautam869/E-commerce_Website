<?php
        include 'includes/modal.php';
        include 'includes/common.php';
        ?>
   <div class="navbar navbar-inverse navbar-fixed-top " >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>   
            <a class="navbar-brand" href="index.php"><span style="color:grey" class="glyphicon glyphicon-store">&nbsp;LifeStyle-<span style="color:orange">Store</span></span></a>
        </div>
                
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "index.php "><span class = "glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href = "products.php "><span class = "glyphicon glyphicon-phone"></span>  Smartphones</a></li>
                    <li><a href = "productsw.php "><span class = "glyphicon glyphicon-time"></span>  Watches</a></li>
                    <li><a href = "productstb.php "><span class = "glyphicon glyphicon-book"></span>  Tablets</a></li>
                    <li><a href = "productse.php"><span class = "glyphicon glyphicon-music"></span>  Earbuds</a></li>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span>  Shopping Cart</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span>  Log Out</a></li>
                    <?php
                } else {
                    ?>
                    <li><a href = "index.php "><span class = "glyphicon glyphicon-home"></span>  Home</a></li>
                    <li><a href = "products.php "><span class = "glyphicon glyphicon-phone"></span>  Smartphones</a></li>
                    <li><a href = "productsw.php "><span class = "glyphicon glyphicon-time"></span>  Watches</a></li>
                    <li><a href = "productstb.php "><span class = "glyphicon glyphicon-book"></span>  Tablets</a></li>
                    <li><a href = "productse.php"><span class = "glyphicon glyphicon-music"></span>  Earbuds</a></li>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>  Sign Up</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span>  Log in</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>


