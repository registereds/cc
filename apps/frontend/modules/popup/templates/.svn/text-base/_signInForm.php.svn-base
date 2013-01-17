<div class="box pu-box">
    <div class="box-top-outer">
        <div class="box-top-inner<?php echo isset($grey)?'-grey':''?>">
        </div>
    </div>
    <div class="box-mid-outer">
        <div class="box-mid-inner">
            <h3 class="box-header">Please Sign In</h3>
            <div class="box-content">
                
                <div class="publock">
                    <div class="publock-content">
                        <?php if($sf_user->hasFlash('error')){ ?>
                <div class="error"><?php echo $sf_user->getFlash('error'); ?></div>
                <?php } ?>
                        <form action="<?php echo url_for('account/signIn'); ?>" class="new_user_session" id="new_user_session" method="post">
                            <fieldset>
                                <div>
                                    <label for="name">Your email address:</label>
                                </div>
                                <input type="text" value="" name="login"/>
                            </fieldset>
                            <fieldset>
                                <div>
                                    <label for="name">Password:</label>
                                </div>
                                <input type="password" value="" name="password"/>
                            </fieldset>
                            <fieldset>
                                <div>
                                    <label for="">&nbsp;</label>
                                </div>
                                <input type="checkbox" name="remember" value="1" <?php echo $sf_request->getCookie('cc_rm') ? 'checked':'' ?>  /> Remember Me
                            </fieldset>
                            <fieldset>
                                <div>
                                    <label for="">&nbsp;</label>
                                </div>
                                <a href='<?php echo url_for($sf_context->getModuleName().'/passResetForm');?>' >Forget your password?</a>
                            </fieldset>

                             
                            <?php include_partial('partials/formChallenge');?>

                            <div class='submit'>
                                <input class='action-button' type="submit" value="Login" />
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