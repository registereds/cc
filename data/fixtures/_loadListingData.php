<?php



function genRandomIds($count, $min, $max){
    $result = array();
    for($i = 0; $i<$count; $i++){

        $result [] = rand($min, $max);
    }
    return $result;


}

// create listing for two cities, two categories
$modules = array();
$modules['marketplace']['cities']['6']['campuses'] = genRandomIds(3, 15, 23);//15~23
$modules['marketplace']['cities']['7']['campuses'] = genRandomIds(4, 24, 33);//24~33
$modules['marketplace']['cats'] = genRandomIds(10, 1, 2);



 
 
foreach ($modules as $module=>$dt) {

    foreach($dt['cats'] as $catId) {

        foreach ($dt['cities'] as $cityId=>$campuses) {
            
            foreach($campuses['campuses'] as $campusId) {

                $li  = new Listing ( );
                $li ['name'] = ' Charcoal Lancer ES 2009 Auto for sales-'.$module.'-'.$catId.'-'.$campusId.'-'.$cityId;
                $li ['description'] = 'Lancer ES 2009, charcoal,lady driver, auto with parking sensor, cruise control,asking for $21500, happy to negotiate. Please contact Sarah Ng at 0403465413 or ws.sarah.ng@gmail.com happy to negotiate. Please contact Sarah Ng at 0403465413 or ws.sarah.ng@gmail.com happy to negotiate. Please contact Sarah Ng at 0403465413 or ws.sarah.ng@gmail.com happy to negotiate. Please contact Sarah Ng at 0403465413 or ws.sarah.ng@gmail.com happy to negotiate. Please contact Sarah Ng at 0403465413 or ws.sarah.ng@gmail.com happy to negotiate. Please contact Sarah Ng at 0403465413 or ws.sarah.ng@gmail.com';
                $li ['contact'] = 'Jessie';
                $li ['module'] = $module;
                $li ['category_id'] = $catId;
                $li ['user_id'] = rand(1, 2);
                $li ['campus_id'] = $campusId;
                $li ['city_id'] = $cityId;
                $li->save ();
                $li->free(true);
                echo '.';

                $li = new Listing ( );
                $li ['name'] = ' YAMAHA VIRAGO 2000'.$module.'-'.$catId.'-'.$campusId.'-'.$cityId;
                $li ['description'] = 'YAMAHA VIRAGO 2000 FOR SALE 250CC,BLACK,21000KM FEMALE OWNER,REG\'LL EXPIRED MAR. COME WITH RWC $4000 ';
                $li ['contact'] = '0430700091';
                $li ['module'] = $module;
                $li ['category_id'] = $catId;
                $li ['user_id'] = rand(1, 2);
                $li ['campus_id'] = $campusId;
                $li ['city_id'] = $cityId;
                $li->save ();
                $li->free(true);
                echo '.';

            }
        }
    }
}

