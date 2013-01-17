<div class="clearfix">


    <?php
    include_partial('partials/crumbs');
    ?>

    <div class="page-body">
        <p>Thousands of
            applications, which are p to obtain more information, and a history
            of the project's releases, so readers can keep
            developments.</p>
    </div>





    <div class="box">
        <div class="box-top-outer">
            <div class="box-top-inner">
            </div>
        </div>
        <div class="box-mid-outer">
            <div class="box-mid-inner">
                <div class="box-content">
                    <div class="table-content">
                        <table  style="margin: 0px;">
                            <thead class="box-header">
                                 <tr>
                                    <th class='topics left'>Topics</th>
                                    <th>Posts</th>
                                    <th class='right'>Last Post</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                <?php foreach ($categories as $category) {?>
                                <tr>
                                    <td class='left' >
                                        <div class='topic'><?php echo html_entity_decode($category->imageTag());?> <a href='<?php echo url_for(array('sf_route' => 'category', 'sf_subject' => $category, 'module'=>$sf_context->getModuleName())); ?>'><?php echo $category['name'];?></a></div>
                                        <p class='topic-desc'><?php echo $category['description']?></p>
                                    </td>
                                    <td  class='posts'>123</td>
                                    <td class='right'>
                                        <div class='post'><a href=''>Your Uni/College</a></div>
                                        <p class='post-desc'>Posted by thxx id 123 on 23 Dec 2009 12:32am </p>
                                    </td>
                                </tr>

                                    <?php } ?>


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="box-bottom-outer">
            <div class="box-bottom-inner">

            </div>
        </div>
    </div>







</div>
