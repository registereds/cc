<?php 
	$module = ucwords( $sf_context->getModuleName()  );
	switch($module){
		case 'Events':
			$module = 'News & Events';
			break;
	
	}

	
	
?>
<div class="crumbs">
<a href='javascript:history.go(-1)' class='backlink'>Back to search result</a><span> List in categoy:</span> 
<?php echo image_tag('module_'.$listing['module'] );?>
<?php echo link_to($module,  $listing->getModule().'/index' );?>
 &raquo; 
<?php echo html_entity_decode($listing->getCategory()->thumbTag());?>  
<?php echo html_entity_decode($listing->getCategory()->getHTMLAnchor());?>  
</div>