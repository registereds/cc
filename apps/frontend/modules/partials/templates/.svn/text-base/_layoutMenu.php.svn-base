<?php 
$eventsClass = ''; 
$marketplaceClass = ''; 
$listingClass = '';
$forumClass = ''; 
$myClass = '';
$module = $sf_context->getModuleName ();
if(strpos($module, 'my')===0){
    $module ='my';
}
$moduleClass = $module.'Class';
$$moduleClass = 'class="current"';


$currentCat = $sf_request->hasParameter('category') ? $sf_request->getParameter('category'):null;
$searchAction = '';
if(is_null($currentCat)){
    switch($sf_context->getModuleName ()){
        case 'events':
        case 'marketplace':
        case 'forum':
            $searchAction = url_for($module.'/index');
            break;
        default:
            $searchAction = url_for('homepage');
    }    
}else{
  
    $searchAction = url_for('category', array( 'sf_subject' => $currentCat, 'module'=>$module));
}


$searchKeyword = $sf_request->getParameter('keyword', '');
?>	            

<div id="head">
<div id="head-menu">   
        <div id="menu-nav">
            <ul>
                <li id="menu-home">
                    <a href="<?php echo url_for('home/index');?>"><?php echo image_tag('menu_home'); ?></a>
                </li>
                <li><a <?php echo $eventsClass; ?> href="<?php echo url_for('events/index')?>">News & Events</a></li>
                <li><a <?php echo $marketplaceClass; ?> href="<?php echo url_for('marketplace/index')?>">Marketplace</a></li>
                <li><a <?php echo $forumClass; ?> href="<?php echo url_for('forum/index')?>">Forum</a></li>
                <li><a <?php echo $listingClass; ?> href="<?php echo url_for('listing/postForm')?>">Post Listing</a></li>
                <li><a <?php echo $myClass; ?> href="<?php echo url_for('my/index');?>">My Center</a></li>
            </ul>
        </div>
        <div class="top-search"  >
            <form action="<?php echo $searchAction; ?>" id="navSearch" method="get" >
                <input id="searchInput" name="q" type="text" value="<?php echo $searchKeyword; ?>">
                <input  value="Search" type="submit">
            </form>
        </div>
</div>
</div>
