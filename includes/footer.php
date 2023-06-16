<?php
        include 'includes/modal.php';
        ?>
<footer>
    <div class="container">
        <div class="row">
            <!-- <div class="columnf">
                <h4 class="font-rubik font-size-10">Newslatter</h4>
                <form class="form-row">
                        <input type="text" class="form-control" placeholder="Email *">
                        <a  type="submit" class="btn btn-danger btn-lg active">Subscribe</a>
                </form>
            </div> -->
            <div class="columnf">
              <h3>Information</h3>
                <p><a href="about_us.php"><span style="color:white">About Us</span></a></p>
                <p><a href="contact_us.php"><span style="color:white">Contact Us</span></a></p>
            </div>


            <div class="columnf">
              <h3>My Account</h3>
                <p><a href="#" data-toggle="modal" data-target="#loginmodal" ><span style="color:white">Log In</span></a></p>
                <p><a href="signup.php"><span style="color:white">Sign Up</span></a></p>
                <p><a href="settings.php"><span style="color:white"> Change Password</span></a></p>
            </div>

            <div class="columnf">
              <h3>Contact Us</h3>
                <p>CONTACT No.&nbsp;&nbsp;&nbsp;&nbsp;&#43;91&#45;123&#45;456&#45;7890</p>
                <p>LifeStyle&#45;Store&#46;com &copy;<?php echo DATE('Y') ;?>.&nbsp;&nbsp;All Rights Reserved.</p>
                <a class="link" href="">Made with&nbsp;</a>&#x1f495;<a class="link" href="">&nbsp;in India</a>
            </div>
        </div>
        
    </div>
</footer>
