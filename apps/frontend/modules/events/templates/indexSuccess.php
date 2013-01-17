<div class="clearfix">
<?php
	include_partial('partials/crumbs');
?>
<div class="page-body">
 <p>Thousands of
  applications, which are p to obtain more information, and a history
  of the project's releases, so readers can keep
  developments.</p>
</div>



<div class="home-content rfloat">
  	<div class="clearfix pagination">
  		Showing (<?php echo $pager->getFirstIndice().' - '.$pager->getLastIndice(); ?>) of <span class="bold"><?php echo $pager->getNbResults(); ?></span> listings.
		<a class="post-new-link" href="<?php echo url_for('listing/postForm?m='.$sf_context->getModuleName ())?>">+ Create New</a>
	</div>
<?php foreach ($listings as $listing){

	include_partial('partials/listingScreenShot', array('listing'=>$listing));

}?>

<?php
 if ($pager->haveToPaginate()){
include_partial('partials/paginator', array('pager'=>$pager));
 }
?>
</div>


<div class="home-sidebar lfloat">

<?php include_partial('partials/sideBarCategory', array('categories'=>$categories))?>




<div class="clearfix"></div>

<div class="padtop"></div>
</div>
</div>
