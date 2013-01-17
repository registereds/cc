<div class="item-screenshot clearfix  min130" >
    <h2 class="item-screenshot-head" >
        <span class="clearfix item-screenshot-date"> 
            <?php use_helper('Date'); echo format_datetime($listing['created_at'], 'dd MMM yyyy hh:mm');?>
        </span>
        <?php echo html_entity_decode($listing['Category']->thumbTag()); ?>
        <?php echo html_entity_decode($listing->getHTMLAnchor(array('class' => 'natural'))); ?>
        </h2>

        <div ><?php echo html_entity_decode($listing->getAnchoredThumb()); ?></div>


        <p class="truncate description"><?php echo $listing['description']; ?>

        </p>
        <div class="clearfix itemInfo">
            <span title="Author">
            <?php echo image_tag('icon_author', array('alt' => 'Author')) ?>
            <span class="tagSize4" ><?php echo $listing->getUser()->getNickName(); ?> (ID:<?php echo $listing['user_id'] ?>)</span>
        </span>
        <span title="Comments">
            <?php echo image_tag('icon_comment', array('alt' => 'Comments')) ?>
            <span class="tagSize4">x <?php echo count($listing['ListingComments']); ?></span>
        </span>
        <span title="Views">
            <?php echo image_tag('icon_view', array('alt' => 'Views')) ?>
            <span class="tagSize4">x <?php echo $listing['count_view']; ?></span>
        </span>
        <span title="Photos">
            <?php echo image_tag('icon_camera', array('alt' => 'Photos')) ?>
            <span class="tagSize4">x <?php echo $listing->getImageCount(); ?></span>
        </span>
        <span title="Category">
            <?php echo image_tag('icon_category', array('alt' => 'Category')) ?>
            <?php echo html_entity_decode($listing->getCategory()->getHTMLAnchor(array('class' => 'tagSize4'))); ?>
        </span>
    </div>



</div>
