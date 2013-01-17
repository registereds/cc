<div class="clearfix">

    <?php
    use_helper('Date');
    include_partial('partials/myTabNav', array('currentTab'=>'listing'));

    $results = $pager->getResults();
    ?>
 <?php if(count($results) > 0 ) { ?>
    <div class="home-content rfloat">
        <div class="table-content">
            <div class="clearfix pagination">
Showing (<?php echo $pager->getFirstIndice().' - '.$pager->getLastIndice(); ?>) of <span class="bold"><?php echo $pager->getNbResults(); ?></span> listings.
<a class="post-new-link" href="<?php echo url_for('listing/postForm?m='.$sf_context->getModuleName ())?>">+ Create New</a>
            </div>
            <table>
                <tbody>
                    <tr class='header'>
                        <th class='topics left'><?php echo ucfirst($currentStatus);?> Listings</th>
                        <th>View</th>
                        <th>Comment</th>
                        <th class='right' style='width:80px'>Action</th>
                    </tr>
                    <?php foreach ($results as $listing){ ?>
                    <tr>
                        <td class='left'>
                            <div class='post'><?php echo html_entity_decode($listing['Category']->thumbTag());?><a href="<?php echo url_for('mylisting/detail?id='.$listing['id']);?>" class="natural" ><?php echo  $listing->getName();?></a></div>
                            <p class='post-desc'>Posted on <?php echo format_datetime($listing['created_at'], 'dd MMM yyyy hh:mm');?> </p>
                        </td>
                        <td  class='posts'><?php echo $listing['count_view'];?></td>
                        <td  class='posts'><?php echo count($listing['ListingComments']);?></td>
                        <td class='right'>
                            <a href='<?php echo url_for1('mylisting/delete?id='.$listing['id']); ?>' onclick="return confirm('Are you sure you want to delete this post?');"><?php echo image_tag('icon_delete'); ?></a>
                            <a href='<?php echo url_for1('mylisting/edit?id='.$listing['id']); ?>' ><?php echo image_tag('icon_edit'); ?></a>
                        </td>
                    </tr>

                        <?php } ?>


                </tbody>
            </table>
<?php
 if ($pager->haveToPaginate()){
include_partial('partials/paginator', array('pager'=>$pager));
 }
?>

        </div>
    </div>
<?php }else{ ?>
    <div class="home-content rfloat" ><div class="vcenter hightlight" style="width:100px;margin-top: 100px;" >No Listing</div></div>
<?php } ?>



        <div class="home-sidebar lfloat">


            <?php
            include_partial('mylisting/myListingNav', array('currentModule'=>$currentModule, 'currentStatus'=>$currentStatus, 'listings'=>$listings));
            ?>


            <div class="clearfix"></div>

            <div class="padtop"></div>
        </div>



</div>