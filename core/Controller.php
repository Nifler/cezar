<?php
/**
 * Created by PhpStorm.
 * User: Nifler
 * Date: 27.07.2016
 * Time: 15:38
 */

class Controller
{

    private $route;
    private $pageInfo;

    public function __construct(){

        $this->getPage();

        $this->getView($this->route);

    }


    //Prototype of route
    private function getPage(){
            $this->route=Route::$path;
    }


    //prototype of view
    public function getView($page){

        //$tpl=file_get_contents("view/$page.blade.php");

        //echo $tpl;
        include("view/$page.blade.php");
    }
}