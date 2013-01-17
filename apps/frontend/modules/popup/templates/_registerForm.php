<div class="box pu-box">
    <div class="box-top-outer">
        <div class="box-top-inner<?php echo isset($grey)?'-grey':''?>">
        </div>
    </div>
    <div class="box-mid-outer">
        <div class="box-mid-inner">
            <h3 class="box-header">Register</h3>
            <div class="box-content">

                <div class="publock">
                    <div class="publock-content">
                        <p class="instruction">Please enter your email address to proceed with the registration process. </p>
                        <form action="/session" class="new_user_session" id="new_user_session" method="post">
                            
                            <fieldset>
                                <div>
                                    <label for="name">Your email address:</label>
                                </div>
                                <input type="text" value="" name="surname"/>
                            </fieldset>
                         
                            <?php include_partial('partials/formChallenge');?>



                            <div class='submit'>
                                <input class='action-button' type="submit" value="Proceed" />
                                <?php
                                if(isset($fancyBox) && $fancyBox==true) {
                                    echo '<input class="action-button" type="button" value="Cancel" onClick="window.top.$.fn.fancybox.close()" />';
                                }
                                ?>

                            </div>

                        </form>
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
