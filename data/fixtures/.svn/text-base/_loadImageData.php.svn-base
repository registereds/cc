<?php



//get all listings
$listings = Doctrine::getTable('Listing')->findAll();

//foreach listing add comments

foreach ($listings as $listing) {

    if(rand(1, 10) > 1) {
        $uid =  rand(1,2);
        $c = new Image();
        $c['listing_id'] = $listing['id'];
        $c['description'] = 'image title, etc lamp $15';
        $c['user_id'] =$uid;
        $c['url'] ="http://www.totallyace.co.uk/webdesign/ecommerce-website.jpg";
        $c->save();
        $c->free(true);

        $c = new Image();
        $c['listing_id'] = $listing['id'];
        $c['description'] = 'image title2';
        $c['user_id'] =$uid;
        $c['url'] ='http://www.ecommercewebdesigner.com.au/media/e-commerce.jpg';
        $c->save();

        $c->free(true);



    }




}