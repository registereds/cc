<div class="pagination">
<?php if ($pager->isFirstPage()){ ?>
<span class="disabled prev_page">&laquo; Previous</span>
 <?php }else{ ?>
 <a href="?page=<?php echo $pager->getPreviousPage() ;?>" class="prev_page" rel="prev">&laquo; Previous</a>
<?php } ?> 

<?php  
$links = $pager->getLinks(11);
reset($links);
$firstLink = $links[0];
$lastLink = $links[count($links)-1];

$searchKeyword = $sf_user->getFlash('keyword', '');
$linkPrefix = $searchKeyword==''? '?page=':'?q='.$searchKeyword.'&page=';

?>

<?php if($firstLink > 1){?>
<a href="<?php echo $linkPrefix;?>1">1</a>
<?php } if($firstLink == 3){ ?>
<a href="<?php echo $linkPrefix;?>2">2</a>
<?php } if($firstLink > 3){ ?>
...
<?php } ?>

<?php echo $pager->current() ; ?> 
<?php foreach ($pager->getLinks(11) as $page){ ?> 
	<?php if ($page == $pager->getPage()){ ?>
	<span class="current"><?php echo $page ?> </span>
	<?php }else if($page == $pager->getPage() ){?>
	<a href="<?php echo $linkPrefix.$page; ?>" rel="next"><?php echo $page; ?></a>
	<?php }else if($page == $pager->getNextPage() ){?>
	<a href="<?php echo $linkPrefix.$page; ?>" rel="next"><?php echo $page; ?></a>
	<?php }else{ ?>
	<a href="<?php echo $linkPrefix.$page; ?>"><?php echo $page; ?></a>
	<?php } ?> 
 <?php  } ?> 

<?php if($pager->getLastPage() - $lastLink > 2){ ?>
...
<?php } if($pager->getLastPage() - $lastLink==2){ ?>
<a href="<?php echo $linkPrefix.$pager->getLastPage()-1;?>"><?php echo $pager->getLastPage()-1;?></a>
<?php } if($pager->getLastPage() != $lastLink){?>
<a href="<?php echo $linkPrefix.$pager->getLastPage();?>"><?php echo $pager->getLastPage();?></a>
<?php } ?>

<?php if ($pager->isLastPage()  ){ ?>
<span class="disabled next_page">Next &raquo;</span>
 <?php }else{ ?>
   <a href="<?php echo $linkPrefix.$pager->getNextPage() ?>" class="next_page" rel="next">Next &raquo;</a>
<?php } ?> 
</div>
