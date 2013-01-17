<?php 
$listingClass = '';
$messageClass = '';
$accountClass = '';
$pageClass = '';

if(isset($currentTab)) {
    $temp =$currentTab.'Class';
    $$temp = ' class="active" ';
}
?>
<div class="navTabContainer clearfix">
    <div>
        <ul class="navtabs">
            <li <?php echo $listingClass;?>>
                <a href="<?php echo url_for('mylisting/index');?>">My Listings</a>
            </li>
            <li <?php echo $messageClass;?>>
                <a href="<?php echo url_for('mymessage/index');?>">My Messages</a>
            </li>
            <li <?php echo $accountClass;?>>
                <a href="<?php echo url_for('myaccount/index');?>">My Account</a>
            </li>
            <li <?php echo $pageClass;?>>
                <a href="<?php echo url_for('mypage/index');?>">My Page</a>
            </li>
        </ul>

    </div>
</div>