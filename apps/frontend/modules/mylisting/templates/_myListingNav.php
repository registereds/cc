<div class="filter">
<h3>My Listings</h3>
<ul class="facetedTags">
	<li><?php echo image_tag('module_marketplace');?> Marketplace</li>

        <?php

            $thisModule = Listing::MODULE_MARKETPLACE;
            $moduleListings = myArrayUtil::getValue($listings, $thisModule, array());

            

            foreach($moduleListings as $status=>$listing){
                
                $selected = $thisModule == $currentModule && $status == $currentStatus ? ' class="selected" ':'';
                echo '<li '.$selected.'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="'.url_for1('mylisting/index?type='.$thisModule.'_'.$status).'">'.ucfirst($status).' ('.count($listing).')</a></li>';
                
            }

            if(count($moduleListings) ==0 ){
                echo '<li class="empty">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;No listing&gt;</li>';
            }

        ?>
        <li><?php echo image_tag('module_events');?> News & Events </li>
        

        <?php

            $thisModule = Listing::MODULE_EVENTS;

            $moduleListings = myArrayUtil::getValue($listings, $thisModule, array());

            foreach($moduleListings as $status=>$listing){
                $selected = $thisModule == $currentModule && $status == $currentStatus ? ' class="selected" ':'';
                echo '<li '.$selected.'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="'.url_for1('mylisting/index?type='.$thisModule.'_'.$status).'">'.ucfirst($status).' ('.count($listing).')</a></li>';

            }
            if(count($moduleListings) ==0 ){
                echo '<li class="empty">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;No listing&gt;</li>';
            }

        ?>

        <li><?php echo image_tag('module_forum');?> Forum</li>


        <?php

            $thisModule = Listing::MODULE_FORUM;

            $moduleListings = myArrayUtil::getValue($listings, $thisModule, array());

            foreach($moduleListings as $status=>$listing){
                $selected = $thisModule == $currentModule && $status == $currentStatus ? ' class="selected" ':'';
                echo '<li '.$selected.'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="'.url_for1('mylisting/index?type='.$thisModule.'_'.$status).'">'.ucfirst($status).' ('.count($listing).')</a></li>';

            }
            if(count($moduleListings) ==0 ){
                echo '<li class="empty">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;No listing&gt;</li>';
            }

        ?>
</ul>
</div>