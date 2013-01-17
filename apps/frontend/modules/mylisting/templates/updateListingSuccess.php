<div class="clearfix">

    <?php
    include_partial('my/myTabNav', array('currentTab' => 'listing'));
    ?>

    <div class="box">


        <h3 class="form_section_header"><?php echo image_tag('icon_tick'); ?> Your listing is updated</h3>
        <ul class="feedback">
            <li>Preview your listing: <?php echo html_entity_decode($listing->getHTMLAnchor(array('target' => '_blank'))); ?></li>
            <li>Go back to <?php echo link_to1('My Listings', 'my/listings'); ?></li>
        </ul>


    </div>






</div>
