<div class="clearfix">
    <?php
    include_partial('partials/crumbs');
    ?>

    <div class="home-content rfloat">
        <div class="clearfix pagination">
  		Showing (<?php echo $pager->getFirstIndice() . ' - ' . $pager->getLastIndice(); ?>) of <span class="bold"><?php echo $pager->getNbResults(); ?></span> listings in <span class="bold italic"><?php echo $category['name']; ?></span>
            <a class="post-new-link" href="<?php echo url_for('listing/postForm?m='.$sf_context->getModuleName ())?>">+ Create New</a>
        </div>

        <?php
            foreach ($listings as $listing) {
                include_partial('partials/listingScreenShot', array('listing' => $listing));
            }
        ?>

<?php
            if ($pager->haveToPaginate()) {
                include_partial('partials/paginator', array('pager' => $pager));
            }
?>
        </div>

        <div class="home-sidebar lfloat">


<?php if (!$category) { ?>
                <div class="home-sidebar-region">
                    <h3>Categories</h3>
                    <ul class="item-list">
<?php for ($i = 0; $i < 6; $i++) { ?>
                            <li><a href="http://freshmeat.net/projects/phpivr">phpivr 0.9.3</a></li>
<?php } ?>

            </ul>
        </div>
<?php } ?>



        <div class="clearfix"></div>

        <div class="padtop"></div>
    </div>
</div>
