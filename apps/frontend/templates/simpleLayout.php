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
	                        
	                    	
	                    </div>
	                </div>
	                <div class="logo"> <a href="http://www.campuscenter.com.au/"><?php echo image_tag('cc_logo.png', 'alt=CampusCenter') ?></a> </div>
	            </div>
	            <div class="clearfix"></div>
                    <div style="height: 20px;"> </div>
	        </div>  
	    
	<!-- <div class="announce">
          <p></p>
        </div> -->
	  
    		<?php echo $sf_content ?>
        
	    </div>
	</div>
       
     
	
  </body>
</html>
