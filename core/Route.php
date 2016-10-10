<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 19.09.16
 * Time: 18:43
 */

class Route{

    static public $routeName;       //      route name

    static public $controller;       //     controller

    static private $method;         //      method in controller

    static public $data;            //      array of data

    static public $requestMethod;   //      array of data








    ////////////////////////////////////////////////////////////////////////////////////////////
    // makeNewRout(str,arr('as'=>NAME,uses=>'CONTROLLER@METHOD'));  make new static rout
    static function makeNewRout($str,$arr){
        Route::$routeName = trim(strip_tags($str));
        Route::$routeName = $arr['as'];
        $func=explode($arr,'@');
        Route::$controller=$func['0'];
        if (isset($func[1])){
            Route::$method=$func[1];
        }else{
            Route::$method='index';
        }
        return false;
    }

    // get requestMethod
    public static function get($str,$arr){
        Route::makeNewRout($str,$arr);
        Route::$requestMethod='get';
    }

    // post requestMethod
    public static function post($str,$arr){
        Route::makeNewRout($str,$arr);
        Route::$requestMethod='post';
    }

    // put requestMethod
    public static function put($str,$arr){
        Route::makeNewRout($str,$arr);
        Route::$requestMethod='put';
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////








    // search in routings. make data and return true, or return false(if there no routings in routings.php NOT WORKING
    private function lookRoutings(){
        return false;
    }

    // make data from URL
    private function makeDataFromUrl(){
        if (empty($_GET)){
            Route::$controller='home';
            return true;
        }
        $routs= explode('/',strip_tags($_GET['route']));
        $result=array();
        foreach ($routs as $k=>$v){
            switch ($k){
                case 0:
                    $result['controller']=$v;
                    $result['method']='index';
                    Route::$controller=$v;
                    Route::$method='index';
                    break;
                default: $result['data'][]=$v;
            }
        }
        if (!empty($result['data']))
        Route::$data=$result['data'];
        return true;
    }

    private function __construct(){
        if (!$this->lookRoutings()){
            $this->makeDataFromUrl();
        }
    }

    static public function start(){
        $rout= new Route();
    }
}