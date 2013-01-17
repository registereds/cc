<?php

class CityTable extends Doctrine_Table
{

    public static function getCityNameArray(){
        $res = array();

        $cs = Doctrine_Query::create ()->from ( 'City c' )->orderBy('name')->execute();
        
        foreach ($cs as $c){
            $res[$c->getId()] = $c->getName();
        }
        
        return $res;

    }
}
