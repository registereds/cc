<div class="clearfix">

    <h2 class="crumbs">
        <?php echo image_tag('module_listing')?><span class='normal'>Post a New Listing</span>
    </h2>

    <div class="home-content lfloat">
        <h3 class="form_section_header">Which of the following best describes your listing ?</h3>
        <div class="clearfix">
            <br />
            <div class="box lfloat" style="width:200px;margin-right: 40px;">
                <div class="box-top-outer">
                    <div class="box-top-inner">
                    </div>
                </div>
                <div class="box-mid-outer">
                    <div class="box-mid-inner">

                        <div class="box-content">
                            <div class="publock">
                                <div class="publock-content centered">
                                    <a class="natural" href="<?php echo url_for1('listing/postForm?m=marketplace');?>" >
                                    <?php echo image_tag('module_marketplace_b'); ?>
                                    <br />
                                    Sell & Buy Items
                                    </a>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-bottom-outer">
                    <div class="box-bottom-inner">
                    </div>
                </div>

            </div>
            <div class="box lfloat" style="width:200px;margin-right: 40px;">
                <div class="box-top-outer">
                    <div class="box-top-inner">
                    </div>
                </div>
                <div class="box-mid-outer">
                    <div class="box-mid-inner">

                        <div class="box-content">
                            <div class="publock">
                                <div class="publock-content centered">
                                    <a class="natural" href="<?php echo url_for1('listing/postForm?m=events');?>" >
                                   <?php echo image_tag('module_events_b');?>
                                    <br />
                                    News or event
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-bottom-outer">
                    <div class="box-bottom-inner">
                    </div>
                </div>

            </div>
            <div class="box lfloat" style="width:200px;">
                <div class="box-top-outer">
                    <div class="box-top-inner">
                    </div>
                </div>
                <div class="box-mid-outer">
                    <div class="box-mid-inner">

                        <div class="box-content">
                            <div class="publock">
                                <div class="publock-content centered">
                                    <a class="natural" href="<?php echo url_for1('listing/postForm?m=forum');?>" >
                                    <?php echo image_tag('module_forum_b'); ?>
                                    <br />
                                    Forum topic
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-bottom-outer">
                    <div class="box-bottom-inner">
                    </div>
                </div>

            </div>
            <div class="clearfix" > </div>
            <div class="lfloat" style="width:200px;margin-right: 40px;">
                <ul class="cat-list">
                    <?php foreach($categories[Listing::MODULE_MARKETPLACE] as $cat){
                        echo '<li>'.  link_to1($cat['name'], 'listing/postForm?m='.Listing::MODULE_MARKETPLACE.'&c='.$cat['id']).'</li>';
                    }
                    ?>
                    
                </ul>
            </div>
            <div class="lfloat" style="width:200px;margin-right: 40px;">
                <ul class="cat-list">
                    <?php foreach($categories[Listing::MODULE_EVENTS] as $cat){
                        echo '<li>'.  link_to1($cat['name'], 'listing/postForm?m='.Listing::MODULE_EVENTS.'&c='.$cat['id']).'</li>';
                    }
                    ?>

                </ul>
            </div>
            <div class="lfloat" style="width:200px;margin-right: 40px;">
                <ul class="cat-list">
                    <?php foreach($categories[Listing::MODULE_FORUM] as $cat){
                        echo '<li>'.  link_to1($cat['name'], 'listing/postForm?m='.Listing::MODULE_FORUM.'&c='.$cat['id']).'</li>';
                    }
                    ?>

                </ul>
            </div>

        </div>

    </div>
    <?php    include_partial('postFormRightColumn', array('loginBox'=>true)); ?>
</div>
