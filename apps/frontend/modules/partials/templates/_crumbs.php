<?php
	$module = ucwords( $sf_context->getModuleName()  );
	$allWord = 'All Categories';
	switch($module){
		case 'Events':
			$module = 'News & Events';
			break;
		case 'Forum':
			$allWord = 'All Topic';
			break;

	}

        $category = $sf_request->getParameter('category', null);
        $keyword = $sf_request->getParameter('keyword', null);


?>

<h2 class="crumbs">
<?php if(in_array($module, array('News & Events', 'Marketplace'))) { ?>
<ul class="lfloat">
    <li class="sites bubbleInfo normal">
        <span>Location:</span>
        <a class="current trigger" href="#" >Melbourne</a>
        <a href="<?php echo url_for('pop/changeLocal'); ?>" class="smaller natural trigger"><sup>[Change]</sup></a>
        <div style="opacity: 0;" class="popup">
            <div class="menuitems">
                <ul class="sites-sub">
                    <li><a href="http://www.campuscenter.com.au/">Adelaide</a></li>
                    <li><a href="http://handhelds.freshmeat.net/">Brisbane</a></li>
                    <li><a href="http://mac.freshmeat.net/">Canberra</a></li>
                    <li><a href="http://unix.freshmeat.net/">Darwin</a></li>
                    <li><a href="http://unix.freshmeat.net/">Gold Coast</a></li>
                    <li><a href="http://unix.freshmeat.net/">Melbourne</a></li>
                    <li><a href="http://unix.freshmeat.net/">Sydney</a></li>
                    <li><a href="http://unix.freshmeat.net/">Newcastle</a></li>
                    <li><a href="http://unix.freshmeat.net/">Perth</a></li>
                    <li><a href="http://unix.freshmeat.net/">Tasmania</a></li>
                </ul>
            </div>
        </div>
    </li>
</ul>
&nbsp; &raquo;
<?php } ?>
<span class='normal'><?php echo image_tag('module_'.$sf_context->getModuleName()); ?> <?php echo $module ;?></span>
&raquo;
<a  href="<?php echo url_for($sf_context->getModuleName().'/index'); ?>"><?php echo $allWord;?></a>
<?php if(!is_null($category)){?>
&raquo; <span class='current'><?php echo html_entity_decode($category->thumbTag()).' '; echo $category['name']; ?></span>
<?php }
if (!is_null($keyword)){
?>
&raquo; <span class='normal'>Search results for "<span class='current'><?php echo $keyword;?></span>"</span>
<?php
}
?>

</h2>