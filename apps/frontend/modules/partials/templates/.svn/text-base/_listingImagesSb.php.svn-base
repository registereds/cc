<div class="box">
    <div class="box-top-outer">
        <div class="box-top-inner">
        </div>
    </div>
    <div class="box-mid-outer">
        <div class="box-mid-inner">
            <h3 class="box-header">Images</h3>
            <div class="box-content">
                <div class="item-images">
                    <?php
                        $images = $listing->getListingImages();
                        foreach($images as $img){
                    ?>

	            <a class="fancy-image" rel='itemImage' title="<?php echo $img->getDescription(); ?>" href="<?php echo $img->getUrl(); ?>" >
                        <?php echo html_entity_decode($img->toHTMLTag(true)); ?>

                    </a>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="box-bottom-outer">
        <div class="box-bottom-inner">

        </div>
    </div>
</div>