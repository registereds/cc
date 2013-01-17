<?php
$withLoginBox = isset($loginBox) && $loginBox;
?>

<div class="home-sidebar rfloat">

    <div class="home-sidebar-region">
        <?php if ($withLoginBox && !$sf_user->isAuthenticated()) {
        ?>
            <div class="rbox grey">
                <div >
                    <div class="rbox_head"><b><i></i></b></div>
                </div>
                <div class="rbox_body">
                    <h3 class="header">Not a Member?</h3>
                    <div class="content">
                        <p class="box-padding">
                            You don't need to be a member to post listings, but becoming a member gives additional benefits such as the ability to update your listings.
                        </p>
                        <br />
                        <div class="centered">

                            <a class="hightlight fancy-iframe action-button" href="<?php echo url_for('account/registerForm'); ?>">Register</a>
                            <a class="hightlight fancy-iframe action-button" href="<?php echo url_for('account/signInForm') ?>">Sign In</a>
                        </div>


                    </div>
                </div>
                <div>
                    <div class="rbox_tail"><b><i></i></b></div>
                </div>
            </div>





        <?php } ?>
        <div class="rbox grey">
            <div >
                <div class="rbox_head"><b><i></i></b></div>
            </div>
            <div class="rbox_body">
                <h3 class="header">Help</h3>
                <div class="content">
                    <ul class="item-list">
                        <li><a href="http://freshmeat.net/projects/phpivr">Frequently Asked Questions</a></li>
                        <li><a href="http://freshmeat.net/projects/phpivr">Listing Guidelines</a></li>
                        <li><a href="http://freshmeat.net/projects/phpivr">Customer Support</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="rbox_tail"><b><i></i></b></div>
            </div>
        </div>


    </div>
    <div class="clearfix"></div>
</div>
