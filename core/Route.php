<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 19.09.16
 * Time: 18:43
 */

class Route{

    static public $path;

    static public $data;

    static private $method;

    // search in routings. make data and return true, or return false(if there no routings in routings.php NOT WORKING
    private function lookRoutings(){

    }

    // make data from URL
    static private function makeDataFromUrl(){
        if (empty($_GET)){
            Route::$path='home';
            return true;
        }
        $routs= explode('/',strip_tags($_GET['route']));
        $result=array();
        foreach ($routs as $k=>$v){
            switch ($k){
                case 0: $result['controler']=$v; Route::$path=$v; break;
                default: $result['data'][]=$v;
            }
        }
        if (!empty($result['data']))
        Route::$data=$result['data'];
        return true;
    }


    static public function start(){
        Route::makeDataFromUrl();
    }



}