
<div class="box pu-box">
    <div class="box-top-outer">
        <div class="box-top-inner">
        </div>
    </div>
    <div class="box-mid-outer">
        <div class="box-mid-inner">
            <h3 class="box-header">Reset Password</h3>
            <div class="box-content">

                <div class="publock">
                    <div class="publock-content">

                      <p class="instruction <?php if($sf_user->hasFlash('error')){echo 'error';} ?>">
                      <?php
                      if($sf_user->hasFlash('error')){
                      echo $sf_user->getFlash('error');
                      }else{
                      echo 'Select your new password and enter it below.';
                      }
                      ?>
                      </p>

                      <form action="<?php echo url_for('account/passResetNewPass');?>" class="new_user_session" id="new_user_session" method="post">

                            <fieldset>
                                <div>
                                    <label for="name">New password:</label>
                                </div>
                                <input type="password" name="pass" value="" />
                            </fieldset>
                            <fieldset>
                                <div>
                                    <label for="name">Re-enter password:</label>
                                </div>
                                <input type="password"  name="test" value=""/>
                            </fieldset>
                          <input type="hidden" name="c" value="<?php echo $sf_request->getParameter('c', ''); ?>" />
                            <?php include_partial('partials/formChallenge');?>



                            <div class='submit'>
                                <input class='action-button' type="submit" value="Proceed" />
                                

                            </div>

                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="box-bottom-outer">
        <div class="box-bottom-inner"></div>
    </div>
</div>


