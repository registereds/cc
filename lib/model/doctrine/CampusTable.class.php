<?php

class CampusTable extends Doctrine_Table
{

    public static function getCampusNameArray(){
        $cs = Doctrine_Query::create ()->from ( 'Campus c' )->addWhere('abbv!=""')->execute();
        $res = array();

        foreach ($cs as $c){            
            $res[] = $c->getName();
        }
        return array_unique($res);
        

    }
}
