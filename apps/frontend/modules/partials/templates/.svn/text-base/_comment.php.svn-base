<li class="comment comment-<?php echo $comment['parent_id']>0?'second':'first'; ?>">

<?php echo $comment['description'];
if($comment['parent_id']==0){
?>

<span class="info" >[&nbsp;<a class='trigger'>follow</a>&nbsp;]  [&nbsp;<?php echo $comment['created_at']; ?> by helloworld&nbsp;]</span>

	<form style='display:none' class='comment-form' action="">
            <textarea class='comment-text' rows="8" cols="0" ></textarea>
		<input type="hidden" name='parent' value='0' />
		<div class='submit'>
		<span class='comment-counter'></span>
		<input class='cancel-button'  type="button" name='cancel' value='Cancel' />
		<input  type="submit" name='submit' value='Submit' />
		</div>	
	</form>
</li>
<?php }else{ ?>
<span class="info" > [<?php echo $comment['created_at']; ?> by helloworld]</span>
<?php }?>	
