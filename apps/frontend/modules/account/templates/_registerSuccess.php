<div class="box pu-box">
    <div class="box-top-outer">
        <div class="box-top-inner<?php echo isset($grey)?'-grey':''?>">
        </div>
    </div>
    <div class="box-mid-outer">
        <div class="box-mid-inner">
            <h3 class="box-header">Register Account</h3>
            <div class="box-content">

                <div class="publock">
                    <div class="publock-content">
                      
                        <p class="instruction">
                            Your new account was created successfully. Please check your email account for instructions how to properly activate it and set a password.
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


