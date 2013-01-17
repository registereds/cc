<?php
    $fancy = isset($fancyBox) && $fancyBox==true ? 'Fancy':'';
?>
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

 
                      <?php if($sf_user->hasFlash('error')){ ?>
                        <p class="instruction error">
                            <?php
                                $errMsg = '';
                                switch ($sf_user->getFlash('error')){
                                    case 'Already':                                        
                                        $errMsg = 'This email address has already been register. <br />'.link_to('Forgot password ?', 'account/passResetForm'.$fancy);
                                        break;
                                    case 'Not_Valid':
                                        $errMsg = 'Please provide a valid email address. (e.g. john@example.com)';
                                        break;


                                    default:
                                        $errMsg = $sf_user->getFlash('error');
                                }
                                echo $errMsg;
                            ?>
                        </p>
                        <?php }else{ ?>

                        <p class="instruction">Please enter your email address to proceed with the registration process.</p>

                        <?php } ?>

                        
                        <form action="<?php echo  url_for('account/register');?>" class="new_user_session" id="new_user_session" method="post">
                            
                            <fieldset>
                                <div>
                                    <label for="email">Your email address:</label>
                                </div>
                                <input type="text" value="" name="email"/>
                            </fieldset>
                         
                            <?php include_partial('partials/formChallenge');?>

                            <div class='submit'>
                                <input class='action-button' type="submit" value="Proceed" />
                                <?php
                                if($fancy) {
                                    echo '<input type="hidden" name="fancy" value="1" />';
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
