<?php



//get all listings
$listings = Doctrine::getTable('Listing')->findAll();

//foreach listing add comments

foreach ($listings as $listing) {

    $c = new Comment();
    $c['listing_id'] = $listing['id'];
    $c['description'] = 'This is a comment, comment that as how much is it or just an example for short comment.';
    $c['user_id'] = rand(1,2);
    $c->save();

    $c1 = new Comment();
    $c1 = new Comment();
    $c1['listing_id'] = $listing['id'];
    $c1['description'] = ' 2 This is a comment, comment that as how much is it or just an example for short comment.';
    $c1['user_id'] = rand(1,2);
    $c1->save();


    $c = new Comment();
    $c['listing_id'] = $listing['id'];
    $c['description'] = ' This is a comment, comment that as how much is it or just an example for long comment. or just an example for long comment, or just an example for long comment, or just an example for long comment,,or just an example for long comment, or just an example for long comment';
    $c['parent_id'] = $c1->getId();
    $c['user_id'] = rand(1,2);
    $c->save();

    
 
}