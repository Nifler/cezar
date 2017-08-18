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
            $this->route=Route::$controller;
    }

    //prototype of view
    public function getView($page){

        $this->addHeaders();
        if (!file_exists("view/$page.blade.php")) {
            echo"Page not found."; die;
        }
        include("view/$page.blade.php");
    }

    private function addHeaders()
    {
        header('Access-Control-Allow-Origin: *');
    }

}