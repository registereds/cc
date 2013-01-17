<div class="box pu-box">
    <div class="box-top-outer">
        <div class="box-top-inner<?php echo isset($grey)?'-grey':''?>">
        </div>
    </div>
    <div class="box-mid-outer">
        <div class="box-mid-inner">
            <h3 class="box-header">Reset Password</h3>
            <div class="box-content">

                <div class="publock">
                    <div class="publock-content">
                      
                        <p class="instruction">
                            To initiate the password reset process, please follow the instructions sent to your <?php echo $sf_user->getFlash('email', '')?> email address.
                        </p>

                           

                        <div class='submit'>

                            <?php
                            if(isset($fancyBox) && $fancyBox==true) {
                                echo '<input class="action-button" type="button" value="Close" onClick="window.top.$.fn.fancybox.close()" />';
                            }
                            ?>

                        </div>

                      
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="box-bottom-outer<?php echo isset($grey)?'-grey':''?>">
        <div class="box-bottom-inner<?php echo isset($grey)?'-grey':''?>">

        </div>
    </div>
</div>


