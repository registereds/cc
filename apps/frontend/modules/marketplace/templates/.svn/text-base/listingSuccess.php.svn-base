<?php 
include_partial('partials/listingCrumbs', array('listing'=>$listing));
?>
 <div class="clearfix">
	<h2 class="underline-header">
		<span class="pushright item-detail-date"><?php use_helper('Date'); echo format_datetime($listing['created_at'], 'dd MMM yyyy hh:mm');?></span>
	<?php echo $listing['name']; ?>
	</h2>

	<div class="item-detail">
	  <p><?php echo $listing['description']; ?></p>
	
	  <ul class="padbottom clearfix">
	    
	    <li><a class="add-favorite fancy-iframe" href="http://www.google.com">Add to favorites</a></li>
	    <li><a class="tell-a-friend fancy-iframe" href="<?php echo url_for('popup/tellafriendForm'); ?>">Tell a friend</a></li>
	  </ul>
	<div class="clearfix counter">
			<span id="pageViewCouterText">&nbsp;<?php echo str_pad($listing['count_view'], 4, 0, STR_PAD_LEFT);?>&nbsp;</span>
	</div>
	  <div class="clearfix">
	
	      <div class="item-comment">
	        <h2>
	         	Comments (<?php echo count($comments); ?>) <a name='comment' ></a>
	        </h2>
			<ul>
				<?php foreach ($comments as $comment) {
				
					include_partial('partials/comment', array('comment'=>$comment));
					
				 }?>
			</ul>
	      </div>
	
	
	  </div>
	
	  <div class="padbottom clearfix comment"> 		  
	  <ul >
	    <li><a  class="report-inappropriate  fancy-iframe" href="<?php echo url_for('pop/reportInappropriateForm');?>">Report This</a></li>
	    <li><a class="trigger add-comment" >Add Comment</a>	    </li>
	  </ul>
	  <form style='display:none' class='comment-form' action="" >
              <textarea class='comment-text' rows="8" cols="0" ></textarea>
				<input type="hidden" name='parent' value='0' />
				<div class='submit'>
				<span class='comment-counter'></span>
				<input class='cancel-button'  type="button" name='cancel' value='Cancel' />
				<input  type="submit" name='submit' value='Submit' />
				</div>			
		</form>	
		</div>
	</div>
	
	<div class="item-side-column">
	  <div class="item-side-block first">
	    <?php include_partial('partials/listingImagesSb' , array('listing'=>$listing));?>
	  </div>	
	  <div class="item-side-block">
	   	<?php include_partial('partials/listingUserDetailSb');?>
	  </div>	  
	</div>
</div>
