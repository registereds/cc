<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />   
    <?php include_stylesheets() ?>  
    <?php include_javascripts() ?>
  </head>
  <body>
       
	<div id="page">
            
	    <div id="container">        
	        <div id="header" class="clearfix">
	            <div id="header-row">
	                <div class="top-login-container">
	                    <div class="top-login">
	                        <ul>
	                     
                                    
                                    <?php if (!$sf_user->isAuthenticated()){ ?>
	                            <li><a class="hightlight fancy-iframe" href="<?php echo url_for('account/passResetForm'); ?>">Lost password?</a></li>
	                            <li><a class="hightlight fancy-iframe" href="<?php echo url_for('account/registerForm'); ?>">Register</a></li>
	                            <li><a class="hightlight fancy-iframe" href="<?php echo url_for('account/signInForm')?>">Sign In</a></li>
                                    <?php }else{ ?>
                                        <li>G'day (<strong><?php echo $sf_user->getUser()->getNickName(); ?></strong>)
                                            <a class="hightlight" href="<?php echo url_for('account/signOut')?>">Sign out</a>
                                            
                                        </li>
                                    <?php }?>
	                        </ul>
	                    	
	                    </div>
	                </div>
	                <div class="logo"> <a href="http://www.campuscenter.com.au/"><?php echo image_tag('cc_logo.png', 'alt=CampusCenter') ?></a> </div>
	            </div>
	            <div class="clearfix"></div>
	            <?php include_partial('partials/layoutMenu');?>
	        </div>  
	    
	    <!-- <div class="announce">
          <p></p>
        </div> -->
	  
    		<?php echo $sf_content ?>
        
	    </div>
            


	</div>
            <div id="footer">
                <div class="footer-container">

                    <div class="copyright"> Copyright &copy 2009 CampusCenter.com.au, All Rights Reserved. </div>
                    <div class="footerLinks"> <a href="http://www.campuscenter.com.au/about/">About CampusCenter</a> <a target="_blank" href="http://web.sourceforge.com/privacy.php">Privacy Statement</a> <a target="_blank" href="http://web.sourceforge.com/terms.php">Terms of Use</a> <a href="http://help.freshmeat.net/" onclick="window.open(this.href);return false;">Contact Us</a> </div>
                </div>
            </div>
	
  </body>
</html>
