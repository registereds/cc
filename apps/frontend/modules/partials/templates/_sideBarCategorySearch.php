<div class="box">
    <div class="box-top-outer">
        <div class="box-top-inner">
        </div>
    </div>
    <div class="box-mid-outer">
        <div class="box-mid-inner">
            <h3 class="box-header">Refine search</h3>
            <div class="box-content">
<ul class="item-list">
<?php

foreach ($categories as $category){
    if(!isset($categoryCounts[$category['id']])){
        continue;
    }
    $listClass = '';
    $link = '';
    if(isset($current) && $current['id'] == $category['id']){
        $listClass = 'class="current"';
        $link = $category['name'].' (&nbsp;'.$categoryCounts[$category['id']].'&nbsp;)';
    }else{
        
        $searching = $sf_user->getFlash('keyword', '');
        $options = $searching=='' ? array():array('query_string'=>'q='.$searching);
        $link = html_entity_decode($category->getHTMLAnchor($options)).' (&nbsp;'.$categoryCounts[$category['id']].'&nbsp;)';
    }

?>
    <li <?php echo $listClass; ?> title="<?php echo addslashes($category['description']);?>" >

<?php
	echo html_entity_decode($category->thumbTag());


	echo $link; ?></li>
<?php }?>
</ul>
            </div>
        </div>
    </div>
    <div class="box-bottom-outer">
        <div class="box-bottom-inner">
        </div>
    </div>
</div>
