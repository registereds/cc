<div class="clearfix">
<?php 
	include_partial('partials/crumbs');
?>


 

<div class="home-content rfloat">

      	<div class="clearfix pagination">
  		Showing (<?php echo $pager->getFirstIndice().' - '.$pager->getLastIndice(); ?>) of <span class="bold"><?php echo $pager->getNbResults(); ?></span> results in <span class="bold italic"><?php echo $category['name'];?></span>
		<a class="post-new-link" href="<?php echo url_for('listing/postForm?m='.$sf_context->getModuleName ())?>">+ Create New</a>
	</div>
 
<?php 
foreach ($listings as $listing){
	include_partial('partials/listingScreenShot', array('listing'=>$listing));
}


?>

<?php 
 if ($pager->haveToPaginate()){ 
include_partial('partials/paginator', array('pager'=>$pager));
 }
?>
</div>


<div class="home-sidebar lfloat">
<?php

    include_partial('partials/sideBarCategorySearch', array('categories'=>$categories, 'categoryCounts'=>$categoryCounts, 'current'=>$category));

?>
<div class="clearfix"></div>

<div class="padtop"></div>
</div>
</div>

