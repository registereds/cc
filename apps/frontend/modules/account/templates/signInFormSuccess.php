<br/>
<?php if(strpos($sf_request->getUri(),$sf_context->getActionName()) ===false){?>
<p style="width: 480px;margin:10px auto ;">You are required to sign in to access this page, 
    if you are not a member to this site, you can <a class="hightlight" href="<?php echo url_for('account/registerForm'); ?>">register</a> now.</p>
<?php } ?>
<?php include_partial('signInForm'); ?>
