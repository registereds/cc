<?php

class myUrlUtil {

    /**
     * this function sets paramesters for a given url and returns the updated url
     */
    public static function addQuery($url, $p, $v) {

        $parts = parse_url($url);
        $qs = array();
        if(isset($parts['query'])){
              parse_str($parts['query'], $qs);

        }
        $qs[$p] = $v;
        $parts['query'] = http_build_query($qs);

        $schema = myArrayUtil::getValue($parts, 'scheme', '');
        $host = myArrayUtil::getValue($parts, 'host', '');
        $user = myArrayUtil::getValue($parts, 'user', '');
        $pass = myArrayUtil::getValue($parts, 'pass', '');
        $path = myArrayUtil::getValue($parts, 'path', '');
        $query = myArrayUtil::getValue($parts, 'query', '');
        $fragment = myArrayUtil::getValue($parts, 'fragment', '');

        $res = $schema;

        if($schema != ''){
            $res.='://';
        }

        $res.=$user;

        if($user!=''){
            $res.=':';
        }

        $res.=$pass;

        if($pass!=''){
            $res.='@';
        }

        $res.=$host.$path.'?'.$query;

        if($fragment != ''){
            $res.='#'.$fragment;
        }



        return $res;
    }
 

    
}