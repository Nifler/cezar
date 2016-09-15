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

    private function getPage(){
        if (isset($_GET['page'])){
            $this->route=strip_tags($_GET['page']);
            unset($_GET['page']);
            $this->pageInfo=$_GET;

        }else{
            $this->route='home';
        }

    }

    public function getView($page){

        $tpl=file_get_contents("view/$page.blade.php");

        echo $tpl;
    }
}