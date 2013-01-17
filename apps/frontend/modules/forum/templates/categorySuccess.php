<div class="clearfix">

<?php 
include_partial('partials/crumbs');
?>
 

<div class="topic-content">
    
  	<div class="clearfix pagination">
  		Showing (<?php echo $pager->getFirstIndice().' - '.$pager->getLastIndice(); ?>) of <span class="bold"><?php echo $pager->getNbResults(); ?></span> topics.
		<a class="post-new-link" href="<?php echo url_for('listing/postForm?m='.$sf_context->getModuleName ())?>">+ Create New</a>
	</div>

	<ul class="tree-list">
	<?php for($i=0; $i<12; $i++){?>
		<li>
			<a href='/'>How are you , I am fine thank you, this is topic head threadHow are you , this is topic head thread</a>  (Thread #1312) - hellokitty (374 bytes)  12 Dec 09 12:33am (124 views)
				<ul>
				<?php for($b=0; $b<3; $b++){?>
					<li>
						<a href='/'>How are you , I am fine thank you</a> - dummy (12 bytes) 12 Dec 08 13:00am 
						<ul>
						<?php for($c=0; $c<2; $c++){?>
							<li>
								<a href='/'>and you ?</a> - dummy (12 bytes) 12 Dec 08 13:00am 
								
							
							</li>
						<?php }?>
						
						</ul>
					
					</li>
				<?php }?>
				
				</ul>
		
		</li>
	<?php }?>
	
	</ul>
</div>
<?php
 if ($pager->haveToPaginate()){
include_partial('partials/paginator', array('pager'=>$pager));
 }
?>


</div>
