
<h3>Activate Your Account:</h3>

<br/>

<?php if($sf_user->hasFlash('error')) { ?>
<p class="instruction error">
        <?php
        $errMsg = '';
        switch ($sf_user->getFlash('error')) {
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
    <?php }else { ?>

<p class="instruction">You are one  step  away  from registering your new account. Please pick your username and password and optionally set your account preferences.
</p>
<br />
    <?php } ?>
<div class="box">
    <div class="box-top-outer">
        <div class="box-top-inner">
        </div>
    </div>
    <div class="box-mid-outer">
        <div class="box-mid-inner">

            <div class="box-content">

                <div class="publock">
                    <div class="publock-content">

<?php
$errors = $sf_user->getFlash('errors', array());
$data = $sf_user->getFlash('data', array());
?>
                        
                        <form id="activateForm" action="<?php echo url_for('account/activate');?>"  method="post">
                            <div class="form_section">

                                <h3 class="form_section_header">Set your username and password</h3>
                                <br />

                                <fieldset>
                                    <div>
                                        <label for="username"><span class="error">*</span>Pick Your Username:</label>
                                    </div>
                                    <input type="text" name="data[username]" id="username" value="<?php echo myArrayUtil::getValue($data, 'username', ''); ?>" />
                                    <?php if(isset($errors['username'])){ ?>
                                    <label class="error" generated="false"  for="username"><?php echo $errors['username']; ?></label>
                                    <?php } ?>
                                 

                                    <br />
                                    
                                    <span class="form_hint">Examples: JSmith, JohnSmith (4~30 alphanumeric characters) </span>
                                </fieldset>

                                <fieldset>
                                    <div>
                                        <label for="password"><span class="error">*</span>Set Your Password:</label>
                                    </div>
                                    <input type="password"  name="data[password]" id="password" value="" />
                                    <?php if(isset($errors['password'])){ ?>
                                    <label  class="error" generated="false"  for="password"><?php echo $errors['password']; ?></label>
                                    <?php } ?>
                                     <br />
                                    <span class="form_hint">Minimum of 6 characters in length.</span>
                                </fieldset>
                                <fieldset>
                                    <div>
                                        <label for="password2"><span class="error">*</span>Confirm Your Password:</label>
                                    </div>
                                    <input type="password"  name="data[password2]" id="password2" value="" />
                                            <?php if(isset($errors['password2'])){ ?>
                                    <label  class="error" generated="false"  for="password2"><?php echo $errors['password2']; ?></label>
                                    <?php } ?>
                                </fieldset>
                            </div>


                            <div class="form_section">
                                <h3 class="form_section_header">Set your preferences (Optional)</h3>
                                <br />

                                <fieldset>
                                    <div>
                                        <label for="city">Your closest city:</label>
                                    </div>

                                    <select name="data[city]" id="city">
                                        <option value="0">-- Please Select --</option>
                                        <?php

                                            $selectedId = myArrayUtil::getValue($data, 'username', 0);
                                            foreach ($cities as $id=>$name){
                                                $selected = $selectedId == $id ? 'selected' : '';
                                                echo "<option value='$id' $selected >$name</option>";
                                            }
                                        ?>
                                        
                                        
                                    </select>

                                </fieldset>

                                <fieldset>
                                    <div>
                                        <label for="uni">Your Campus:</label>
                                    </div>
                                    <input id="uni" style="width:200px;" name="data[campus]" value="<?php echo myArrayUtil::getValue($data, 'campus', ''); ?>" />
                                    <span class="error" ><?php echo myArrayUtil::getValue($errors, 'campus', ''); ?></span>
                                <br />
                                    <span class="form_hint">Please type the name of the your University, college or institution.</span>
                                </fieldset>

                            </div>
                            
                            <div class="form_section">
                                <h3 class="form_section_header">Activate</h3>
                                <br />

                                <fieldset>
                                    <div>
                                        <label for="name"><span class="error">*</span>Word Verification:</label>
                                    </div>
                                    
                                    <?php echo image_tag('si/si.php?'.md5(microtime(true)), array('id'=>'siimage')); ?>


  <object   type="application/x-shockwave-flash" data="<?php echo sfConfig::get('app_site_root'); ?>/images/si/securimage_play.swf?audio=<?php echo sfConfig::get('app_site_root'); ?>/images/si/securimage_play.php&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777" width="19" height="19">
    <param name="movie" value="<?php echo sfConfig::get('app_site_root'); ?>/images/si/securimage_play.swf?audio=<?php echo sfConfig::get('app_site_root'); ?>/images/si/securimage_play.php&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;iconColor=#777" />
  </object>
                                        
   
  <a tabindex="-1" style="border-style: none;" href="#" title="Refresh Image" onclick="document.getElementById('siimage').src = '<?php echo sfConfig::get('app_site_root'); ?>/images/si/si.php?sid=' + Math.random(); return false"><img src="<?php echo sfConfig::get('app_site_root'); ?>/images/si/images/refresh.gif" alt="Reload Image" onclick="this.blur()" align="bottom" border="0"></a>
 

  <br><br>
                                    

                                
                               
                                    <div>
                                        
                                    </div>
                                    <label for="captcha_code">Enter Code </label>
  <input name="data[captcha_code]" id="captcha_code" size="10" style="width: 130px;" type="text" class="required">
                                      <?php if(isset($errors['captcha_code'])){ ?>
                                    <label  class="error" generated="false"  for="captcha_code"><?php echo $errors['captcha_code']; ?></label>
                                    <?php } ?>

                               </fieldset>
                                <fieldset>
                                    <div>
                                        <label for="foo">&nbsp;</label>
                                    </div>
                                    <p>By clicking on 'I accept' below you are agreeing to the <a href="<?php echo sfConfig::get('app_site_root'); ?>/misc/termsOfUse" target="_blank">Terms of Use</a> the <a href="<?php echo sfConfig::get('app_site_root'); ?>/misc/privacyPolicy" target="_blank">Privacy Policy</a>.</p>
  
                                </fieldset>

                            </div>

                            <?php include_partial('partials/formChallenge');?>
                            <div class='submit'>
                                <input type="hidden" name="c" value="<?php echo $sf_request->getParameter('c'); ?>" />
                                <input class='action-button' type="submit" value="I accept and activate my account" />
                            </div>
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box-bottom-outer">
        <div class="box-bottom-inner">
        </div>
    </div>

</div>
<script type="text/javascript">
var campusNames = <?php echo html_entity_decode($campusNames);?>;
$('#uni').autocomplete(campusNames,  {"matchContains":true});




jQuery.validator.addMethod("alphanumeric", function(value, element) {
  return !value.replace(/^\s*/, "").replace(/\s*$/, "").match(/[^\w]/);
}, "Only letters (a-z,A-Z), numbers (0-9) are allowed.");



$("#activateForm").validate({
		rules: {
			
			"data[username]": {
				required: true,
				rangelength: [4, 30],
                                alphanumeric: true,
				remote: "account/checkUsername"
			},
			"data[password]": {
				required: true,
				rangelength: [6, 30]
			},
			"data[password2]": {
				required: true,				
				equalTo: "#password"
			},
                        "data[campus]":{
                             minlength: 10
                        },
                        "data[captcha_code]":{
                             rangelength: [4, 5]
                        }
 
		}
                ,
		messages: {
			
			"data[username]": {
				required: "Please pick a username",
				rangelength: jQuery.format("Username must be {0}~{1} characters long"),
				remote: jQuery.format("{0} is already in use")
			},
			"data[password]": {
				required: "Please provide a password",
				rangelength: jQuery.format("Please enter {0}~{1} characters")
			},
			"data[password2]": {
				required: "Please repeat your password",
				equalTo: "Please enter the same password again"
			},
                        "data[campus]":{
                                minlength: "Please enter full name or leave blank"
                        },
                        "data[captcha_code]":{
                             rangelength: "Code does not match"
                        }

		},
                success: function(label) {
			label.html('&nbsp;').addClass("ok");
		}
                 
});

</script>
